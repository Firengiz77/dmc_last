<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tickets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;

class TicketsController extends Controller
{

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $tickets = Tickets::orderBy('id','asc')->get();
        return view('admin.ticket.index',compact('tickets'));
    }

    public function show()
    {
        return view('admin.ticket.add');
    }

    public function store(Request $request)
    {
        $exists_product = Tickets::where('title', $request->title)->doesntExist();
        if ($exists_product) {
            $ticket = new Tickets();
            $ticket->setTranslation('title', app()->getLocale(), $request->title);
            $ticket->setTranslation('inform', app()->getLocale(), $request->inform);
            $ticket->date = $request->date;
            $ticket->price = $request->price;
            $ticket->time = $request->time;
            $ticket->url = $request->url;
            $ticket->image = $this->crud->image('tickets',$request);
            
            $ticket->save();

            $notification = [
                'message' => __('ticket_new'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
        } else {

            $notification = [
                'message' => __('ticket_new'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with('error', __('exists_ticket'));
        }
    }


     
    public function edit( $id)
    {
    
        $ticket = Tickets::findOrFail($id);
        return view('admin.ticket.edit', compact('ticket'));
    }

  
    public function update(Request $request, $id)
    {
   
        

             $ticket = Tickets::findOrFail($id);
             
            if ($request->file('image')) {
                File::delete($ticket->image);
                $ticket->image = $this->crud->image('tickets',$request);
            }

            $ticket->setTranslation('title', app()->getLocale(), $request->title);
            $ticket->setTranslation('inform', app()->getLocale(), $request->inform);
            $ticket->date = $request->date;
            $ticket->price = $request->price;
            $ticket->time = $request->time;
            $ticket->url = $request->url;
            
            $ticket->save();

            $notification = [
                'message' => __('ticket_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.ticket')->with($notification);
     
    }

    public function destroy($id)
    {
        $news = Tickets::find($id)->delete();

        $notification = array(
            'message' => __('ticket_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.ticket')->with($notification);
    }
}
