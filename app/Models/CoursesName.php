<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesName extends Model
{
    protected $table = 'courses_name';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];
}
