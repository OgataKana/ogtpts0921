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
        ["user_name"=>"test3","user_email"=>"test3@test.com","user_password"=>"(uhBnji9"]
      ];

      foreach($users as $user) {
        $u = new User;
        $u->user_name = $user["user_name"];
        $u->user_email = $user["user_email"];
        $u->user_password = bcrypt($user["user_password"]);
        $u->save();
      }
    // ここまで
   
    // // 以下追加
    //   $admins = [
    //     ["admin_name"=>"test1","admin_email"=>"test1@test.com","admin_password"=>"(uhBnji9"],
    //     ["admin_name"=>"test2","admin_email"=>"test2@test.com","admin_password"=>"(uhBnji9"],
    //     ["admin_name"=>"test3","admin_email"=>"test3@test.com","admin_password"=>"(uhBnji9"]
    //   ];

    //   foreach($admins as $admin) {
    //     $a = new User;
    //     $a->admin_name = $admin["admin_name"];
    //     $a->admin_email = $admin["admin_email"];
    //     $a->admin_password = bcrypt($admin["admin_password"]);
    //     $a->save();
    //   }
// ここまで
    }
}
