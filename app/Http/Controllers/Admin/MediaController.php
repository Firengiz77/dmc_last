<?php

namespace App\Http\Controllers\Admin;


use App\Models\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    
  public function index()
    {
      $media = Media::orderBy('id','asc')->get();
      return view('admin.media.index',compact('media'));
    }

    public function show($id)
    {
        $media = Media::where('id',$id)->first();
        return view('admin.media.show',compact('media'));
    }

}
