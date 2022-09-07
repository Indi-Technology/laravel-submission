<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

    // Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    // Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit'])->name('posts.edit');

    // Route::patch('/posts/{post:slug}/update', [PostController::class, 'update'])->name('posts.update');

    // Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

    // Route::delete('/posts/{post:slug}/delete', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::resource('posts', PostController::class)->except('index');
    Route::resource('/categories', CategoryController::class)->except('show');
    Route::resource('/tags', TagController::class)->except('create');
});


Route::get('users/{user:username}', [UserController::class, 'profile'])->name('users.profile');

Route::get('/about', function () {
    return view('about');
});
