<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreVideosRequest;
use App\Http\Requests\UpdateVideosRequest;
use App\Models\Videos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;

class VideosController extends Controller
{
      
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }
   
    // public function index()
    // {
    //     $videos = Videos::orderBy('id','asc')->get();
    //     return view('admin.videos.index',compact('videos'));
    // }

    public function store(Request $request)
    {

            $video = new Videos();
            $video->link = $request->link;
            $video->year = $request->year;
            $video->image = $this->crud->image('videos',$request);
            $video->save();

            $notification = [
                'message' => __('video_new'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
       
    }

 
    public function show_3()
    {
        return view('admin.videos.add');
    }

    public function show_2($year){
        $videos = Videos::where('year',$year)->get();
        return view('admin.videos.index',compact('videos'));

    }
  
    public function edit($id)
    {
        $video = Videos::where('id',$id)->first();
        return view('admin.videos.edit',compact('video'));
    }


    public function update(Request $request,$id)
    {
            $video = Videos::find($id);
            if ($request->file('image')) {
                File::delete($video->image);
                $video->image = $this->crud->image('videos',$request);
            }

            $video->link = $request->link;
            $video->save();

            $notification = [
                'message' => __('video_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
     
    }

  
    public function destroy($id)
    {
     $video = Videos::find($id);
     $video->delete();

        $notification = [
            'message' => __('video_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
}
