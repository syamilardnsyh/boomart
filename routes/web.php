<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\SelamatController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/daftar', [DaftarController::class, 'pendaftaran']);

Route::get('/selamat', [SelamatController::class, 'selamat']);

// Auth Register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'registeruser']);

// login
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login']);

// logout
Route::post('/logout', [AuthController::class, 'logout']);

// Update Profil
Route::get('/profil', [AuthController::class, 'showprofil']);
Route::post('/profil', [AuthController::class, 'updateprofil'])->name('updateprofile');

// PRODUK
Route::resource('produk', ProdukController::class);

// Serba 10k,
Route::get('/serba10k', [AuthController::class, 'serba10k']);

// Digital
Route::get('/bookdigital', [AuthController::class, 'bookdigital']);

// Mainan
Route::get('/mainanhobi', [AuthController::class, 'mainanhobi']);

// tambahkan produk
Route::post('/produk', [ProdukController::class, 'store'])
    ->middleware(['auth', 'admin'])
    ->name('produk.store');