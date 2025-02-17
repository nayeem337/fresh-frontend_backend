<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function tech_web_add_services()
    {
        return view('admin.service.service',[
            'services'=>Service::get()
        ]);

    }

    public function tech_web_store_services(Request $request)
    {
        Service::save_service($request);
        return back()->with('message','services added successfully');
    }

    public function tech_web_edit_services($id)
    {
        return view('admin.service.edit_service',[
            'service'=>Service::find($id),
        ]);
    }

    public function tech_web_update_services(Request $request)
    {


        Service::update_service($request);
        return back()->with('message','services update successfully');
    }


    public function tech_web_add_services_show(Request $request){
        return view('admin.service.all-services',[
            'services'=>Service::get()
        ]);
    }


    // delete service function

    public function tech_web_delete_services(Request $request){
        Service::delete_service($request);
        return back()->with('message','Service has been deleted successfully');
    }







}
