<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glance extends Model
{
    use HasFactory;

    public static $data,$image,$imageName,$directory,$imageUrl;

    // glance store function start
    public static function save_glace($request)
    {
        self::$data = new Glance();
        self::$data->title = $request->title??null;
        self::$data->counter = $request->counter??null;
        self::$data->image = self::saveImage($request);
        self::$data->save();
    }

    // glance store function end


    // glance Update function start
    public static function update_glance($request){
        self::$data = Glance::find($request->id);

        self::$data->title = $request->title??null;
        self::$data->counter = $request->counter??null;

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

    // glance Update function end



    // glance delete function start

    public static function delete_glance($request)
    {


        self::$data = Glance::find($request->id);

        if (self::$data->image && file_exists(self::$data->image)) {
            unlink(self::$data->image);
        }

        self::$data->delete();
    }

    // glance delete function end



    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = 'glance_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'glance/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }




}
