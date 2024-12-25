<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title', 'sub_title', 'link', 'image','type'
    // ];
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_project($request)
    {
        self::$data = new Project();
        self::$data->title = $request->title??null;
        self::$data->sub_title = $request->sub_title??null;
        self::$data->link = $request->link??null;
        self::$data->type = $request->type??null;


        self::$data->image = self::saveMainImage($request);


        self::$data->save();
    }

    // Project update
    public static function update_project($request)
    {
        self::$data = Project::find($request->id);
        self::$data->title = $request->title??null;
        self::$data->sub_title = $request->sub_title??null;
        self::$data->link = $request->link??null;
        self::$data->type = $request->type??null;


        if($request->file('image')){
            if(self::$data->image){
                if(file_exists(self::$data->image)){
                    unlink(self::$data->image);
                    self::$data->image = self::saveMainImage($request);
                }
            }
            else{
                self::$data->image = self::saveMainImage($request);
            }
        }


        self::$data->save();
    }




    // Project delete
    public static function delete_project($request){
        self::$data = Project::find($request->id);

        if (self::$data->image && file_exists(self::$data->image)) {
            unlink(self::$data->image);
        }

        self::$data->delete();
    }



    private static function saveMainImage($request){
        self::$image = $request->file('image');
        self::$imageName = 'project_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'project/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }



}
