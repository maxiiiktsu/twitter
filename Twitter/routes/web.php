<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', [DashboardController::class, 'index'] )->name('dashboard.index');

Route::post('/', [PostController::class, 'store'])->name('post.store');
Route::delete('/{postId}', [PostController::class, 'destroy'])->name('post.destroy');
Route::put('/{postId}', [PostController::class, 'update'])->name('post.update');
route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');




Route::get('/profile', [ProfileController::class, 'index'] );


