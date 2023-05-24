<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Moderator extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];

    public function events2(){
        return $this->belongsTo('App\Models\Event','events_id');
    }
}
