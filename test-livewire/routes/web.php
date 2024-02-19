<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [HomeController::class, 'index'])->name('index');
Route::get('/post/create', [PostController::class, 'create'])->name('post_create');
Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/user/create', [PostController::class, 'edit'])->name('create');

