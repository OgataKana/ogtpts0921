<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
     protected $primaryKey ='admin_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_name', 'admin_email', 'admin_password','admin_tel','admin_zipcode','admin_address','ec_url','admin_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'admin_password', 'remember_token',
    ];


    public function getAuthPassword()
    {
        //Bcryptされているフィールドの場合は、Hash::makeを使用しない
        // $hash_pass = Hash::make($this->user_password);
        $hash_pass = $this->admin_password;
        return $hash_pass;
    }

    //多対多の定義
    //$thisこのテーブルとEventテーブルと関係
    //Genre_table
    public function genres(){
    return $this->belongsToMany('App\Genre');
    }


}
