<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Pslides;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('back.Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('back.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required',
            'cat_id'=>'required',
        ]);
        $product=new Product();
        try{
            $product=$product->create($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.product.add.image',$product->id));
    }
    public function addImages(Product $product){
        return view('back.product.add_images',compact('product'));
    }
    public function storeImages(Request $request,Product $product){
        $image=explode(',',$request->image[0]);
        $slide=new Pslides();
        try{
            foreach($image as $row){
                $slide->create(['product_id'=>$request->product_id,'image'=>$row]);
            }
        }catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.product.index'))->with('success',$msg);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('back.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Product $product)
    {
        $validationData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required',
            'cat_id'=>'required',
        ]);
        try{
            $product->update($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ویرایش شد';
        return redirect(Route('admin.product.index'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try{
            Product::destroy($request->ids);
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت حذف شد';
        return redirect()->back()->with('success',$msg);
    }
}