<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Program;
use App\Models\Sponsor;
use App\Models\Project;
use App\Models\News;
use App\Models\Tag;
use App\Models\Event;
use App\Models\Moderator;
use App\Models\About;
use App\Models\Dates;
use App\Models\Tickets;
use App\Models\Subscribe;
use App\Models\Photos;
use App\Models\Videos;
use App\Models\Registration;
use App\Http\Resources\RegistrationsResource;
use App\Models\Spiker;
use App\Models\Media;

class MainController extends Controller
{
    
    public function api_index(){
        $users = Registration::orderBy('id','asc')->get();


        return response()->json([
        'User'=> RegistrationsResource::collection($users)
      
    ]);
        
        
    }
    public function index(){

    $programs = Program::where('active',1)->get();
    $sponsors = Sponsor::get();
    $projects = Project::get();
    $blogs = News::orderBy('id','asc')->take(3)->get();
    $first_date = Dates::first();
    $last_date = Dates::orderBy('id','desc')->first();
    $first_event = Event::where('date',$first_date->id)->get();
    $last_event = Event::where('date',$last_date->id)->get();
    $tickets = Tickets::get()->sortByDesc('price');

    return view('front.pages.index',compact('first_event','last_event','first_date','last_date','programs','sponsors','projects','blogs','tickets'));
    }
    
    
     public function search(Request $request)
    {
         if ($request->q === null || $request->q === "" || $request->q === " " ) {
        
         return response()->json(['error' => 'Moderator Tapilmadi']);
         }
        
        $name = 'name';
        if ($request->q) {
            $spikers = Spiker::where($name, 'LIKE', "%$request->q%")
            ->orderByDesc('id')->get();
            
         return view('front.widget.search', compact('spikers'));
              

         
        }
    }
    
    


    public function photos($year){
       $photos = Photos::where('year',$year)->first();
        return view('front.pages.photo',compact('photos'));
    }
    
    public function videos($year){
        $videos = Videos::where('year',$year)->get();
         return view('front.pages.video',compact('videos'));
     }

     

    public function destroy_session(){
        \Session::flush();
        return redirect()->back();
    }

    public function basket(){
        $carts = session()->get('cart');
        $price = 0;
          if($carts){
              
         
        foreach ($carts as $item)
        {
        $cart_price = $item['price'] * $item['quantity'];
        $price += $cart_price;
        }
    
          }
          
        return view('front.pages.basket',compact('carts','price'));
    }

    public function increase_cart($id){
    $ticket = Tickets::find($id);
 
    $cart = session()->get('cart');
   
    $quantity = ++$cart[$id]['quantity'];
    $sub_total = $quantity*$cart[$id]['price'];
    $cart[$id]['sub_total'] = $sub_total;

    $price = 0;

    foreach ($cart as $item)
    {
    $cart_price = $item['price'] * $item['quantity'];
    $price += $cart_price;
    }

        session()->put('cart', $cart);
        return response()->json(['message'=>'Say Artirildi','quantity'=>$quantity,'sub_total'=>$sub_total,'price'=>$price]);
    }

    public function descrease_cart($id){
        $ticket = Tickets::find($id);
        $cart = session()->get('cart');
       $quantity = $cart[$id]['quantity'];
       if($cart[$id]['quantity'] >= 2){
        $quantity = --$cart[$id]['quantity'];
        $sub_total = $quantity*$cart[$id]['price'];
        $cart[$id]['sub_total'] = $sub_total;
        $price = 0;

        foreach ($cart as $item)
        {
        $cart_price = $item['price'] * $item['quantity'];
        $price += $cart_price;
        }
     

        session()->put('cart', $cart);
        return response()->json(['message'=>'Say Azaldildi','quantity'=>$quantity,'sub_total'=>$sub_total,'price'=>$price]);
       }else{
       
        $cart[$id]['quantity'] = 1;
        $sub_total = $quantity*$cart[$id]['price'];
        $cart[$id][$sub_total] = $sub_total;
        $price = 0;

        foreach ($cart as $item)
        {
        $cart_price = $item['price'] * $item['quantity'];
        $price += $cart_price;
        }

        return response()->json(['message'=>'Minimum 1 eded ola biler','quantity'=>$quantity,'sub_total'=>$sub_total,'price'=>$price]);
       }
       


    }

    public function add_to_cart($id)
    {
        $ticket = Tickets::find($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $ticket->id,
                "title" => $ticket->title,
                "quantity" => 1,
                "date" => $ticket->date,
                "price" => $ticket->price,
                "time" => $ticket->time,
                "image" => $ticket->image,
                "sub_total" => $ticket->price
            ];
        }

        $price = 0;

        foreach ($cart as $item)
        {
        $cart_price = $item['price'] * $item['quantity'];
        $price += $cart_price;
        }

        session()->put('cart', $cart);
        $count = count(session()->get('cart'));

        return response()->json(['message'=>'Səbətə Əlavə olundu','count'=>$count,'price'=>$price]);

    }

    public function remove_from_cart(Request $request){
      
        $carts = session()->get('cart');
        unset($carts[$request->id]);
        \Session::put('cart', $carts);

        $price = 0;

        foreach ($carts as $item)
        {
        $cart_price = $item['price'] * $item['quantity'];
        $price += $cart_price;
        }

        $count = count(session()->get('cart'));

        $view = view('front.widget.cart2', compact('carts'));
      
        return collect([
        'html' => $view->render(),
        'count'=> $count,
        'price'=>$price

    ]);
    }

    public function news_single($slug){

    $blog = News::where('slug', 'like', '%' . $slug . '%')->with('tags')->first();
    $tags = Tag::has('blogs')->get();
    return view('front.pages.news_single',compact('blog','tags'));

    }

    public function news(){

    $blogs = News::orderBy('id','asc')->paginate(10);
    return view('front.pages.news',compact('blogs'));

    }

    public function register_form(){
       
        return view('front.pages.register_form');
    }

    public function sponsor_form(){
        $sponsors = Sponsor::get();
        return view('front.pages.sponsor_form',compact('sponsors'));
    }

    public function subscribe(Request $request){
        if($request->email === null){
            $notification = [
                'message' => 'Email Bolmesini bos buraxmayin',
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
          
        }
        $subs = new Subscribe();
        $subs->email = $request->email;
        $subs->save();

        $notification = [
            'message' => 'Abune olundu',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);

    }

    public function tags($slug){

        $tags = Tag::where('slug', 'like', '%' . $slug . '%')->with('blogs')->first();
        $blogs = News::has('tags')->get();



        return view('front.pages.tags',compact('blogs','tags'));
    }
    
    
    public function add_media(Request $request){

        $media = new Media();
        $media->name = $request->name;
        $media->surname = $request->surname;
        $media->email = $request->email;
        $media->tel = $request->tel;
        $media->media_qurum = $request->media_qurum;
        $media->qeyd = $request->qeyd;
  
        $media->save();

        $notification = [
            'message' => __('Mesaj Gonderildi'),
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }

            public function media(){
                return view('front.pages.media');

            }





}
