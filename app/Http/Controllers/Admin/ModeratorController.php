<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreModeratorRequest;
use App\Http\Requests\UpdateModeratorRequest;
use App\Models\Moderator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;

class ModeratorController extends Controller
{

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


  
    public function index($id)
    {
        $event = Event::where('date',$id)->first();
        $moderators = Moderator::get();
        
        return view('admin.moderators.index',compact('moderators','event'));
    }

   
    public function store(Request $request)
    {

            $moderators = new Moderator();
            $moderators->setTranslation('name', app()->getLocale(), $request->name);
            $moderators->hour = $request->hour;
            $moderators->events_id = $request->events_id;

            if($request->file('image')) {
            $moderators->image = $this->crud->image('moderators',$request);
            }

            $moderators->save();

            $notification = [
                'message' => __('moderator_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.moderators',1)->with($notification);
       
    }

    public function show(Moderator $moderator)
    {
        $events= Event::orderBy('id','asc')->get();
        return view('admin.moderators.add',compact('events'));
    }


    public function edit($id)
    {
        $moderator = Moderator::where('id',$id)->first();
        $events= Event::orderBy('id','asc')->get();
        return view('admin.moderators.edit',compact('moderator','events'));
    }


    public function update(Request $request,$id)
    {
            $moderator = Moderator::find($id);

            if ($request->file('image')) {
                File::delete($moderator->image);
                $moderator->image = $this->crud->image('moderators',$request);
            }

            $moderator->setTranslation('name', app()->getLocale(), $request->name);
            $moderator->hour = $request->hour;
            $moderator->events_id = $request->events_id;
            $moderator->save();

            $notification = [
                'message' => __('moderator_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.moderators',1)->with($notification);
     
    }

 
    public function destroy($id)
    {
     $moderator = Moderator::find($id);
     $moderator->delete();

        $notification = [
            'message' => __('moderator_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.moderators',1)->with($notification);
    }
}
