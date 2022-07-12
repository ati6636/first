<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home(){
    return view('pages.home');
  }
  public function about(){
    return view('pages.about');
  }
  public function contact(){
    return view('pages.contact.contact');
  }
  public function students(){
    $students = ['cem','ali', 'hasan', 'ali', 'veli'];
    return view('pages.students', compact('students'));
  }
}
