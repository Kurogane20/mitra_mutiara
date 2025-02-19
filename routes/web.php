<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/contact', function () {
    return view('contact');
});

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Group untuk Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('surat', SuratController::class);
    Route::get('surat/{id}/download', [SuratController::class, 'download'])->name('surat.download');
    Route::resource('perusahaan', PerusahaanController::class);
    Route::resource('template', TemplateController::class);
    Route::resource('user', UserController::class); // Hanya admin yang bisa mengelola user
});

// Group untuk User
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
    Route::resource('surat', SuratController::class);
    Route::get('surat/{id}/download', [SuratController::class, 'download'])->name('surat.download');
    Route::resource('perusahaan', PerusahaanController::class);
    Route::resource('template', TemplateController::class);
});
