<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\Register_Export;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\PayriffService;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{

    public function excel()
    {
        $response =  Excel::download(new Register_Export, 'qeydiyyatdan_kecenler.xlsx');
         ob_end_clean();
           return $response;
    }


 
    public function index()
    {
        $registrations = Registration::orderBy('id','desc')->paginate(10);
        return view('admin.registration.index',compact('registrations'));
    }
    
    public function qeydiyyatdan_kecenler($status){
        
        $registrations = Registration::orderBy('id','desc')->where('status',$status)->paginate(10);
        return view('admin.registration.qeydiyyatdan_kecenler',compact('registrations'));
    }

    public function show($id)
    {
        $registration = Registration::where('id',$id)->first();
        return view('admin.registration.show',compact('registration'));
    }

    public function create(Request $request)
    {

        $carts = session()->get('cart');
        $price = 0;
        $order = new Order();
        $order->save();

        if($carts){
                
        foreach ($carts as $item)
        {
            $cart_price = $item['price'] * $item['quantity'];
            $price += $cart_price;
     

        if($item['quantity'] > 1){
            $quantity = 0;
            $cart_quantity = $item['quantity'];
            $quantity += $cart_quantity;
            $count = 0;
            // buralari gucle isletmisem mence deymeyek bura yoo baxiram sadece tamam

            for ($quantity2 = 1; $quantity2 <= $quantity; $quantity2++) {
                $reg = new Registration(); 
                $reg->order_id =$order->id;
                $reg->name = request('name')[$count][$item['id']];
                $reg->surname = request('surname')[$count][$item['id']];
                $reg->email = request('email')[$count][$item['id']];
                $reg->profession = request('profession')[$count][$item['id']];
                $reg->work = request('work')[$count][$item['id']];
                $reg->phone = request('phone')[$count][$item['id']];
                $reg->date = request('date')[$count][$item['id']];
                $reg->price = request('price')[$count][$item['id']];
                $reg->title = request('title')[$count][$item['id']];
                // $reg->ticket = json_encode(request('ticket')[$quantity2]);
                $count = $count + 1;
                $reg->save();
            }
        }
            else{
                $count = 1;
                    $reg = new Registration();             
                    $reg->order_id =$order->id;
                    $reg->name = request('name')[$count][$item['id']];
                    $reg->surname = request('surname')[$count][$item['id']];
                    $reg->email = request('email')[$count][$item['id']];
                    $reg->profession = request('profession')[$count][$item['id']];
                    $reg->work = request('work')[$count][$item['id']];
                    $reg->phone = request('phone')[$count][$item['id']];
                    $reg->date = request('date')[$count][$item['id']];
                    $reg->price = request('price')[$count][$item['id']];
                    $reg->title = request('title')[$count][$item['id']];
                    // $reg->ticket = json_encode(request('ticket')[$quantity2]);
                    $reg->save();
              
        }
        }
        }

  
        \Session::flush();
         
         
          $notification = [
            'message' => __('Odenis_Heyata_kecirildi'),
            'alert-type' => 'success'
        ];
        
            return redirect()->route('index')->with('success',__('Əməliyyat uğurla tamamlandı. Elektron dəvətnamənizi mail hesabınızdan əldə edə bilərsiniz!'));

        
        
 

    }


  
   
}
