<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dates;

class EventController extends Controller
{
  

    public function index($date)
    {
        $events = Event::where('date',$date)->orderBy('id','asc')->get();
        return view('admin.events.index',compact('events'));
    }

   
    public function store(Request $request)
    {
        $exists_product = Event::where('name', $request->name)->doesntExist();
        if ($exists_product) {
            $events = new Event();
            $events->setTranslation('name', app()->getLocale(), $request->name);
            $events->date = $request->date;
            $events->hour = $request->hour;
            $events->active = $request->active;
            
            $events->save();

            $notification = [
                'message' => __('event_new'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
        } else {

            $notification = [
                'message' => __('language_new'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with('error', __('exists_language'));
        }
    }

 
    public function show(Event $event)
    {
        $dates = Dates::get();
        return view('admin.events.add',compact('dates'));
    }


    public function edit($id)
    {
        $event = Event::where('id',$id)->first();
        $date = Dates::get();
        return view('admin.events.edit',compact('event','date'));
    }


    public function update(Request $request,$id)
    {
            $event = Event::find($id);
      
            $event->setTranslation('name', app()->getLocale(), $request->name);
            $event->date = $request->date;
            $event->hour = $request->hour;
            if($request->active !==  null){
                $event->active = $request->active;
            }else{
                $event->active = 0 ;
            }

            $event->save();

            $notification = [
                'message' => __('event_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
     
    }

  
    public function destroy($id)
    {
     $event = Event::find($id);
     $event->delete();

        $notification = [
            'message' => __('event_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
}
