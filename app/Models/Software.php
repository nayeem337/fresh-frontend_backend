<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{

    use HasFactory;

    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_software($request)
    {
        self::$data = new Software();
        self::$data->title = $request->title??null;
        self::$data->short_title = $request->short_title??null;
        self::$data->short_des = $request->short_des??null;

        self::$data->des1 = $request->des1??null;
        self::$data->des2 = $request->des2??null;
        self::$data->des3 = $request->des3??null;
        self::$data->des4 = $request->des4??null;
        self::$data->des5 = $request->des5??null;

        self::$data->image_main = self::sliderImage($request);
        self::$data->banner_image = self::bannerImage($request);
        self::$data->image1 = self::saveImage1($request);
        self::$data->image2 = self::saveImage2($request);
        self::$data->image3 = self::saveImage3($request);
        self::$data->image4 = self::saveImage4($request);
        self::$data->image5 = self::saveImage5($request);
        self::$data->save();
    }





    public static function update_software($request)
    {
        self::$data = Software::find($request->id);
        self::$data->title = $request->title??null;
        self::$data->short_title = $request->short_title??null;
        self::$data->short_des = $request->short_des??null;

        self::$data->des1 = $request->des1??null;
        self::$data->des2 = $request->des2??null;
        self::$data->des3 = $request->des3??null;
        self::$data->des4 = $request->des4??null;
        self::$data->des5 = $request->des5??null;




        if($request->file('image_main')){
            if(self::$data->image_main){
                if(file_exists(self::$data->image_main)){
                    unlink(self::$data->image_main);
                    self::$data->image_main = self::sliderImage($request);
                }
            }
            else{
                self::$data->image_main = self::sliderImage($request);
            }
        }

        if($request->file('banner_image')){
            if(self::$data->banner_image){
                if(file_exists(self::$data->banner_image)){
                    unlink(self::$data->banner_image);
                    self::$data->banner_image = self::bannerImage($request);
                }
            }
            else{
                self::$data->banner_image = self::bannerImage($request);
            }
        }


        if($request->file('image1')){
            if(self::$data->image1){
                if(file_exists(self::$data->image1)){
                    unlink(self::$data->image1);
                    self::$data->image1 = self::saveImage1($request);
                }
            }
            else{
                self::$data->image1 = self::saveImage1($request);
            }
        }



        if($request->file('image2')){
            if(self::$data->image2){
                if(file_exists(self::$data->image2)){
                    unlink(self::$data->image2);
                    self::$data->image2 = self::saveImage2($request);
                }
            }
            else{
                self::$data->image2 = self::saveImage2($request);
            }
        }


        if($request->file('image3')){
            if(self::$data->image3){
                if(file_exists(self::$data->image3)){
                    unlink(self::$data->image3);
                    self::$data->image3 = self::saveImage3($request);
                }
            }
            else{
                self::$data->image3 = self::saveImage3($request);
            }
        }


        if($request->file('image4')){
            if(self::$data->image4){
                if(file_exists(self::$data->image4)){
                    unlink(self::$data->image4);
                    self::$data->image4 = self::saveImage4($request);
                }
            }
            else{
                self::$data->image4 = self::saveImage4($request);
            }
        }

        if($request->file('image5')){
            if(self::$data->image5){
                if(file_exists(self::$data->image5)){
                    unlink(self::$data->image5);
                    self::$data->image5 = self::saveImage5($request);
                }
            }
            else{
                self::$data->image5 = self::saveImage5($request);
            }
        }



        self::$data->save();
    }



    public static function delete_software($request)
    {

        self::$data = Software::find($request->id);



        if (!self::$data) {
            throw new \Exception('Software not found.');
        }


        if (self::$data->image_main && file_exists(self::$data->image_main)) {
            unlink(self::$data->image_main);
        }

        if (self::$data->banner_image && file_exists(self::$data->banner_image)) {
            unlink(self::$data->banner_image);
        }


        $images = ['image1', 'image2', 'image3', 'image4', 'image5'];

        foreach ($images as $image) {
            if (self::$data->$image && file_exists(self::$data->$image)) {
                unlink(self::$data->$image);
            }
        }


        self::$data->delete();
    }








    private static function sliderImage($request){

        if($request->file('image_main')){
          self::$image = $request->file('image_main');
          self::$imageName = 'software_image_main-'.rand().'.'. self::$image->Extension();
          self::$directory = 'software/';
          self::$imageUrl = self::$directory.self::$imageName;
          self::$image->move(self::$directory,self::$imageName);
          return self::$imageUrl;
        }

  }



    private static function bannerImage($request){

        if($request->file('banner_image')){
          self::$image = $request->file('banner_image');
          self::$imageName = 'software_banner_image-'.rand().'.'. self::$image->Extension();
          self::$directory = 'software/';
          self::$imageUrl = self::$directory.self::$imageName;
          self::$image->move(self::$directory,self::$imageName);
          return self::$imageUrl;
        }

  }


    private static function saveImage1($request){

        if($request->file('image1')){
        self::$image = $request->file('image1');
        self::$imageName = 'software_image1-'.rand().'.'. self::$image->Extension();
        self::$directory = 'software/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
        }

    }

    private static function saveImage2($request){

        if($request->file('image2')){
        self::$image = $request->file('image2');
        self::$imageName = 'software_image2-'.rand().'.'. self::$image->Extension();
        self::$directory = 'software/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
        }

    }


    private static function saveImage3($request){

        if($request->file('image3')){
        self::$image = $request->file('image3');
        self::$imageName = 'software_image3-'.rand().'.'. self::$image->Extension();
        self::$directory = 'software/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
        }

    }


    private static function saveImage4($request){

        if($request->file('image4')){
        self::$image = $request->file('image4');
        self::$imageName = 'software_image4-'.rand().'.'. self::$image->Extension();
        self::$directory = 'software/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
        }

    }

    private static function saveImage5($request){

        if($request->file('image5')){
        self::$image = $request->file('image5');
        self::$imageName = 'software_image5-'.rand().'.'. self::$image->Extension();
        self::$directory = 'software/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
        }

    }




}
