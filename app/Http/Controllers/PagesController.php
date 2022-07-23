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
  public function read(){
    $pages=Pages::query()->get();
    return view('read', compact('pages'));
  }
  public function edit($id){
    $page = Pages::query()->find($id);
    $title = $page->title;
    $subtitle = $page->subtitle;
    $content = $page->content;
    return view('edit', compact('title', 'subtitle','content'));
  }
  public function update($id){
    $page= Pages::query()->find($id);
    $page->title = 'yeni Başlık';
    $page->subtitle = 'yeni alt başlık';
    $page->content = 'yeni içerik';

    $page->save();
    return 'veri güncellendi';
  }
  public function delete($id){
    $page = Pages::query()->find($id);
    $page->delete();

    return 'veri silindi';
  }
}
