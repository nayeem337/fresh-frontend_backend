<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Software;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function frontPageView(Request $request){
        return Service::all();
    }


    public function tech_web_company_profile(){
        return view('frontend.about.company-profile');
    }


    public function tech_web_ceo_message(){
        return view('frontend.about.ceo-message');
    }


    public function tech_web_photo_gallery(){
        return view('frontend.about.photo-gallery');
    }

    public function tech_web_buy_domain(){
        return view('frontend.website.buy-domain');
    }

    public function tech_web_web_hosting(Request $request){
        return view('frontend.website.web-hosting-bd');
    }


    public function tech_web_web_development(){
        return view('frontend.website.website-dev');
    }

    public function tech_web_ecommerce_website(){
        return view('frontend.website.ecommerce-website');
    }



    public function tech_web_accounting_inventory(){
        return view('frontend.software.accounting-inventory');
    }


    public function tech_web_hr_payroll(){
        return view('frontend.software.hr-payroll');
    }


    public function tech_web_pos_software(){
        return view('frontend.software.pos-software');
    }



    public function tech_web_hospital_management(){
        return view('frontend.software.hospitam-management');
    }


    public function tech_web_inventory_management(){
        return view('frontend.software.inventory-management');
    }


    public function tech_web_erp_software(){
        return view('frontend.software.erp-software');
    }

    public function tech_web_school_management(){
        return view('frontend.software.school-management');
    }


    public function tech_web_freight_software(){
        return view('frontend.software.freight-software');
    }


    public function tech_web_pharmacy_software(){
        return view('frontend.software.pharmacy-management');
    }


    public function tech_web_travel_software(){
        return view('frontend.software.travel-agency');
    }


    public function tech_web_restaurant_management(){
        return view('frontend.software.restaurant-management');
    }


    public function tech_web_prescription_restaurant(){
        return view('frontend.software.prescription-management');
    }


    public function tech_web_bulk_sms_restaurant(){
        return view('frontend.software.bulk-sms-software');
    }


    public function tech_web_whatsapp_marketing(){
        return view('frontend.software.whatsapp-marketing');
    }
    public function softwaredetailspage($id){
                  $page=Software::find($id);
        return view('frontend.software.details',compact('page'));
    }




    public function projectdetailspage($id){
        $project=Project::find($id);
        return view('frontend.project.project-details',compact('project'));
    }













}
