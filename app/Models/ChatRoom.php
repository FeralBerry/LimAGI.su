<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    protected $table = 'chat_room';
    protected $fillable = [
        'id',
        'title',
        'created_at',
        'updated_at',
    ];
}
