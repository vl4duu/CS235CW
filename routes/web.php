<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/create/users', [UserController::class, 'create'])->name('create.user');

Route::post('/users', [UserController::class, 'store'])->name('user.store');

Route::get('/posts', [PostController::class, 'index'])->name('post.list');

Route::post('/posts', [PostController::Class, 'store'])->name('post.store');

Route::get('/create/post', [PostController::Class, 'create'])->name('post.create');

Route::get('/post/details/{id}', [PostController::Class, 'show'])->name('post.show');

Route::post('/comment/store', [CommentController::Class, 'store'])->name('comment.store');

require __DIR__.'/auth.php';