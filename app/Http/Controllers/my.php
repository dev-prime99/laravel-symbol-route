<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class my extends Controller
{
  public function pg(){
    return view("outPage.page1");
  }

  public function pga(){
    return view("outPage.page2");
  }
}
