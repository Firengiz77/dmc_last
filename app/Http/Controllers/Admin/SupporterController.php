<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSupporterRequest;
use App\Http\Requests\UpdateSupporterRequest;
use App\Models\Supporter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;


class SupporterController extends Controller
{
   
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
        $supports = Supporter::orderBy('id','asc')->get();
        return view('admin.support.index',compact('supports'));
    }

   

    public function store(Request $request)
    {

            $support = new Supporter();
            $support->setTranslation('desc', app()->getLocale(), $request->desc);
            $support->link = $request->link;
            $support->title = $request->title;
            $support->sponsor_id = $request->sponsor_id;
           $support->image = $this->crud->image('support',$request);
            $support->save();

            $notification = [
                'message' => __('support_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.support')->with($notification);
       
    }

   
    public function show(Supporter $support)
    {
        $sponsors= Sponsor::orderBy('id','asc')->get();
        return view('admin.support.add',compact('sponsors'));
    }

  
    public function edit($id)
    {
        $support = Supporter::where('id',$id)->first();
        $sponsors= Sponsor::orderBy('id','asc')->get();
        return view('admin.support.edit',compact('support','sponsors'));
    }



    public function update(Request $request,$id)
    {
            $support = Supporter::find($id);

            if ($request->file('image')) {
                File::delete($support->image);
                $support->image = $this->crud->image('support',$request);
            }

      
            $support->setTranslation('desc', app()->getLocale(), $request->desc);
            $support->link = $request->link;
            $support->title = $request->title;
            $support->sponsor_id = $request->sponsor_id;


            $support->save();

            $notification = [
                'message' => __('support_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.support')->with($notification);
     
    }

  
    public function destroy($id)
    {
     $support = Supporter::find($id);
     $support->delete();

        $notification = [
            'message' => __('support_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.support')->with($notification);
    }
}
