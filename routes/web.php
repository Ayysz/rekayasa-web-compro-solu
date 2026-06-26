<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/services', [ProductController::class, 'services'])->name('services');
