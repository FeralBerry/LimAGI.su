<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SingleBlog extends Model
{
    protected $table = 'single_blog';
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
    ];
}
