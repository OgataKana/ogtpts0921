<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\Controller;
use App\Admin;
use App\User;
use Auth;
use App\Favorite;

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
        //  $lists = DB::table('users')->get();
	    //  $userAry = array();
		//  foreach($lists as $list){
        //     $iine_flag =Favorite::where("admin_id", Auth::id())
        //     ->where("user_id", $list->user_id)
        //      ->where("host", "admin")->get();
		//  	$data = array(
		// 		'id'=>$list->user_id,
		// 		'name'=>$list->user_name,
		// 		'genre'=>$list->user_genre,

		// 		'iine_flag'=>count($iine_flag)
		// 	);

		//  	array_push($userAry, $data);

		// }

       $users = User::all(); // ←追記
        return view('admins.home', ['users' => $users]);
        // return view('admins.home', ['lists' => $userAry]); // ←修正
        // return view("index");
    }
}
