<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSponsorFormRequest;
use App\Http\Requests\UpdateSponsorFormRequest;
use App\Models\SponsorForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\Sponsor_Export;
use Maatwebsite\Excel\Facades\Excel;

class SponsorFormController extends Controller
{
  
    public function excel()
    {
        return Excel::download(new Sponsor_Export, 'sponsor.xlsx');
    }

    public function index()
    {
      $sponsor_forms = SponsorForm::orderBy('id','asc')->get();
      return view('admin.sponsor_form.index',compact('sponsor_forms'));
    }

    public function show($id)
    {
        $sponsor_form = SponsorForm::where('id',$id)->first();
        return view('admin.sponsor_form.show',compact('sponsor_form'));
    }

    public function create(Request $request)
    {
            $sponsor_form = new SponsorForm();
            $sponsor_form->name = $request->name;
            $sponsor_form->surname = $request->surname;
            $sponsor_form->email = $request->email;
            $sponsor_form->phone = $request->phone;
            $sponsor_form->work = $request->work;
            $sponsor_form->experience = $request->experience;
            $sponsor_form->profession = $request->profession;
            $sponsor_form->save();

            $notification = [
                'message' => __('admin_register'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
    }






  
}
