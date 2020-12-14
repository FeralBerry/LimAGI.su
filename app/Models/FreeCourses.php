<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreeCourses extends Model
{
    protected $table = 'free_courses';
    protected $fillable = [
        'id',
        'title',
        'description',
        'category',
        'link_courses',
        'link_materials',
        'author',
        'created_at',
        'updated_at',
    ];
}
