<?php

namespace App\Http\Controllers;

use App\Models\Glance;
use Illuminate\Http\Request;

class GlanceController extends Controller
{
    //

    public function tech_web_glance_add(){
        return view('admin.glance.glance',[
            'glances'=>Glance::get()
        ]);
    }


    public function tech_web_glance_store(Request $request){
        Glance::save_glace($request);
        return back()->with('message','Glance added successfully');
    }


    public function tech_web_glance_edit($id){
        return view('admin.glance.edit-glance', [
            'glance'=>Glance::find($id)
        ]);

    }


    // Update package function start
    public function tech_web_glance_update(Request $request){
        Glance::update_glance($request);
        return back()->with('message','Glance has been updated successfully');
    }



    // Delete package function start
    public function tech_web_glance_delete(Request $request){
        Glance::delete_glance($request);
        return back()->with('message','Glance has been deleted successfully');
    }






}
