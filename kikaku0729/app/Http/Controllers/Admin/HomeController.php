<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\User;
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
         $users = User::all(); // ←追記
        return view('admins.home', ['users' => $users]); // ←修正
        return view("index");
    }
}
