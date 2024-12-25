<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_package($request)
    {
        self::$data = new Package();
        self::$data->title = $request->title??null;
        self::$data->sub_title = $request->sub_title??null;
        self::$data->price = $request->price??null;
        self::$data->featurs = $request->featurs??null;
        self::$data->image = self::saveImage($request);
        self::$data->save();
    }




    public static function update_package($request)
    {
        self::$data = Package::find($request->id);
        self::$data->title = $request->title??null;
        self::$data->sub_title = $request->sub_title??null;
        self::$data->price = $request->price??null;
        self::$data->featurs = $request->featurs??null;
        if($request->file('image')){
            if(self::$data->image){
                if(file_exists(self::$data->image)){
                    unlink(self::$data->image);
                    self::$data->image = self::saveImage($request);
                }
            }
            else{
                self::$data->image = self::saveImage($request);
            }
        }

        self::$data->save();
    }


    // Package delete function
    public static function delete_package($request){
        self::$data = Package::find($request->id);

        if (self::$data->image && file_exists(self::$data->image)) {
            unlink(self::$data->image);
        }

        self::$data->delete();

    }














    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = 'package_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'package/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }







}
