<?php

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
    // return 'we are in files';
    return view('welcome');
});

Route::get('/test', function () {
    $name = 'ahmed';
    $articles = ['laravel', 'php', 'js'];

    return view('test',[
        'name' => $name,
        'articles' => $articles,
    ]);
});
