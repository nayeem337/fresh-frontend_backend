<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_client($request)
    {
        self::$data = new Client();
        self::$data->name = $request->name??null;
        self::$data->image = self::saveImage($request);
        self::$data->save();
    }




    public static function update_client($request)
    {


        self::$data = Client::find($request->id);

        self::$data->name = $request->names??null;

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


    // Client delete function start
      public static function delete_client($request){
        self::$data = Client::find($request->id);

        if (self::$data->image && file_exists(self::$data->image)) {
            unlink(self::$data->image);
        }

        self::$data->delete();

    }
    // Client delete function end



    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = 'client_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'clients/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }



}
