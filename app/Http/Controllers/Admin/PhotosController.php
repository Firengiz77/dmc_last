<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePhotosRequest;
use App\Http\Requests\UpdatePhotosRequest;
use App\Models\Photos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\FileManager;





class PhotosController extends Controller
{
    
    public function index()
    {
        $photos = Photos::orderBy('id','asc')->first();
        return view('admin.photos.index',compact('photos'));
    }

    
 
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = [];
            foreach ($request->file('image') as $key => $file) {
                $data['image'][$key] = FileManager::fileUpload($file, 'photos');
            }
        }
        Photos::create([
            'image' => $data['image'],
            'year' => $data['year']
        ]);
        return redirect()->back();
    }

    public function show_2(){

        return view('admin.photos.add');

    }
    

   
    public function show($year){

        $photos = Photos::where('year',$year)->first();
        return view('admin.photos.index',compact('photos'));

    }

   
    public function update($id, Request $request)
    {
        $photos = Photos::all()->find($id);
        $data = $request->all();
        $data['image'] = $photos->image ?? [];
        if ($request->hasFile('image')) {
            if($request->has('image')){
                foreach ($request->file('image') as $key => $file) {
                    array_push($data['image'], FileManager::fileUpload($file, 'photos'));
                }
            }
        }

        $photos->update([
            'image' => $data['image'],
      
        ]);
 

        return redirect()->back();
    }



   
    public function delete_images_photos($id, Request $request){
        $key = $request->key;
        $data = $request->all();
        
        $fullImgPath = storage_path("uploads/photos/$key.jpg");
        $photos = Photos::find($id);
        $images = $photos->image;
        unset($images[$key]);
        $photos->update([
            'image'=>$images,
        ]);
        //  foreach ($photos->image as $img) {
        //     FileManager::fileDelete('photos', $img);
        //  }
    return response()->json(['success'=>true,'image'=>$photos->image]);
    }
}
