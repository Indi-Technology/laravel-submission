<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WelcomeController;

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



Route::get('/', [WelcomeController::class, 'index'])->middleware(['auth'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::resource('/posts', PostController::class)->middleware(['auth']);
Route::resource('/categories', CategoryController::class)->middleware(['auth']);
Route::resource('/tags', TagController::class)->middleware(['auth']);
Route::resource('/about', AboutController::class)->only([
    'index'
]);
