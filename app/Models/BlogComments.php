<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    protected $table = 'blog_comments';
    protected $fillable = [
        'id',
        'email',
        'name',
        'comments',
        'blog_post_id',
        'created_at',
        'updated_at',
    ];
}
