<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;
use App\Models\SoftwareFeature;

class SoftwareController extends Controller
{

    public function tech_web_add_software(Request $request){
        return view('admin.software.add-software',[
            'softwares'=>Software::get()
        ]);
    }

    public function tech_web_store_software(Request $request){
        Software::save_software($request);
        return back()->with('message','Software successfully added successfully');
    }



    public function tech_web_add_software_features(Request $request){
        return view('admin.software.add-software-features',[
            'software_feature'=>SoftwareFeature::all()
        ]);
    }

    public function tech_web_store_software_features(Request $request){
        SoftwareFeature::save_software_features($request);
        return back()->with('message','Software  feature successfully added successfully');
    }



    public function tech_web_edit_software($id)
    {
        return view('admin.software.edit-software',[
            'softwares'=>Software::find($id),
        ]);
    }


    public function tech_web_update_software(Request $request){
        Software::update_software($request);
        return back()->with('message','Software updated successfully');
    }


    public function tech_web_delete_software(Request $request){
        Software::delete_software($request);
        return back()->with('message','Software deleted successfully');
    }


    public function tech_web_edit_software_feature($id){
        return view('admin.software.edit-software-feature', [
            'software_features'=>SoftwareFeature::find($id)
        ]);
    }



    // update software feature start
    public function tech_web_update_software_feature(Request $request){
        SoftwareFeature::update_software_feature($request);
        return back()->with('message','Software feature updated successfully');
    }

    // update software feature end


    // Delete software feature start
    public function tech_web_delete_software_feature(Request $request){
        SoftwareFeature::delete_software_feature($request);
        return back()->with('message','Software feature deleted successfully');
    }

    // Delete software feature end



}
