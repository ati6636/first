<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
  public function create (){

    $pages = new Pages;
    $pages->title = 'laravel eğitimi';
    $pages->subtitle = 'laravel öğreniyorum';
    $pages->content = 'burası açıklama alanı';

    $pages->save();
    return 'veri kaydedildi';
  }
  public function createNew(){
    Pages::create([
      'title'=>'laravel eğitimi',
      'subtitle'=>'laravel 9 öğreniyortum',
      'content'=>'laravel 9 açıklama alanı'
    ]);
    return 'veri Eklendi';
  }
}
