<?php

use App\Http\Controllers\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/post', PostController::class);

require __DIR__ . '/auth.php';
