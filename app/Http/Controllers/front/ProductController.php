<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('front.product.index');
    }
    public function show(Product $product){
        return view('front.product.product',compact('product'));
    }
}
