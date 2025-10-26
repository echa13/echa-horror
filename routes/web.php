<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('Welcome');
});

Route::get('/ulasan-umkm', [ReviewController::class, 'index'])->name('guest.review.index');
Route::post('/ulasan-umkm/store', [ReviewController::class, 'store'])->name('guest.review.store');

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');


Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/Pegawai', [PegawaiController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
->name('question.store');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return "<h1>Selamat datang di Dashboard!</h1>";
});

Route::resource('umkm', UmkmController::class);
Route::resource('user', UserController::class);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
