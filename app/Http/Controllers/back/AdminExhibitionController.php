<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use App\Models\Exslides;
use Illuminate\Http\Request;

class AdminExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exhibitions=Exhibition::all();
        return view('back.exhibitions.index',compact('exhibitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.exhibitions.create');
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
            'date'=>'required',
            'location'=>'required',
        ]);
        $exhibition=new Exhibition();
        try{
            $exhibition=$exhibition->create($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.exhibition.add.image',$exhibition->id));
    }
    public function addImages(Exhibition $exhibition){
        return view('back.exhibitions.add_images',compact('exhibition'));
    }
    public function storeImages(Request $request,Exhibition $exhibition){
        $image=explode(',',$request->image[0]);
        $slide=new Exslides();
        try{
            foreach($image as $row){
                $slide->create(['exhibition_id'=>$request->exhibition_id,'image'=>$row]);
            }
        }catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.exhibition.index'))->with('success',$msg);


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
    public function edit(Exhibition $exhibition)
    {
        return view('back.exhibitions.edit',compact('exhibition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Exhibition $exhibition)
    {
        $validationData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required',
            'date'=>'required',
            'location'=>'required',
        ]);
        try{
            $exhibition->update($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ویرایش شد';
        return redirect(Route('admin.exhibition.index'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try{
            Exhibition::destroy($request->ids);
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت حذف شد';
        return redirect()->back()->with('success',$msg);
    }
}
