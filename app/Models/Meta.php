<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Meta extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [ 
    'home_title','home_desc','home_keyw',
    'blog_title','blog_desc','blog_keyw',
    'register_title','register_desc','register_keyw',
    'sponsor_title','sponsor_desc','sponsor_keyw'
    ];




}
