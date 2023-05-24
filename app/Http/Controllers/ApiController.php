<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Registration;
use Illuminate\Support\Facades\Http;
use App\Models\About;
use App\Http\Resources\AboutResource;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use App\Http\Resources\SpikerResource;
use App\Models\Spiker;
use App\Models\Supporter;
use App\Http\Resources\SupportResource;
use App\Models\Program;
use App\Http\Resources\ProgramResource;


class ApiController extends Controller
{
 
 
 
 public function all(){
        $about = About::orderBy('id','asc')->get();
        $contact = Contact::orderBy('id','asc')->get();
        $spikers = Spiker::orderBy('id','desc')->get();
        $supports = Supporter::orderBy('id','desc')->get();
        $programs = Spiker::orderBy('id','desc')->get();
        
         return response()->json([
             'about' => AboutResource::collection($about),
             'contact' => ContactResource::collection($contact),
             'spikers' => SpikerResource::collection($spikers),
             'supporter' => SupportResource::collection($supports),
             'programs' => ProgramResource::collection($programs)
             
             ]);
         
         
 }
 
 public function about()
    {
        $about = About::orderBy('id','asc')->get();
        return response()->json(AboutResource::collection($about));
    }
 
 
 public function contact(){
     $contact = Contact::orderBy('id','asc')->get();
     return response()->json(ContactResource::collection($contact));
 }
 
 
 
 public function spikers(){
     $spikers = Spiker::orderBy('id','desc')->get();
     return response()->json(SpikerResource::collection($spikers));
 }
 
 public function supporter(){
     $supports = Supporter::orderBy('id','desc')->get();
     return response()->json(SupportResource::collection($supports));
 }
 
 public function program(){
     $programs = Spiker::orderBy('id','desc')->get();
     return response()->json(ProgramResource::collection($programs));
     
 }
 

 
 
 
 
}
