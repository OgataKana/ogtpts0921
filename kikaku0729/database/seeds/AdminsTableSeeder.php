<?php

use Illuminate\Database\Seeder;
use App\Admin; // <-追加
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    // 以下追加
      $admins = [
        ["admin_name"=>"test1","admin_email"=>"test1@test.com","admin_genre"=>"カジュアル","admin_password"=>"(uhBnji9"],
        ["admin_name"=>"test2","admin_email"=>"test2@test.com","admin_genre"=>"フェミニン","admin_password"=>"(uhBnji9"],
        ["admin_name"=>"test3","admin_email"=>"test3@test.com","admin_genre"=>"カジュアル","admin_password"=>"(uhBnji9"],
        ["admin_name"=>"test4","admin_email"=>"test4@test.com","admin_genre"=>"スポーティ","admin_password"=>"(uhBnji9"],
        ["admin_name"=>"test5","admin_email"=>"test5@test.com","admin_genre"=>"フェミニン","admin_password"=>"(uhBnji9"],
        ["admin_name"=>"test6","admin_email"=>"test6@test.com","admin_genre"=>"カジュアル","admin_password"=>"(uhBnji9"]
      ];

      foreach($admins as $admin) {
        $a = new Admin;
        $a->admin_name = $admin["admin_name"];
        $a->admin_email = $admin["admin_email"];
        $a->admin_genre = $admin["admin_genre"];
        $a->admin_password = bcrypt($admin["admin_password"]);
        $a->save();
      }
// ここまで
    }
}
