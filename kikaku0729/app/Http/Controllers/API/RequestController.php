<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Request_admin;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //誰が、なにに対して良いね！したかを受け取る
        $admin_id = intval($request->admin_id);
        $user_id = intval($request->user_id);
        $host = $request->host;


        //上記の-table 検索して、該当データを調べる。良いね！をしているか探す。

        $flag = Favorite::where('admin_id',$admin_id)->where('user_id',$user_id)->where('host','admin')->get();

        //ある場合は消す
        if(count($flag) > 0){

           Favorite::where('admin_id',$admin_id)->where('user_id',$user_id)->delete();
           return['message' => 'delete'];

        //ない場合は作る
        }else{
            Favorite::firstOrCreate([

                'user_id'=> $user_id,
                'admin_id' => $admin_id,
                'host' => $host

                ]);
         return['message' => 'add'];

        }


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
