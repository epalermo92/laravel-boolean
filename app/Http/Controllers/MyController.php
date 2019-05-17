<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function getHome(){
      return view('home');
    }

    function getFaq(){
      return view('boolean.faq');
    }
}
