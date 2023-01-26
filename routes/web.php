<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
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

#Corcel: Show WordPress Posts in Laravel Project
Route::get('/post-show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/about', [PageController::class, 'about'])->name('pagea');
Route::get('/blog', [PageController::class, 'blog'])->name('pageb');
Route::get('/contact', [PageController::class, 'contact'])->name('pagec');
Route::get('/home', [PageController::class, 'home'])->name('paged');
// Route::get('/check', [PageController::class, 'check'])->name('page');
Route::get('/comm', [CommentController::class, 'comm'])->name('comm');
