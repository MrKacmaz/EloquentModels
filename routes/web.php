<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/comments', [CommentController::class, 'index']);
Route::get('/posts/{post_id}/comments', [PostController::class, 'comment']);
