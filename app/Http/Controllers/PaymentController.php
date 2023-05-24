<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Registration;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;



class PaymentController extends Controller
{
    public function paymentApproved(Request $request){
        
     \Session::flush();
  
    return redirect()->route('index')->with('success',__('Əməliyyat uğurla tamamlandı. Elektron dəvətnamənizi mail hesabınızdan əldə edə bilərsiniz!'));
      
        
    }
    
    
    
    public function paymentCanceled(Request $request ){
        
           $notification = [
            'message' => __('Odenis_Heyata_kecirilmedi'),
            'alert-type' => 'success'
        ];
        return redirect()->route('index')->with('info',__('Odenis_Heyata_kecirilmedi'));

        
         
        // return redirect()->to('/');
        // return redirect()->route('index');
        
        
        
    }
    public function paymentDeclined(Request $request ){
        
           $notification = [
            'message' => __('Odenis_Heyata_kecirilmedi'),
            'alert-type' => 'success'
        ];
        return redirect()->route('index')->with('error', __('Odenis_Heyata_kecirilmedi') );

        
    }
   
}
