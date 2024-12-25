<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use Illuminate\Http\Request;

class ProjectTypeController extends Controller
{


    public function tech_web_project_type_add(){
        return view('admin.project-type.project-type',[
            'projectTypes'=>ProjectType::all()
        ]);
    }

    public function tech_web_project_type_store(Request $request){
        ProjectType::save_project_type($request);
        return back()->with('message','Project type added successfully');
    }


}
