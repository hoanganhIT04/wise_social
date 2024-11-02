<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserView extends Model
{
    use HasFactory;

    protected $table = "user_views";

    protected $filltable = [
        'message_id', 'view_id'
    ];
}
