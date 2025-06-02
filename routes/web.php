<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route to list all posts
Route::get('/', [PostController::class, 'index'])->name('post.index');

// Show form to create a new post
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

// Save a new post
Route::post('/post', [PostController::class, 'store'])->name('post.store');

// View a single post
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

// Show edit form
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

// Update an existing post
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');

// Delete a post
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
