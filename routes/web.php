<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('index');
});
// Route::resource('members', MemberController::class)->names([
//     'create' => 'members.build',
// ]);

// Route::resource('posts', PostController::class)->names([
//     'create' => 'posts.build',
// ]);

// Route::resource('users',UserController::class);
// Route::resource('posts',PostController::class);
Route::resource('users.comments', CommentController::class)->shallow();
Route::resource('members', MemberController::class);