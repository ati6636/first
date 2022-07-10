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

//REDİRECT(YÖNLENDİRME)
Route::redirect('/','anasayfa');

Route::get('/anasayfa', function(){
  return view('anasayfa');
});
Route::get ('/kurumsal', function(){
  return view('kurumsal');
});
Route::get ('/referanslar', function(){
  return view('referanslar');
});
Route::get ('/iletisim', function(){
  return view('iletisim');
});

//PREFİX KULLANIMI (GRUPLAMA)
Route::prefix('sayfalar')->group( function(){

  Route::get ('/kurumsal', function(){
    return view('kurumsal');
  });
  Route::get ('/referanslar', function(){
    return view('referanslar');
  });
  Route::get ('/iletisim', function(){
    return view('iletisim');
  });
  //FALLBACK Kullanımı
  Route::fallback(function(){
    return view('hata');
  });
});
//FALLBACK Kullanımı
Route::fallback(function(){
  return view('hata');
});
