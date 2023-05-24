<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;


class NewsController extends Controller
{

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

 
    public function index()
    {
        $all_news = News::orderBy('id','asc')->get();
        return view('admin.news.index',compact('all_news'));
    }

 
    public function show()
    {
        $tags = Tag::orderBy('title')->get();
        return view('admin.news.add',compact('tags'));
    }

  
    public function store(Request $request)
    {
    
            $tags = Tag::findOrFail($request->tags);

            $blog = new News();
            $blog->setTranslation('title', app()->getLocale(), $request->title);
            $blog->setTranslation('desc', app()->getLocale(), $request->desc);
            $blog->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
            $blog->setTranslation('meta_keyword', app()->getLocale(), $request->meta_keyword);
            $blog->setTranslation('meta_desc', app()->getLocale(), $request->meta_desc);
       
            $blog->image = $this->crud->image('news',$request);
            $blog->save();

            $blog->tags()->attach($tags);

            $notification = [
                'message' => __('blog_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.news')->with($notification);
       
    }

  
    public function edit(Request $request)
    {
        $tags = Tag::orderBy('title')->get();
        $news = News::where('id',$request->id)->first();
        return view('admin.news.edit', compact('tags', 'news'));
    }

    public function update(Request $request, $id)
    {
   
            $tags = Tag::findOrFail($request->tags);

             $blog = News::where('id',$id)->first();
             
            if ($request->file('image')) {
                File::delete($blog->image);
                $blog->image = $this->crud->image('news',$request);
            }


            $blog->setTranslation('title', app()->getLocale(), $request->title);
            $blog->setTranslation('desc', app()->getLocale(), $request->desc);
            $blog->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
            $blog->setTranslation('meta_keyword', app()->getLocale(), $request->meta_keyword);
            $blog->setTranslation('meta_desc', app()->getLocale(), $request->meta_desc);
            $blog->save();

            $blog->tags()->sync($tags);

            $notification = [
                'message' => __('blog_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.news')->with($notification);
     
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->tags()->detach();
        $news->delete();

        $notification = array(
            'message' => __('blog_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.news')->with($notification);
    }
}
