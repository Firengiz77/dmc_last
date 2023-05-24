<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::orderBy('id','desc')->get();
        return view('admin.language.index',compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exists_product = Language::where('code', $request->code)->doesntExist();
        if ($exists_product) {
            $language = new Language();
            $language->name = $request->name;
            $language->code = $request->code;
            $language->save();

            $notification = [
                'message' => __('language_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.language')->with($notification);
        } else {

            $notification = [
                'message' => __('language_new'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with('error', __('exists_language'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.language.add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $language = Language::where('id',$request->id)->first();
        return view('admin.language.edit', compact('language'));
    }

    public function update(Request $request,$id)
    {
            $language = Language::find($id);
      
            $language->name = $request->name;
            $language->code = $request->code;
            $language->save();

            $notification = [
                'message' => __('language_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.language')->with($notification);
     
    }

    public function destroy($id)
    {
        $language = Language::find($id);
        $language->delete();

        $notification = [
            'message' => __('language_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.language')->with($notification);
    }
}
