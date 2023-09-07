<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
//post
=======

//Post 
>>>>>>> post
Route::get('create-post', [PostController::class, 'create']);
Route::get('store-post', [PostController::class, 'store']);
Route::get('index-post', [PostController::class, 'index']);

<<<<<<< HEAD
//comment
Route::get('create-comment', [CommentController::class, 'create']);
Route::get('store-comment', [CommentController::class, 'store']);
Route::get('index-comment', [CommentController::class, 'index']);



=======

Route::get('/post/{slug}',[PostController::class,'show']);
>>>>>>> post

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
