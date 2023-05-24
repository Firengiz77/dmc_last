<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Event extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];
    

    public function dates2(){
        return $this->belongsTo('App\Models\Dates','date');
    }




}
