<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/profile', [ProfilController::class, 'index'])->name('Profile');
Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index'])->name('ekstrakulikuler');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('user', UserController::class);
});