<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');