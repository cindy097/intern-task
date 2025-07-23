<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
/*
|--------------------------------------------------------------------------
| Route untuk Public (User)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/tentang', 'tentang')->name('tentang');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/kontak', [ContactController::class, 'showPublic'])->name('kontak');
Route::post('/kontak', [MessageController::class, 'store'])->name('messages.store');
Route::get('/berita/{id}', [App\Http\Controllers\NewsController::class, 'show'])->name('berita.show');
/*
|--------------------------------------------------------------------------
| Route untuk Auth (Login & Register)
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Route untuk Admin (hanya untuk yang sudah login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('slideshows', SlideshowController::class);
    Route::resource('galleries', GalleryController::class);

    // Kontak untuk ditampilkan di footer + update data
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::put('contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');

    // Pesan dari user
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
});
Route::get('/berita-json', [BeritaController::class, 'json'])->name('berita.json');
Route::get('/galeri-json', [App\Http\Controllers\GaleriController::class, 'json'])->name('galeri.json');

