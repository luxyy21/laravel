<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductshowController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewshowController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\ProgramshowController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/show', [ProductshowController::class, 'index'])->name('productshow');

// News
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/show', [NewshowController::class, 'index'])->name('newshow');

// Programs 
Route::get('/programs', [ProgramsController::class, 'index'])->name('programs');
Route::get('/programs/show', [ProgramshowController::class, 'index'])->name('progamshow');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
