<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.main');
});

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/services', [ProductController::class, 'services'])->name('services');


Route::get('/secret_migrate', function (Request $request) {
    if ($request->input('code') !== env('SECRET_MIGRATE_CODE')) {
        return "Anda tidak memiliki akses untuk mengakses halaman ini.";
    }
    Artisan::call('migrate --force');
    return "Migrasi berhasil!";
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        Route::resource('users', AdminUserController::class);
        Route::resource('products', AdminProductController::class);
        Route::get('/articles/export-pdf', [AdminArticleController::class, 'exportPdf'])->name('articles.export-pdf');
        Route::resource('articles', AdminArticleController::class);
        Route::resource('messages', AdminMessageController::class)->only(['index', 'show']);
    });
});
