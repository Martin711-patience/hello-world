<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('posts/{postId}', [PostController::class, 'show'])->name('post.show');

Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');
