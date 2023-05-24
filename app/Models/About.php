<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [ 'content_1', 'content_2',
     'program', 'sponsor','program_1','sponsor_1',
     'project','news'
     ];

 
}
