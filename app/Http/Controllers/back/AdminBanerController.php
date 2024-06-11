<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Baner;
use Illuminate\Http\Request;

class AdminBanerController extends Controller
{
    public function index()
    {
        $baners=Baner::all();
        return view('back.baner.index',compact('baners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.baner.create');
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
            'subtitle'=>'required',
        ]);
        $baner=new Baner();
        try{
            $baner=$baner->create($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.baner.index',$baner->id));
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
    public function edit(Baner $baner)
    {
        return view('back.baner.edit',compact('baner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Baner $baner)
    {
        $validationData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required',
            'subtitle'=>'required',
        ]);
        try{
            $baner->update($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ویرایش شد';
        return redirect(Route('admin.baner.index'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try{
            Baner::destroy($request->ids);
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت حذف شد';
        return redirect()->back()->with('success',$msg);
    }
}
