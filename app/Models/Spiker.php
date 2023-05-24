<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Program;


class Spiker extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name','profession','desc','company'];

    public function programs()
    {
        return $this->belongsTo(Program::class, 'programs_id' );
    }
 

}
