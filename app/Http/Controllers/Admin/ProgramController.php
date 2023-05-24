<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Program;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $programs = Program::orderBy('id','asc')->get();
        return view('admin.programs.index',compact('programs'));
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
     * @param  \App\Http\Requests\StoreProgramRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exists_product = Program::where('title', $request->title)->doesntExist();
        if ($exists_product) {
            $program = new Program();
            $program->setTranslation('title', app()->getLocale(), $request->title);
            $program->save();

            $notification = [
                'message' => __('program_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.programs')->with($notification);
        } else {

            $notification = [
                'message' => __('program_exists'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with('error', __('exists_language'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    
    public function show(Program $program)
    {
        return view('admin.programs.add');
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::where('id',$id)->first();
        return view('admin.programs.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramRequest  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            $program = Program::find($id);
      
            $program->setTranslation('title', app()->getLocale(), $request->title);
            $program->active = $request->active;
            $program->save();

            $notification = [
                'message' => __('program_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.programs')->with($notification);
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $program = Program::find($id);
     $program->delete();

        $notification = [
            'message' => __('program_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.programs')->with($notification);
    }
}
