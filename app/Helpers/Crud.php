<?php

namespace App\Helpers;

use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Crud 
{

    public function create($table_name,$request){
        if($table_name === 'App\Models\Slider'){
           if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('/upload/slider_images/') . $request->image);
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/upload/slider_images'), $filename);
            $request['image'] = $filename;
        }
    }
    if($table_name === 'App\Models\Product'){
        if ($request->file('thumbnail')) {
         $file = $request->file('thumbnail');
         @unlink(public_path('/upload/product_images/') . $request->thumbnail);
         $filename = date('YmdHi') . $file->getClientOriginalName();
         $file->move(public_path('/upload/product_images'), $filename);
         $request['thumbnail'] = $filename;
     }
 }
 if($table_name === 'App\Models\Pages'){
    if(isset($request->on_off)){
        $request->on_off = 1;
    }

 }



    if($table_name === 'App\Models\Blog'){
        if ($request->file('image')) {
         $file = $request->file('image');
         @unlink(public_path('/upload/blog_images/') . $request->image);
         $filename = date('YmdHi') . $file->getClientOriginalName();
         $file->move(public_path('/upload/blog_images'), $filename);
         $request['image'] = $filename;
     }
 }

        return $table_name::create($request->post());
    }

    public function delete($table_name,$id){
       $deleted_post = $table_name::find($id);
       return  $deleted_post->delete();
    }  
      
     public function edit($table_name,$id){
        return $table_name::where('id',$id)->first();
     }


     public function image($table_name,$request){
        $image = $request->file('image');
        $fileNameImage = hexdec(uniqid()) . '.' . $image->extension();
        $image->move(public_path("uploads/".$table_name ."/"), $fileNameImage);
       return $imageURL = "uploads/".$table_name . "/" . $fileNameImage;
     }

      
   
     public function  icon1($table_name,$request){
        $icon1 = $request->file('icon1');
        $fileNameicon1 = hexdec(uniqid()) . '.' . $icon1->extension();
        $icon1->move(public_path("uploads/".$table_name ."/"), $fileNameicon1);
       return  $imageURL1 = "uploads/".$table_name ."/" . $fileNameicon1;
     }     
     
     public function  icon2($table_name,$request){
        $icon2 = $request->file('icon2');
        $fileNameicon2 = hexdec(uniqid()) . '.' . $icon2->extension();
        $icon2->move(public_path("uploads/".$table_name ."/"), $fileNameicon2);
       return  $imageURL2 = "uploads/".$table_name ."/" . $fileNameicon2;
     }  




}
