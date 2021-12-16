<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/comments',[CommentController::class, 'apiStore'])->name('api.comments.store');
Route::get('/posts',[PostController::class, 'apiIndex'])->name('api.posts.index');
Route::get('/comments',[CommentController::class, 'apiIndex'])->name('api.comments.index');
Route::get('/users', [UserController::class, 'apiIndex'])->name('api.users.index');