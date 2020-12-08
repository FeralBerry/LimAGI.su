<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'id',
        'title',
        'brief',
        'desc',
        'tags',
        'tag_page',
        'blog_cat_id',
        'author',
        'img',
        'title_img',
        'video',
        'video_img',
        'likes',
        'created_at',
        'updated_at',
    ];
}
