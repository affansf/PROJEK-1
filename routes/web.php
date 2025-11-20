<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NarkobaController;
use App\Http\Controllers\P4gnController;
use App\Http\Controllers\RehabilitasiController;
use App\Http\Controllers\HukumController;
use App\Http\Controllers\DeteksiDiniController;
use App\Http\Controllers\PeredaranController;
use App\Http\Controllers\PeranMasyarakatController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\DukunganController;

Route::get('/narkoba', [NarkobaController::class, 'index']);
Route::get('/p4gn', [P4gnController::class, 'index']);
Route::get('/rehabilitasi', [RehabilitasiController::class, 'index']);
Route::get('/hukum', [HukumController::class, 'index']);
Route::get('/deteksidini', [DeteksiDiniController::class, 'index']);
Route::get('/peredaran', [PeredaranController::class, 'index']);
Route::get('/peranmasyarakat', [PeranMasyarakatController::class, 'index']);
Route::get('/peredaran', [PendidikanController::class, 'index']);
Route::get('/pelayanan', [PelayananController::class, 'index']);
Route::get('/dukungan', [DukunganController::class, 'index']);

Route::get('/', function () {
    return view('home');
});

Route::get('/desabersinar', function () {
    return view('desabersinar');
});

Route::get('/artikelberita', function () {
    return view('artikelberita');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/bukusaku', function () {
    return view('bukusaku');
});

Route::get('/narkoba', function () {
    return view('narkoba');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/p4gn', function () {
    return view('p4gn');
});

Route::get('/rehabilitasi', function () {
    return view('rehabilitasi');
});

Route::get('/hukum', function () {
    return view('hukum');
});

Route::get('/deteksidini', function () {
    return view('deteksidini');
});

Route::get('/peredaran', function () {
    return view('peredaran');
});

Route::get('/peranmasyarakat', function () {
    return view('peranmasyarakat');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/pelayanan', function () {
    return view('pelayanan');
});

Route::get('/dukungan', function () {
    return view('dukungan');
});