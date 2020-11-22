<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreeCoursesName extends Model
{
    protected $table = 'free_courses_name';
    protected $fillable = [
        'id',
        'name',
        'free_link_name',
        'created_at',
        'updated_at',
    ];
}
