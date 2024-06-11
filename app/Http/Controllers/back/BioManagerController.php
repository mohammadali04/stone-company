<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Manager;
use App\Models\User;
use Illuminate\Http\Request;

class BioManagerController extends Controller
{
    public function index()
    {
       
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('back.bio-manager.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,About $about)
    {
        $validationData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required',
            'history'=>'required',
        ]);
        try{
            $about->update($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ویرایش شد';
        return redirect()->back()->with('success',$msg);
    }
    public function showManagers(){
        $managers=Manager::all();
        return view('back.bio-manager.managers',compact('managers'));
    }
    public function addManager(){
        $users=User::all();
        $main_info=[];
        foreach($users as $key => $user){
            $main_info[$key]['name']=$user->name;
            $main_info[$key]['id']=$user->id;
        }
       return view('back.bio-manager.create_manager',compact('main_info'));
    }
    public function storeManager(Request $request){
        $validationData=$request->validate([
            'name'=>'required',
            'role'=>'required',
            'img'=>'required',
            'user_id'=> 'required',
        ]);
        $manager=new Manager();
        try{
            $manager->create($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.show.manager'))->with('success',$msg);
    }
    public function editManager(Manager $manager){
        $users=User::all();
        $main_info=[];
        foreach($users as $key => $user){
            $main_info[$key]['name']=$user->name;
            $main_info[$key]['id']=$user->id;
        }
        return view('back.bio-manager.edit_manager',compact('manager','main_info'));
    }
    public function updateManager(Request $request,Manager $manager){
        $validationData=$request->validate([
            'name'=>'required',
            'role'=>'required',
            'img'=>'required',
            'user_id'=> 'required',
        ]);
        try{
            $manager->update($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت ویرایش شد';
        return redirect(Route('admin.show.manager'))->with('success',$msg);
    }
    public function destroyManager(Request $request){
        try{
            Manager::destroy($request->ids);         
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت حذف شد';
        return redirect(Route('admin.show.manager'))->with('success',$msg);
    }

   
}
