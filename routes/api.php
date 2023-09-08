<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;


 


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("user",[LoginController::class,'user']);
Route::get("post",[PostController::class,'post']);
Route::get("comment",[CommentController::class,'comment']);