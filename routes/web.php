<?php

use App\Http\Controllers\PostController;

Route::prefix('lab1')->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::post('posts/{post}/like', [LikeController::class, 'toggleLike'])->name('posts.like');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


