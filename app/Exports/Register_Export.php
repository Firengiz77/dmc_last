<?php

namespace App\Exports;

use App\Models\Registration;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Register_Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $registers = Registration::get();
        return view('exports.register',[
            'registers'=> $registers
        ]);  
    }
}