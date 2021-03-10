<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Common;
class HelloController extends Controller
{
    //
    
  public function index()
  {
    $hello1 = Common::data();
    $hello = "HelloWorld";
    return view('hello',compact('hello', 'hello1'));
  }
}