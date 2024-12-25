<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;

    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_company_info($request)
    {
        self::$data = new CompanyInfo();
        self::$data->detail = $request->detail??null;
        self::$data->des1 = $request->des1??null;
        self::$data->des2 = $request->des2??null;
        self::$data->des3 = $request->des3??null;
        self::$data->des4 = $request->des4??null;
        self::$data->des5 = $request->des5??null;
        self::$data->des6 = $request->des6??null;
        self::$data->des7 = $request->des7??null;
        self::$data->des8 = $request->des8??null;

        self::$data->image1 = self::saveImage1($request);
        self::$data->image2 = self::saveImage2($request);
        self::$data->image3 = self::saveImage3($request);
        self::$data->image4 = self::saveImage4($request);
        self::$data->image5 = self::saveImage5($request);
        self::$data->image6 = self::saveImage6($request);
        self::$data->image7 = self::saveImage7($request);
        self::$data->image8 = self::saveImage8($request);
        self::$data->save();
    }


    public static function update_company_info($request){

        self::$data = CompanyInfo::find($request->id);
        self::$data->detail = $request->detail??null;
        self::$data->des1 = $request->des1??null;
        self::$data->des2 = $request->des2??null;
        self::$data->des3 = $request->des3??null;
        self::$data->des4 = $request->des4??null;
        self::$data->des5 = $request->des5??null;
        self::$data->des6 = $request->des6??null;
        self::$data->des7 = $request->des7??null;
        self::$data->des8 = $request->des8??null;

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

        if($request->file('image6')){
            if(self::$data->image6){
                if(file_exists(self::$data->image6)){
                    unlink(self::$data->image6);
                    self::$data->image6 = self::saveImage6($request);
                }
            }
            else{
                self::$data->image6 = self::saveImage6($request);
            }
        }


        if($request->file('image7')){
            if(self::$data->image7){
                if(file_exists(self::$data->image7)){
                    unlink(self::$data->image7);
                    self::$data->image7 = self::saveImage7($request);
                }
            }
            else{
                self::$data->image7 = self::saveImage7($request);
            }
        }


        if($request->file('image8')){
            if(self::$data->image8){
                if(file_exists(self::$data->image8)){
                    unlink(self::$data->image8);
                    self::$data->image8 = self::saveImage8($request);
                }
            }
            else{
                self::$data->image8 = self::saveImage8($request);
            }
        }


        self::$data->save();





    }



    public static function delete_company_info(){
        
    }











    private static function saveImage1($request){

        if($request->file('image1')){
          self::$image = $request->file('image1');
          self::$imageName = 'company_main_image1-'.rand().'.'. self::$image->Extension();
          self::$directory = 'company/';
          self::$imageUrl = self::$directory.self::$imageName;
          self::$image->move(self::$directory,self::$imageName);
          return self::$imageUrl;
        }

  }




  private static function saveImage2($request){

    if($request->file('image2')){
      self::$image = $request->file('image2');
      self::$imageName = 'company_main_image2-'.rand().'.'. self::$image->Extension();
      self::$directory = 'company/';
      self::$imageUrl = self::$directory.self::$imageName;
      self::$image->move(self::$directory,self::$imageName);
      return self::$imageUrl;
    }

}

private static function saveImage3($request){

    if($request->file('image3')){
      self::$image = $request->file('image3');
      self::$imageName = 'company_main_image3-'.rand().'.'. self::$image->Extension();
      self::$directory = 'company/';
      self::$imageUrl = self::$directory.self::$imageName;
      self::$image->move(self::$directory,self::$imageName);
      return self::$imageUrl;
    }

}



private static function saveImage4($request){

    if($request->file('image4')){
      self::$image = $request->file('image4');
      self::$imageName = 'company_main_image4-'.rand().'.'. self::$image->Extension();
      self::$directory = 'company/';
      self::$imageUrl = self::$directory.self::$imageName;
      self::$image->move(self::$directory,self::$imageName);
      return self::$imageUrl;
    }

}



private static function saveImage5($request){

    if($request->file('image5')){
      self::$image = $request->file('image5');
      self::$imageName = 'company_main_image5-'.rand().'.'. self::$image->Extension();
      self::$directory = 'company/';
      self::$imageUrl = self::$directory.self::$imageName;
      self::$image->move(self::$directory,self::$imageName);
      return self::$imageUrl;
    }

}


private static function saveImage6($request){

    if($request->file('image6')){
      self::$image = $request->file('image6');
      self::$imageName = 'company_main_image6-'.rand().'.'. self::$image->Extension();
      self::$directory = 'company/';
      self::$imageUrl = self::$directory.self::$imageName;
      self::$image->move(self::$directory,self::$imageName);
      return self::$imageUrl;
    }

}


private static function saveImage7($request){

    if($request->file('image7')){
      self::$image = $request->file('image7');
      self::$imageName = 'company_main_image7-'.rand().'.'. self::$image->Extension();
      self::$directory = 'company/';
      self::$imageUrl = self::$directory.self::$imageName;
      self::$image->move(self::$directory,self::$imageName);
      return self::$imageUrl;
    }

}


private static function saveImage8($request){

    if($request->file('image8')){
      self::$image = $request->file('image8');
      self::$imageName = 'company_main_image8-'.rand().'.'. self::$image->Extension();
      self::$directory = 'company/';
      self::$imageUrl = self::$directory.self::$imageName;
      self::$image->move(self::$directory,self::$imageName);
      return self::$imageUrl;
    }

}












}
