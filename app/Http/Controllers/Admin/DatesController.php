<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreDatesRequest;
use App\Http\Requests\UpdateDatesRequest;
use App\Models\Dates;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatesController extends Controller
{
    
    public function index()
    {
      $dates = Dates::get();
      return view('admin.dates.index',compact('dates'));
    }


 
    public function edit($id)
    {
        $date = Dates::where('id',$id)->first();
        return view('admin.dates.edit',compact('date'));
    }

 
    public function update(Request $request,$id)
    {
        $date = Dates::find($id);
      
        $date->date = $request->date;
        $date->save();

        $notification = [
            'message' => __('date_edit'),
            'alert-type' => 'success'
        ];

    return redirect()->route('admin.dates')->with($notification);
        
    }

  
   
}
