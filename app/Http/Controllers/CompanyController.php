<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function tech_web_company_info_add(){
        return view('admin.company.company',[
            'companyInfo'=>CompanyInfo::first()
        ]);
    }

    public function tech_web_company_info_store(Request $request){
        CompanyInfo::save_company_info($request);
        return back()->with('message','All company information added successfully');
    }



    public function tech_web_company_info_edit($id)
    {
        return view('admin.company.edit-company-info',[
            'companyInfo'=>CompanyInfo::find($id),
        ]);
    }


    public function tech_web_company_info_update(Request $request){
        CompanyInfo::update_company_info($request);
        return back()->with('message','Company Information updated successfully');
    }



    public function tech_web_company_info_delete(Request $request){
        CompanyInfo::delete_company_info($request);
        return back()->with('message','Information deleted successfully');
    }




}
