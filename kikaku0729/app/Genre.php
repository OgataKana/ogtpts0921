<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
     //多対多の定義
    //$thisこのテーブルとUserテーブルと関係
    public function users(){
    return $this->belongsToMany('App\User');
    }
}
