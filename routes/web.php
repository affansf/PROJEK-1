<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::post('/laporan/kirim', [LaporanController::class, 'store'])->name('laporan.kirim');


Route::get('/', function () {
    return view('home');
});

Route::get('/desabersinar', function () {
    return view('desabersinar');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/bukusaku', function () {
    return view('bukusaku');
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