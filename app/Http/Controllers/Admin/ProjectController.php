<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;



class ProjectController extends Controller
{
  
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
         $projects = Project::orderBy('id','asc')->get();
         return view('admin.projects.index',compact('projects'));
    }

    public function store(Request $request)
    {
     

            $project = new Project();
            $project->setTranslation('desc', app()->getLocale(), $request->desc);
            $project->setTranslation('title', app()->getLocale(), $request->title);
            $project->link = $request->link;
            $project->fb = $request->fb;
            $project->linked = $request->linked;
            $project->instagram = $request->instagram;
            $project->twitter = $request->twitter;
             $project->image = $this->crud->image('projects',$request);
            $project->save();

            $notification = [
                'message' => __('project_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.projects')->with($notification);
    }

    public function show(Project $project)
    {
       
        return view('admin.projects.add');
    }

    public function edit($id)
    {
        $project = Project::where('id',$id)->first();
        return view('admin.projects.edit',compact('project'));
    }



    public function update(Request $request,$id)
    {
            $project = Project::find($id);

            if ($request->file('image')) {
                File::delete($project->image);
                $project->image = $this->crud->image('projects',$request);
            }

      
            $project->setTranslation('desc', app()->getLocale(), $request->desc);
            $project->setTranslation('title', app()->getLocale(), $request->title);
            $project->link = $request->link;
            $project->fb = $request->fb;
            $project->linked = $request->linked;
            $project->instagram = $request->instagram;
            $project->twitter = $request->twitter;
       


            $project->save();

            $notification = [
                'message' => __('project_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.projects')->with($notification);
     
    }

  
    public function destroy($id)
    {
     $project = Project::find($id);
     $project->delete();

        $notification = [
            'message' => __('project_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.projects')->with($notification);
    }
}
