<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function tech_web_client_add(Request $request){
        return view('admin.client.client',[
            'clients'=>Client::get()
        ]);
    }


    public function tech_web_client_store(Request $request){
        Client::save_client($request);
        return back()->with('message','Client added successfully');
    }

    // client edit page show
    public function tech_web_client_edit($id)
    {
        return view('admin.client.client-edit',[
            'client'=>Client::find($id),
        ]);
    }

    // Client update function
    public function tech_web_client_update(Request $request){
        Client::update_client($request);
        return back()->with('message','Client update successfully');
    }


    // Client delete function start
    public function tech_web_client_delete(Request $request){
        Client::delete_client($request);
        return back()->with('message','Client has been deleted successfully');
    }




}
