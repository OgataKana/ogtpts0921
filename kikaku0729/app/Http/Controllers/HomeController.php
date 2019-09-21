<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // ←追記
use App\Admin;
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
         $admins = Admin::all(); // ←追記
        return view('home', ['admins' => $admins]); // ←修正
        return view("index");
}
    }


    
    
