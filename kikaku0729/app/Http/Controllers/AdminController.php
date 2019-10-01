<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;//appから数える
use App\Request_admin;
use Auth;

use App\User;
use App\Favorite;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){//

            return view("admins.index");
    }
    public function edit(){

        $admin = Admin::where("admin_id",Auth::id())->first();//ID　ログイン 情報から取ってきて入れる

        return view('admins.profile.edit',['admin'=>$admin]);//admins/edit.blade.phpを表示

    }

    public function store(Request $request){

        //1,飛んできたデータを変数で受け取る

        $admin = Admin::find(Auth::id());//書き方は色々ある

          //画像と拡張子を取得
        //調べたい人はvar_dump($riquest->file('image'))

        //画像のデータが送られてきた場合のみ、下記の処理
        if($request->file('admin_image')){

            $file_name = $request->file('admin_image')->getClientOriginalName();
            $file_type = null;
            if($file_type["type"] == "image/png"){
                $file_type = '.png';
            }elseif($file_type["type"] == "image/jpng"){
                 $file_type = ".jpg";
            }



            //画像保存
            $filePath = $request->file('admin_image')->storeAs('public/upload_image',$file_name.$file_type);
            $admin->admin_image = str_replace('public/','',$filePath);
        }

        $admin->admin_name = $request->admin_name;
        $admin->admin_tel = $request->admin_tel;
        $admin->admin_email = $request->admin_email;
        $admin->admin_address = $request->admin_zipcode.$request->admin_address;
        $admin->ec_url = $request->ec_url;
        $admin->admin_genre = $request->admin_genre;
        $admin->admin_password = $request->admin_password;




    //       //バリデートをかける。
    //  protected function validator(array $data){
    //     return Validator::make($data, [
    //         'admin_name' => 'required|string|max:255',
    //         'admin_email' => 'required|string|email|max:255|unique:users',
    //         'admin_password' => 'required|string|min:6|confirmed',
    //     ]);


        //（okなら）データの保存、更新(処理)を行う
          $admin->update();

        return redirect('/admins/edit');
    }
    ///////////////////////いいね！一覧//////////////////////////
    public function request(){
        $admin = Admin::where("admin_id",Auth::id())->first();

        $host = 'admin';

        $lists = Request::where('admin_id', Auth::id())->where('host', 'user')->get();
        $user_lists = array();
        foreach ($lists as $list){
            array_push($user_lists ,$list->user_id);
        }
        var_dump($user_lists);
        $users = User::whereIn('user_id', $lists);

        return view('admins.request.index',['admin' => $admin,'lists' => $lists, $host]);
    }
    public function post(){

    }

    ////////////////////////承諾／拒否//////////////////////////////////
    public function ok(){
        $user = User::where("user_id",Auth::id())->first();


        return view('admins.message.list',['user' => $user]);

    }
    public function no(){
        return view('admins.request.index');
    }




    ////////////////////////////////////////////////////////////

    //  public function favorite(){
    //     $admin = Admin::where("admin_id",Auth::id())->first();
    //     return view('admins.favorite.index',['admin' => $admin]);
    // }
    public function message(){
        $admin = Admin::where("admin_id",Auth::id())->first();
        return view('admins.message.list',['admin' => $admin]);
    }
    // public function photodata(){
    //     $admin = Admin::where("admin_id",Auth::id())->first();
    //     return view('admins.photodata.index',['admin' => $admin]);
    // }
    // public function request(){
    //     $admin = Admin::where("admin_id",Auth::id())->first();
    //     return view('admins.request.index',['admin' => $admin]);
    // }
    // public function pr(){
    //     $admin = Admin::where("admin_id",Auth::id())->first();
    //     return view('admins.profile.index',['admin' => $admin]);
    // }
    public function QA(){
        $admin = Admin::where("admin_id",Auth::id())->first();
        return view('admins.Q&A.index',['admin' => $admin]);
    }
}
