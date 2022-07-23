<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get ('create', [PagesController::class, 'create']);
Route::get ('createNew', [PagesController::class, 'createNew']);
Route::get('read', [PagesController::class, 'read']);
Route::get('edit/{id}', [PagesController::class, 'edit']);
Route::get('update/{id}', [PagesController::class, 'update']);
Route::get('delete/{id}', [PagesController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
