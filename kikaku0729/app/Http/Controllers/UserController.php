<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;//appから数える
use Auth;
use App\Favorite;
use App\Admin;

class UserController extends Controller
{
    public function edit(){//
        $user = User::where("user_id",Auth::id())->first();//ID　ログイン 情報から取ってきて入れる

        return view('users.profile.edit',['user'=>$user]);//users/edit.blade.phpを表示
    }

    public function store(Request $request){


        //1,飛んできたデータを変数で受け取る

        $user = User::find(Auth::id());//書き方は色々ある


        //画像と拡張子を取得
        //調べたい人はvar_dump($riquest->file('image'))

        //画像のデータが送られてきた場合のみ、下記の処理
        if($request->file('image')){

            $file_name = $request->file('image')->getClientOriginalName();
            $file_type = null;
            if($file_type["type"] == "image/png"){
                $file_type = '.png';
            }elseif($file_type["type"] == "image/jpng"){
                 $file_type = ".jpg";
            }



            //画像保存
            $filePath = $request->file('image')->storeAs('public/upload_image',$file_name.$file_type);
            $user->image = str_replace('public/','',$filePath);
        }

        $user->user_name = $request->user_name;
        $user->user_nickname = $request->user_nickname;
        $user->user_tel = $request->user_tel;
        $user->user_email = $request->user_email;
        $user->user_address = $request->zipcode.$request->user_address;//郵便番号+住所
        $user->user_gender = $request->user_gender;
        $user->user_genre = $request->user_genre;
        $user->user_height = $request->user_height;
        $user->user_camera_id = $request->user_camera_id;


    //   //バリデートをかける。
    //  protected function validator(array $data){
    //     return Validator::make($data, [
    //         'user_name' => 'required|string|max:255',
    //         'user_email' => 'required|string|email|max:255|unique:users',
    //         'user_password' => 'required|string|min:6|confirmed',
    //     ]);

    //      //（okなら）データの保存、更新(処理)を行う

        $user->update();

        return redirect('users/edit');

        }
        //ーーーーーーーーいいねーーーーーーーー//
        public function favorite(){
            $user = User::where("user_id",Auth::id())->first();

            $host= 'user';


            $lists = DB::table('favorites')->leftjoin('admins','admins.admin_id','=','favorites.admin_id')
            ->where('user_id', Auth::id())->where('host', 'admin')->get();

            $admin_lists = array();
            foreach ($lists as $list){
                array_push($admin_lists ,$list->admin_id);
            }
            var_dump($admin_lists);
            $admins = Admin::whereIn('admin_id', $lists);

            return view('users.favorite.index',['user' => $user,'lists' => $lists ,$host=> 'user']);
        }
        public function post(){

        }
        //ーーーーーーーーーー承諾／拒否ーーーーーーーーーー//
        public function ok(){
            $user = User::where("user_id",Auth::id())->first();

            $host= 'user';


            $lists = Favorite::where('user_id', Auth::id())->where('host', 'admin')->get();
            $admin_lists = array();
            foreach ($lists as $list){
                array_push($admin_lists ,$list->admin_id);
            }
            var_dump($admin_lists);
            $admins = Admin::whereIn('admin_id', $lists);


            return view('users.message.list',['user' => $user,'lists' => $lists ,$host=> 'user'])->with('flash_message', '承諾しました');
        }


        public function no(){
            $user = User::where("user_id",Auth::id())->first();

            $host= 'user';


            $lists = Favorite::where('user_id', Auth::id())->where('host', 'admin')->get();
            $admin_lists = array();
            foreach ($lists as $list){
                array_push($admin_lists ,$list->admin_id);
            }
            var_dump($admin_lists);
            $admins = Admin::whereIn('admin_id', $lists);


            return view('users.favorite.index',['user' => $user,'lists' => $lists ,$host=> 'user'])->with('flash_message', '拒否しました');
        }


        //ーーーーーーーーーーMAIL-listーーーーーーーーーー//
        public function maillist(){
            $user = User::where("user_id",Auth::id())->first();

            $host= 'user';

            $lists = DB::table('favorites')->leftjoin('admins','admins.admin_id','=','favorites.admin_id')
            ->where('user_id', Auth::id())->where('host', 'admin')->get();
            $admin_lists = array();
            foreach ($lists as $list){
                array_push($admin_lists ,$list->admin_id);
            }
            var_dump($admin_lists);
            $admins = Admin::whereIn('admin_id', $lists);

            // var_dump($lists);

            return view('users.message.list',['user' => $user,'lists' => $lists ,$host=> 'user']);
        }
         //ーーーーーーーーーーMAIL-送るーーーーーーーーーー//



        ////////////////////////////////////////////////////////////
        // public function message(){
        //     $user = User::where("user_id",Auth::id())->first();
        //     return view('users.message.list',['user' => $user]);
        // }

        // public function photodata(){
        //     $user = User::where("user_id",Auth::id())->first();
        //     return view('users.photodate.index',['user' => $user]);
        // }
        // public function request(){
        //     $user = User::where("user_id",Auth::id())->first();
        //     return view('users.request.index',['user' => $user]);
        // }
        // public function sales(){
        //     $user = User::where("user_id",Auth::id())->first();
        //     return view('users.sales.index',['user' => $user]);
        // }
        // public function pr(){
        //     $user = User::where("user_id",Auth::id())->first();
        //     return view('users.profile.index',['user' => $user]);
        // }
        public function QA(){
            $user = User::where("user_id",Auth::id())->first();
            return view('users.Q&A.index',['user' => $user]);
        }

}
