<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'main']);
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('service', [MainController::class, 'service'])->name('service');
Route::get('project', [MainController::class, 'project'])->name('project');
Route::get('blog', [MainController::class, 'latest_blog'])->name('blog');
Route::get('contact', [MainController::class, 'contact'])->name('contact');

// Route::get('/posts', [BlogController::class, 'index'])->name('post.index');
// Route::get('/posts/{post}', [BlogController::class, 'show'])->name('post.show');
// Route::get('/posts/create', [BlogController::class, 'create'])->name('post.create');
// Route::post('/posts/create', [BlogController::class, 'store'])->name('post.store');
// Route::get('/posts/{post}/edit', [BlogController::class, 'edit'])->name('post.edit');
// Route::put('/posts/{post}/edit', [BlogController::class, 'update'])->name('post.update');

// Yuqoridagi izoxga olingan codlar o'rniga quyidagi ni yozish kifoya

Route::resource('posts', PostController::class);
