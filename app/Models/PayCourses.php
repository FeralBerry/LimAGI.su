<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayCourses extends Model
{
    protected $table = 'pay_courses';
    protected $fillable = [
        'id',
        'title',
        'description',
        'category',
        'link_courses',
        'link_materials',
        'access_id',
        'created_at',
        'updated_at',
    ];
}
