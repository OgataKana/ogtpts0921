<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_revue extends Model
{
    //多対多の定義
    
    //Admin_table
    public function admins(){
    return $this->belongsToMany('App\Admin');
    }
    //User_table
    public function users(){
    return $this->belongsToMany('App\User');
    }
}
