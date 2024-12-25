<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{


    public function tech_web_package_add(){
        return view('admin.package.package',[
            'packages'=>Package::get()
        ]);


    }


    public function tech_web_package_store(Request $request){
        Package::save_package($request);
        return back()->with('message','Package added successfully');
    }




    public function tech_web_package_edit($id)
    {
        return view('admin.package.edit-package',[
            'package'=>Package::find($id),
        ]);
    }


    public function tech_web_package_update(Request $request){
        Package::update_package($request);
        return back()->with('message','Package has been updated successfully');
    }


    public function tech_web_package_delete(Request $request){
        Package::delete_package($request);
        return back()->with('message','Package has been deleted successfully');
    }




}
