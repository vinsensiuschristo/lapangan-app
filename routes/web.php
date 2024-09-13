<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('index.login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('index.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    // Admin Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    // Lapangan routes
    Route::resource('/lapangan', controller: LapanganController::class);
    // Kategori routes
    Route::resource('/kategori', controller: KategoriController::class);

    // Register Edit Update Admin Routes
    Route::resource('/user', controller: AdminController::class);
});
