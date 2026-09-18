<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/siswa', [SiswaController::class, 'index'])->name('admin.siswa');
Route::get('/user', [UserContoller::class, 'index'])->name('admin.users');
Route::get('/guru', [GuruController::class, 'index'])->name('admin.guru');
Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
Route::get('/profile', [ProfilController::class, 'index'])->name('admin.Profile');
Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index'])->name('admin.ekstrakulikuler');
Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');

