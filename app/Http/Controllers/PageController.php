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
    $class=['1a','2a','3a'];
    //return view('pages.students', compact('students'));
    //return view('pages.students')->with('students', $students);
    return view('pages.students', compact('students', 'class'));
  }
}
