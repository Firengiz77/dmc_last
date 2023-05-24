<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;


class AboutController extends Controller
{
   

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
        $abouts = About::orderBy('id','asc')->get();
        return view('admin.about.index',compact('abouts'));
    }

    public function store(Request $request)
    {
    
           $this->validate($request, [
            'video' => 'required|file|mimetypes:video/mp4',
            ]);

           $path = $request->file('video')->store('videos', ['disk' =>'my_files']);
          

         
            // $image = $request->file('image');
            // $fileNameImage = hexdec(uniqid()) . '.' . $image->extension();
            // $image->move(public_path("uploads/about"), $fileNameImage);
            // $imageURL = "uploads/about/" . $fileNameImage;

            // $icon1 = $request->file('icon1');
            // $fileNameicon1 = hexdec(uniqid()) . '.' . $icon1->extension();
            // $icon1->move(public_path("uploads/about"), $fileNameicon1);
            // $icon1url = "uploads/about/" . $fileNameicon1;

            // $icon2 = $request->file('icon2');
            // $fileNameicon2 = hexdec(uniqid()) . '.' . $icon2->extension();
            // $icon2->move(public_path("uploads/about"), $fileNameicon2);
            // $icon2url = "uploads/about/" . $fileNameicon2;



            $about = new About();
            $about->setTranslation('content_1', app()->getLocale(), $request->content_1);
            $about->setTranslation('content_2', app()->getLocale(), $request->content_2);
            $about->setTranslation('program', app()->getLocale(), $request->program);
            $about->setTranslation('sponsor', app()->getLocale(), $request->sponsor);


            $about->setTranslation('program_1', app()->getLocale(), $request->program_1);
            $about->setTranslation('sponsor_1', app()->getLocale(), $request->sponsor_1);
            $about->setTranslation('project', app()->getLocale(), $request->project);
            $about->setTranslation('news', app()->getLocale(), $request->news);

            $about->video = $path;
            $about->date = $request->date;
           
            $about->image = $this->crud->image('about',$request);
            $about->icon1 = $this->crud->icon1('about',$request);
            $about->icon2 = $this->crud->icon2('about',$request);


            // $about->image = $imageURL;
            // $about->icon1 = $icon1url;
            // $about->icon2 = $icon2url;

            $about->save();


            $notification = [
                'message' => __('about_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.about')->with($notification);
       
    }

 
    public function show()
    {
        
        return view('admin.about.add');
    }


    public function edit(Request $request)
    {
        $about = About::where('id',$request->id)->first();
        return view('admin.about.edit', compact('about'));
    }

 
    public function update(Request $request, $id)
    {
        if (About::where('id', '!=', $request->id)->doesntExist()) {
       
               
            $about = About::where('id',$request->id)->first();

            if ($request->file('video')) {
                $path = $request->file('video')->store('videos', ['disk' =>'my_files']);
                $about->video = $path;
            }

            if($request->file('pdf')){
                $pdf = $request->file('pdf');
                $fileNamepdf = hexdec(uniqid()) . '.' . $pdf->extension();
                $pdf->move(public_path("uploads/about"), $fileNamepdf);
                $pdfURL = "uploads/about/" . $fileNamepdf;
                $about->pdf = $pdfURL;
            }

    

            if ($request->file('image')) {
                File::delete($about->image);
                $about->image = $this->crud->image('about',$request);
            }

            if ($request->file('icon1')) {
                File::delete($about->icon1);
                $about->icon1 = $this->crud->icon1('about',$request);
       
            }

            if ($request->file('icon2')) {
                File::delete($about->icon2);
                $about->icon2 = $this->crud->icon2('about',$request);
            }


            $about->setTranslation('content_1', app()->getLocale(), $request->content_1);
            $about->setTranslation('content_2', app()->getLocale(), $request->content_2);
            $about->setTranslation('program', app()->getLocale(), $request->program);
            $about->setTranslation('sponsor', app()->getLocale(), $request->sponsor);
        


            $about->setTranslation('program_1', app()->getLocale(), $request->program_1);
            $about->setTranslation('sponsor_1', app()->getLocale(), $request->sponsor_1);
            $about->setTranslation('project', app()->getLocale(), $request->project);
            $about->setTranslation('news', app()->getLocale(), $request->news);


            $about->date = $request->date;

            $about->save();

     

            $notification = [
                'message' => __('about_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.about')->with($notification);
        } else {
            $notification = [
                'message' => __('exists_blog'),
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
