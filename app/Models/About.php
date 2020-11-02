<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = [
        'id',
        'title',
        'desc',
        'link',
        'img',
        'updated_at',
        'created_at',
    ];
}
