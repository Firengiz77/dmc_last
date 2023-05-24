<?php

namespace App\Exports;

use App\Models\SponsorForm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Sponsor_Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $sponsors = SponsorForm::orderBy('created_at','desc')->get();
        return view('exports.sponsor',[
            'sponsors'=> $sponsors
        ]);  
    }
}