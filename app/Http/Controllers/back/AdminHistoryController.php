<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class AdminHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histories=History::all();
        return view('back.company_history.index',compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.company_history.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,History $history)
    {
        $history=new History();
        $validationData=$request->validate([
            'description'=> 'required',
        ]);
        try{
            $history->create($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آتم مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.history.index'))->with('success',$msg);
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
    public function edit(Request $request,History $history)
    {
        return view('back.company_history.edit',compact('history'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        $validationData=$request->validate([
            'description'=> 'required',
        ]);
        try{
            $history->update($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آتم مورد نظر با موفقیت ویرایش شد';
        return redirect(Route('admin.history.index'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try{
            History::destroy($request->ids);
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت حذف شد';
        return redirect()->back()->with('success',$msg);
    }
}
