<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
        'excerpt',
        'image_path',
        'seo_title',
        'seo_description',
        'status',
    ];
}
