<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{



    public function tech_web_project_show(){

        return view('admin.project.project');


    }



    public function tech_web_project_store(Request $request){

        Project::save_project($request);
        return back()->with('message','Project added successfully');

    }


    public function tech_web_edit_project($id)
    {
        return view('admin.project.edit-project',[
            'project'=>Project::find($id),
        ]);
    }


    public function tech_web_update_project(Request $request){
        Project::update_project($request);
        return back()->with('message','Project updated successfully');
    }

    // Delete project
    public function tech_web_delete_project(Request $request){
        Project::delete_project($request);
        return back()->with('message','Project has been updated successfully');
    }



}
