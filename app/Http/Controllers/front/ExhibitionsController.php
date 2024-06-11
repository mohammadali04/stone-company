<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use Illuminate\Http\Request;

class ExhibitionsController extends Controller
{
    public function index(){
        $exhibitions=Exhibition::all();
        return view('front.exhibition.index',compact('exhibitions'));
    }
    public function show(Exhibition $exhibition){
        return view('front.exhibition.exhibition',compact('exhibition'));
    }
}
