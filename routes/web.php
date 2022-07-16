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

Route::get('/insert', function () {
    DB::insert('insert into posts (title,description,content) values (?,?,?)',['laravel Raw Query',' Laravel Veritabanı','Laravel Veritabanı Dersleri']);
    return 'veri eklendi';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
