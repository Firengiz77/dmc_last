<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSpikerRequest;
use App\Http\Requests\UpdateSpikerRequest;
use App\Models\Spiker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;

class SpikerController extends Controller
{
    
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $spikers = Spiker::orderBy('id','asc')->get();
        return view('admin.spikers.index',compact('spikers'));
    }

  
    public function store(Request $request)
    {

            $spiker = new Spiker();
            $spiker->setTranslation('name', app()->getLocale(), $request->name);
            $spiker->setTranslation('profession', app()->getLocale(), $request->profession);
            $spiker->setTranslation('desc', app()->getLocale(), $request->desc);
            $spiker->setTranslation('company', app()->getLocale(), $request->company);
            $spiker->fb = $request->fb;
            $spiker->linked = $request->linked;
            $spiker->instagram = $request->instagram;
            $spiker->twitter = $request->twitter;
            $spiker->programs_id = $request->programs_id;
             $spiker->image = $this->crud->image('spikers',$request);
      
            $spiker->save();

            $notification = [
                'message' => __('spiker_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.spikers')->with($notification);
       
    }

  
    public function show(Spiker $spiker)
    {
        $programs= Program::orderBy('id','asc')->get();
        return view('admin.spikers.add',compact('programs'));
    }

    
    public function edit($id)
    {
        $spiker = Spiker::where('id',$id)->first();
        $programs= Program::orderBy('id','asc')->get();
        return view('admin.spikers.edit',compact('spiker','programs'));
    }

    public function update(Request $request,$id)
    {
            $spiker = Spiker::find($id);

            if ($request->file('image')) {
                File::delete($spiker->image);
                $spiker->image = $this->crud->image('spikers',$request);
            }

      
            $spiker->setTranslation('name', app()->getLocale(), $request->name);
            $spiker->setTranslation('profession', app()->getLocale(), $request->profession);
            $spiker->setTranslation('desc', app()->getLocale(), $request->desc);
            $spiker->setTranslation('company', app()->getLocale(), $request->company);
            $spiker->fb = $request->fb;
            $spiker->linked = $request->linked;
            $spiker->instagram = $request->instagram;
            $spiker->twitter = $request->twitter;
            $spiker->programs_id = $request->programs_id;

            $spiker->save();

            $notification = [
                'message' => __('spiker_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.spikers')->with($notification);
     
    }

 
    public function destroy($id)
    {
     $spiker = Spiker::find($id);
     $spiker->delete();

        $notification = [
            'message' => __('spiker_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.spikers')->with($notification);
    }
}
