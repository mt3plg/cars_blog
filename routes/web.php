<?php

use App\Http\Controllers\PostController;

Route::prefix('lab1')->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::post('posts/{post}/like', [LikeController::class, 'toggleLike'])->name('posts.like');

});


