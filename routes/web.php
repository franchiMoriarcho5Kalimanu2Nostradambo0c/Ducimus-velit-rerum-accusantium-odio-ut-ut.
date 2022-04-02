<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

// posts
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');

// showPost
Route::get('posts/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->where('post', '[A-z\-]+');
// storePostComment
Route::post('posts/{post:slug}/comments', [App\Http\Controllers\PostCommentsController::class, 'store'])->where('post', '[A-z\-]+');

// register fillForm
Route::get('register', [App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest');
// register filledForm
Route::post('register', [App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest');

// logIn fillForm
Route::get('login', [App\Http\Controllers\SessionsController::class, 'create'])->middleware('guest');
// logIn filledForm
Route::post('login', [App\Http\Controllers\SessionsController::class, 'store'])->middleware('guest');

// logOut
Route::post('logout', [App\Http\Controllers\SessionsController::class, 'destroy'])->middleware('auth');