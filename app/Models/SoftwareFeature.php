<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareFeature extends Model
{
    use HasFactory;


    public static $data,$image,$imageName,$directory,$imageUrl;


    public static function save_software_features($request)
    {


        self::$data = new SoftwareFeature();

        //  dd($request->software_id);

        self::$data->title = $request->title??null;
        self::$data->software_id = $request->software_id??null;



        self::$data->image = self::mainImage($request);
        self::$data->save();
    }



    public static function update_software_feature($request)
    {
        self::$data = SoftwareFeature::find($request->id);
        self::$data->title = $request->title??null;
        self::$data->software_id = $request->software_id??null;




        if($request->file('image')){
            if(self::$data->image){
                if(file_exists(self::$data->image)){
                    unlink(self::$data->image);
                    self::$data->image = self::mainImage($request);
                }
            }
            else{
                self::$data->image = self::mainImage($request);
            }
        }




        self::$data->save();
    }



    public static function delete_software_feature($request){
        self::$data = SoftwareFeature::find($request->id);

        if (self::$data->image && file_exists(self::$data->image)) {
            unlink(self::$data->image);
        }

        self::$data->delete();
    }











    private static function mainImage($request){

        if($request->file('image')){
          self::$image = $request->file('image');
          self::$imageName = 'software_feature_image-'.rand().'.'. self::$image->Extension();
          self::$directory = 'software/';
          self::$imageUrl = self::$directory.self::$imageName;
          self::$image->move(self::$directory,self::$imageName);
          return self::$imageUrl;
        }

  }



}
