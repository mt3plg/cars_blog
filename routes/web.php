<?php

use App\Http\Controllers\LabController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;

Route::prefix('lab1')->group(function () {
    // Маршрути для реєстрації та авторизації
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Адмінські маршрути з префіксом 'lab1/admin'
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/lab1/admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::resource('/lab1/admin/posts', AdminPostController::class);
    });

});

