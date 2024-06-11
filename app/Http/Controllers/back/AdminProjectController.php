<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Exslides;
use App\Models\Project;
use App\Models\ProjectSlides;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $projects=Project::all();
        return view('back.adminproject.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.adminproject.create');
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
        $project=new Project();
        try{
            $project=$project->create($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.project.add.image',$project->id));
    }
    public function addImages(Project $project){
        return view('back.adminproject.add_images',compact('project'));
    }
    public function storeImages(Request $request,Project $project){
        $image=explode(',',$request->image[0]);
        $slide=new ProjectSlides();
        try{
            foreach($image as $row){
                $slide->create(['project_id'=>$request->project_id,'image'=>$row]);
            }
        }catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت ثبت شد';
        return redirect(Route('admin.project.index'))->with('success',$msg);


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
    public function edit(Project $project)
    {
        return view('back.adminproject.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Project $project)
    {
        $validationData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required',
            'date'=>'required',
            'location'=>'required',
        ]);
        try{
            $project->update($request->all());
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='دسته ی مورد نظر با موفقیت ویرایش شد';
        return redirect(Route('admin.project.index'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try{
            Project::destroy($request->ids);
        }
        catch(Exception $exception){
            return redirect()->back()->with('warning',$exception->getCode());
        }
        $msg='آیتم های مورد نظر با موفقیت حذف شد';
        return redirect()->back()->with('success',$msg);
    }
}
