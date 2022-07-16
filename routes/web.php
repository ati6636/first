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

Route::get('/select', function(){
  $posts=DB::select('select * from posts where id= ?', [1]);
  foreach ($posts as $post) {
    return $post->title;
  }
});
Route::get('/update', function () {
    $update= DB::update('update posts set title = "yeni başlık", description="laravel veri tabani", content="veri tabani Dersleri" where id=?', [1]);
    return $update;
});
Route::get('/delete', function () {
    $delete= DB::delete('delete from posts where id=?', [1]);
    return $delete;
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
