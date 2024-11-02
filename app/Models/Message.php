<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    const IS_VIEW_VIEWED = 1;

    const IS_VIEW_UNVIEW = 2;
    
    use HasFactory;

    protected $table = "messages";

    protected $filltable = [
        'user_id', 'friend_id', 'message', 'is_view'
    ];
}

