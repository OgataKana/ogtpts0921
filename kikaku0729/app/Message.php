<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    //多対多の定義
    //Admin_table
    public function admins(){
    return $this->belongsToMany('App\Admin');
    }
}
