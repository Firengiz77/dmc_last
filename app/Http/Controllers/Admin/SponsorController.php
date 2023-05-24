<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSponsorRequest;
use App\Http\Requests\UpdateSponsorRequest;
use App\Models\Sponsor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class SponsorController extends Controller
{
    
    

    public function index()
    {
        $sponsors = Sponsor::orderBy('id','asc')->get();
        return view('admin.sponsor.index',compact('sponsors'));
    }

 
    public function store(Request $request)
    {
        $exists_product = Sponsor::where('title', $request->title)->doesntExist();
        if ($exists_product) {
            $sponsor = new Sponsor();
            $sponsor->setTranslation('title', app()->getLocale(), $request->title);
            $sponsor->save();

            $notification = [
                'message' => __('sponsor_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.sponsors')->with($notification);
        } else {

            $notification = [
                'message' => __('sponsor_exists'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with('error', __('exists_language'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        return view('admin.sponsor.add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $sponsor = Sponsor::where('id',$id)->first();
        return view('admin.sponsor.edit',compact('sponsor'));
    }  

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSponsorRequest  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {
            $sponsor = Sponsor::find($id);
      
            $sponsor->setTranslation('title', app()->getLocale(), $request->title);
            $sponsor->save();

            $notification = [
                'message' => __('sponsor_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.sponsors')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $sponsor = Sponsor::find($id);
     $sponsor->delete();

        $notification = [
            'message' => __('sponsor_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.sponsors')->with($notification);
    }
}
