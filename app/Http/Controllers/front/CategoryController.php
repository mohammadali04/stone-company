<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('front.category.content',compact('categories'));
    }
    public function show(Category $category){
        $products=$category->products()->paginate(4);
        return view('front.category.show',compact('products'));
    }
}
