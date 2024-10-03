<?php

use App\Http\Controllers\LabController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;

Route::prefix('lab1')->group(function () {
    // Маршрут для CRUD операцій з постами
    Route::resource('posts', PostController::class);
});

