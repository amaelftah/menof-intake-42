<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //== require

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
    // return 'we are in files';
    return view('welcome');
});

// Route::group(function(){
//     Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware(['second-gate']);
//     Route::get('/posts/create/', [PostController::class, 'create'])->name('posts.create');
//     Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
//     Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// })->middleware('auth');

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware(['auth', 'second-gate']);
    Route::get('/posts/create/', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
    Route::post('/posts',[PostController::class, 'store'])->name('posts.store')->middleware('auth');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
