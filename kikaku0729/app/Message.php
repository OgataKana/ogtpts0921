<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model

{
    protected $fillable = [
        'admin_id','user_id','admin_email','user_email','user_name','user_nickname','admin_name'
    ];



    //
    //多対多の定義
    //Admin_table
    public function admins(){
    return $this->belongsToMany('App\Admin');
    }
}
