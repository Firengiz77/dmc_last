<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;




class Supporter extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['desc','title'];

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class, 'sponsor_id' );
    }


}
