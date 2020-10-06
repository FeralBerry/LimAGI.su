<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
    ];
}
