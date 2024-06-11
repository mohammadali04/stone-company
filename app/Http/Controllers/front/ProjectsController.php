<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectSlides;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $projects=Project::all();
        return view('front.our-projects.index',compact('projects'));
    }
    public function show(Project $project){
        return view('front.our-projects.project',compact('project'));
    }
}
