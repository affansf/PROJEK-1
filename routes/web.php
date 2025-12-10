<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriBukuSakuController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuSakuController;
use Illuminate\Support\Facades\Storage;
use App\Models\MateriBukuSaku;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');

Route::get('/bukusaku', [BukuSakuController::class, 'index'])->name('bukusaku.index');

Route::get('/desabersinar', function () {
    return view('desabersinar');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route untuk Menu Dropdown 'Artikel & Berita' //

Route::get('/narkoba', function () {
    return view('layouts.narkoba');
});

Route::get('/p4gn', function () {
    return view('layouts.p4gn');
});

Route::get('/rehabilitasi', function () {
    return view('layouts.rehabilitasi');
});

Route::get('/hukum', function () {
    return view('layouts.hukum');
});

Route::get('/deteksidini', function () {
    return view('layouts.deteksidini');
});

Route::get('/peredaran', function () {
    return view('layouts.peredaran');
});

Route::get('/peranmasyarakat', function () {
    return view('layouts.peranmasyarakat');
});

Route::get('/pendidikan', function () {
    return view('layouts.pendidikan');
});

Route::get('/pelayanan', function () {
    return view('layouts.pelayanan');
});

Route::get('/dukungan', function () {
    return view('layouts.dukungan');
});

Route::get('/bukusaku/file/{materi}', function (MateriBukuSaku $materi) {
    $disk = Storage::disk('public');
    $path = $materi->file_path;

    if (! $path || ! $disk->exists($path)) {
        abort(404);
    }

    $fullPath = $disk->path($path);

    // Tampilkan PDF di browser (inline)
    return response()->file($fullPath, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="'.basename($fullPath).'"',
    ]);
})->name('bukusaku.file');