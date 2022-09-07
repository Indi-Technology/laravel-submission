<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin-dashboard.home');
    Route::get('/about', [HomeController::class, 'show'])->name('admin-dashboard.about');

    // posts
    Route::prefix('posts')->controller(PostController::class)->name('admin-post.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{post:slug}', 'show')->name('show');
        Route::get('/{post:slug}/edit', 'edit')->name('edit');
        Route::put('/{post:slug}', 'update')->name('update');
        Route::delete('/{post:slug}', 'destroy')->name('destroy');
    });

    Route::prefix('categories')->controller(CategoryController::class)->name('admin-category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        //Route::get('/show', 'show')->name('show');
        Route::get('/{categories}/edit', 'edit')->name('edit');
        Route::put('/{categories}', 'update')->name('update');
        Route::delete('/{categories}', 'destroy')->name('destroy');
    });
});
