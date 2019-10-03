<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User; // ←追記
use App\Favorite; // ←追記
use App\Admin;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


      public function index()
    {
        $lists = DB::table('admins')->get();
	    $adminAry = array();
		foreach($lists as $list){
            $iine_flag = Favorite::where("user_id", Auth::id())
            ->where("admin_id", $list->admin_id)
            ->where("host", "user")->get();
			$data = array(
				'id'=>$list->admin_id,
				'name'=>$list->admin_name,
				'genre'=>$list->admin_genre,

				'iine_flag'=>count($iine_flag)
			);

			array_push($adminAry, $data);

		}



         //$admins = Admin::all(); // ←追記

         //var_dump($adminAry);

        return view('home', ['lists' => $adminAry]); // ←修正
        // return view("index");
     }
}
