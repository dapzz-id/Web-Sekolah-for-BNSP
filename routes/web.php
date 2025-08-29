<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\NewsController;

// Route untuk halaman utama
Route::get('/', [IndexController::class, 'index'])->name('home');

// Route untuk halaman kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route untuk halaman tentang
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route untuk halaman kegiatan
Route::get('/activities', [ActivityController::class, 'index'])->name('activities');

// Route untuk halaman berita
Route::get('/news', [NewsController::class, 'index'])->name('news');