<?php

namespace App\Controllers;

class PagesController 
{

  public function home() 
  {
    //controller responsibility: 1) receive request, delegate, return a response
    return view('index');
  }

  public function about () 
  {
    $company = 'Laracasts';

    return view('about', ['company' => $company]);
  }

  public function contact() 
  {
    return view('contact');

  }


}