<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayCoursesName extends Model
{
    protected $table = 'pay_courses_name';
    protected $fillable = [
        'id',
        'name',
        'pay_link_name',
        'created_at',
        'updated_at',
    ];
}
