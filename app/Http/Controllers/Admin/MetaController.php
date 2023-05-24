<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreMetaRequest;
use App\Http\Requests\UpdateMetaRequest;
use App\Models\Meta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MetaController extends Controller
{
    public function index()
    {
        $meta = Meta::orderBy('id','asc')->get();
        return view('admin.meta.index',compact('meta'));
    }

    public function store(Request $request)
    {

            $meta = new Meta();
        


            $meta->setTranslation('home_title', app()->getLocale(), $request->home_title);
            $meta->setTranslation('home_desc', app()->getLocale(), $request->home_desc);
            $meta->setTranslation('home_keyw', app()->getLocale(), $request->home_keyw);
           
            $meta->setTranslation('blog_title', app()->getLocale(), $request->blog_title);
            $meta->setTranslation('blog_desc', app()->getLocale(), $request->blog_desc);
            $meta->setTranslation('blog_keyw', app()->getLocale(), $request->blog_keyw);
           
            $meta->setTranslation('register_title', app()->getLocale(), $request->register_title);
            $meta->setTranslation('register_desc', app()->getLocale(), $request->register_desc);
            $meta->setTranslation('register_keyw', app()->getLocale(), $request->register_keyw);

            $meta->setTranslation('sponsor_title', app()->getLocale(), $request->sponsor_title);
            $meta->setTranslation('sponsor_desc', app()->getLocale(), $request->sponsor_desc);
            $meta->setTranslation('sponsor_keyw', app()->getLocale(), $request->sponsor_keyw);


            $meta->save();


            $notification = [
                'message' => __('meta_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.meta')->with($notification);
       
    }

    public function show()
    {
        
        return view('admin.meta.add');
    }


    public function edit(Request $request)
    {
        $meta = Meta::where('id',$request->id)->first();
        return view('admin.meta.edit', compact('meta'));
    }

    public function update(Request $request, $id)
    {
        if (Meta::where('id', '!=', $request->id)->doesntExist()) {
       
               
            $meta = Meta::where('id',$request->id)->first();

            $meta->setTranslation('home_title', app()->getLocale(), $request->home_title);
            $meta->setTranslation('home_desc', app()->getLocale(), $request->home_desc);
            $meta->setTranslation('home_keyw', app()->getLocale(), $request->home_keyw);
           
            $meta->setTranslation('blog_title', app()->getLocale(), $request->blog_title);
            $meta->setTranslation('blog_desc', app()->getLocale(), $request->blog_desc);
            $meta->setTranslation('blog_keyw', app()->getLocale(), $request->blog_keyw);
           
            $meta->setTranslation('register_title', app()->getLocale(), $request->register_title);
            $meta->setTranslation('register_desc', app()->getLocale(), $request->register_desc);
            $meta->setTranslation('register_keyw', app()->getLocale(), $request->register_keyw);

            $meta->setTranslation('sponsor_title', app()->getLocale(), $request->sponsor_title);
            $meta->setTranslation('sponsor_desc', app()->getLocale(), $request->sponsor_desc);
            $meta->setTranslation('sponsor_keyw', app()->getLocale(), $request->sponsor_keyw);

            $meta->save();

     

            $notification = [
                'message' => __('meta_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.meta')->with($notification);
        } else {
            $notification = [
                'message' => __('exists_meta'),
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meta $meta)
    {
        //
    }
}
