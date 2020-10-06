<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    protected $table = 'blog_category';
    protected $fillable = [
        'id',
        'cat_name',
        'created_at',
        'updated_at',
    ];
}
