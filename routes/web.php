<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', [BeasiswaController::class, 'index'])
    ->name('home');

// Pencarian beasiswa
Route::get('/cari-beasiswa', [BeasiswaController::class, 'cariBeasiswa'])
    ->name('cari.beasiswa');

// Detail beasiswa
Route::get('/scholarship/{id}', [BeasiswaController::class, 'show'])
    ->name('scholarships.show');

// Halaman pendukung
Route::view('/bookmark', 'bookmark')->name('bookmark');
Route::view('/tips-panduan', 'tips-panduan')->name('guides');
Route::view('/kontak', 'kontak')->name('contact');

// Dashboard
Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__ . '/auth.php';
