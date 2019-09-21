<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
     protected $primaryKey ='user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'user_email', 'user_password','user_nickname','user_tel','zipcode','user_address',
        'user_gender','user_height','image','user_camera_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'remember_token',
    ];
    //多対多の定義
    //$thisこのテーブルと***テーブルと関係

    //パスワードの取得部分
    public function getAuthPassword()
    {
        //Bcryptされているフィールドの場合は、Hash::makeを使用しない
        // $hash_pass = Hash::make($this->user_password);
        $hash_pass = $this->user_password;

        return $hash_pass;
    }

    //Genre_table
    public function genres(){
    return $this->belongsToMany('App\Genre');
    }
    //User_prphots_table
    public function user_prphots(){
    return $this->belongsToMany('App\User_prphot');
    }
    //User_revue_table
    public function user_revues(){
    return $this->belongsToMany('App\User_revue');
    }
    //Favorite_table
    public function favorites(){
    return $this->belongsToMany('App\User_favorite');
    }
    
    
}
