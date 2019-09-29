<?php

use Illuminate\Database\Seeder;
use App\User; // <-追加
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 以下追加
      $users = [
        ["user_name"=>"test1","user_email"=>"test1@test.com","user_password"=>"(uhBnji9"],
        ["user_name"=>"test2","user_email"=>"test2@test.com","user_password"=>"(uhBnji9"],
        ["user_name"=>"test3","user_email"=>"test3@test.com","user_password"=>"(uhBnji9"],
        ["user_name"=>"test4","user_email"=>"test4@test.com","user_password"=>"(uhBnji9"],
        ["user_name"=>"test5","user_email"=>"test5@test.com","user_password"=>"(uhBnji9"],
        ["user_name"=>"test6","user_email"=>"test6@test.com","user_password"=>"(uhBnji9"]
      ];

      foreach($users as $user) {
        $u = new User;
        $u->user_name = $user["user_name"];
        $u->user_email = $user["user_email"];
        $u->user_password = bcrypt($user["user_password"]);
        $u->save();
      }
    // ここまで


    }
}
