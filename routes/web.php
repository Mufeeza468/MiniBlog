<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GuestController;



Route::get('/', function () {
    return view('welcome');
});

//Post 
Route::get('create-post', [PostController::class, 'create']);
Route::get('store-post', [PostController::class, 'store']);
Route::get('index-post', [PostController::class, 'index']);

//Actions
Route::get('destroy-post/{post}', [PostController::class, 'destroy']);
Route::get('edit-post/{post}', [PostController::class, 'edit']);
Route::get('update-post/{post}', [PostController::class, 'update']);

Route::get('/guest', 'App\Http\Controllers\GuestController@index')->name('guest.home');

Route::get('/post/comment', 'App\Http\Controllers\CommentController@store')->name('comment.store');



Route::get('/dashboard', function () {
    return view('post/create');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
