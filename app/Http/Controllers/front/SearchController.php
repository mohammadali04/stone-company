<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    function doSearch(Request $request){
        $keyword=$request->keyword;
        $products=Product::where('title','like',$keyword.'%')->paginate(4);
        return view('front.search.index',compact('products'));
    }
}
