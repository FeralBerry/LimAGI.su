<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreeCoursesComment extends Model
{
    protected $table = 'free_courses_comments';
    protected $fillable = [
        'id',
        'user_id',
        'free_courses_id',
        'comment',
        'created_at',
        'updated_at',
    ];
}
