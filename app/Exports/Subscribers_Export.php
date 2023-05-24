<?php

namespace App\Exports;

use App\Models\Subscribe;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Subscribers_Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $subscribes = Subscribe::orderBy('created_at','desc')->get();
        return view('exports.subscribe',[
            'subscribes'=> $subscribes
        ]);  
    }
}