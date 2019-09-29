<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $fillable = ['user_id','admin_id','host'];
    //多対多の定義
    //$thisこのテーブルと***テーブルと関係
    //User_table
    public function users(){
    return $this->belongsToMany('App\User');
    }
    //Admin_table
    public function admins(){
    return $this->belongsToMany('App\Admin');
    }
}
