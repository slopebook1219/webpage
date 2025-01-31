<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create',  [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/edit',  [PostController::class, 'edit'])->name('posts.edit');