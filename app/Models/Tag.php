<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\News;

class Tag extends Model
{
    use HasFactory, Sluggable, HasTranslations;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public $translatable = ['title', 'slug'];

    public function blogs()
    {
        return $this->belongsToMany(News::class, 'blog_tags', 'tag_id', 'blog_id');
    }
}
