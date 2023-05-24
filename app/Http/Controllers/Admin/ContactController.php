<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;



class ContactController extends Controller
{
   
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
        $contacts = Contact::orderBy('id','asc')->get();
        return view('admin.contact.index',compact('contacts'));
    }



    public function store(Request $request)
    {

        $image = $request->file('image');
        $fileNameImage = hexdec(uniqid()) . '.' . $image->extension();
        $image->move(public_path("uploads/contact"), $fileNameImage);
        $imageURL = "uploads/contact/" . $fileNameImage;

            $contact = new Contact();
            $contact->setTranslation('title', app()->getLocale(), $request->title);
            $contact->setTranslation('address', app()->getLocale(), $request->address);
            $contact->fb = $request->fb;
            $contact->linked = $request->linked;
            $contact->instagram = $request->instagram;
            $contact->youtube = $request->youtube;
            $contact->email = $request->email;
            $contact->phone_1 = $request->phone_1;
            $contact->phone_2 = $request->phone_2;
            $contact->image = $imageURL;
            $contact->save();

            $notification = [
                'message' => __('contact_new'),
                'alert-type' => 'success'
            ];

            return redirect()->route('admin.contact')->with($notification);
       
    }

    public function show(Contact $contact)
    {
          return view('admin.contact.add');
    }

  
    public function edit($id)
    {
        $contact = Contact::where('id',$id)->first();
        return view('admin.contact.edit',compact('contact'));
    }

  
    public function update(Request $request,$id)
    {
            $contact = Contact::find($id);

            if ($request->file('image')) {
                File::delete($contact->image);
                $contact->image = $this->crud->image('contact',$request);
            }

      
            $contact->setTranslation('title', app()->getLocale(), $request->title);
            $contact->setTranslation('address', app()->getLocale(), $request->address);
            $contact->fb = $request->fb;
            $contact->linked = $request->linked;
            $contact->instagram = $request->instagram;
            $contact->youtube = $request->youtube;
            $contact->phone_1 = $request->phone_1;
            $contact->phone_2 = $request->phone_2;
            $contact->email = $request->email;

            $contact->save();

            $notification = [
                'message' => __('contact_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.contact')->with($notification);
     
    }

    public function destroy($id)
    {
     $contact = Contact::find($id);
     $contact->delete();

    $notification = [
            'message' => __('contact_destroy'),
            'alert-type' => 'success'
    ];
        return redirect()->route('admin.contact')->with($notification);
    }
}
