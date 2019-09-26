<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPost extends Model
{
    protected $fillable = [
        'text','admin_id','user_id'
    ];
}
