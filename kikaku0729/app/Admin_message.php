<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_message extends Model
{
    //多対多の定義
    //$thisこのテーブルと***テーブルと関係
    //User_table
    public function users(){
    return $this->belongsToMany('App\User');
    }
}
