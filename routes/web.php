<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes (User)
|--------------------------------------------------------------------------
*/
Route::view('/', 'welcome');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/berita', 'berita')->name('berita');
Route::view('/galeri', 'galeri')->name('galeri');
Route::view('/kontak', 'kontak')->name('kontak');

/*
|--------------------------------------------------------------------------
| Auth Routes (Login/Register/Logout)
|--------------------------------------------------------------------------
*/

// ✅ Hapus middleware guest agar bisa diakses siapa saja
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin Routes (Only for authenticated users)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    Route::view('/berita', 'admin.berita.index')->name('berita.index');
    Route::view('/galeri', 'admin.galeri.index')->name('galeri.index');
    Route::view('/kontak', 'admin.kontak.index')->name('kontak.index');
    Route::view('/informasi', 'admin.informasi.index')->name('informasi.index');
});
