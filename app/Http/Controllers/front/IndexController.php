<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Baner;
use App\Models\History;
use App\Models\Manager;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index(){
      $baner=Baner::latest()->get();
      $baner=$baner[0];
    return view('front.content',compact('baner'));
   }
   public function aboutUs(){
      $info=About::first();
      $managers=Manager::all();
      $histories=History::all();
      return view('front.about.index',compact('info','managers','histories'));
  }
}
