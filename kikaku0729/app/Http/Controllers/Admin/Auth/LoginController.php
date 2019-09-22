<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\AdminProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admins/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

  // ログイン画面
    public function showLoginForm()
    {
        return view('admins.auth.login'); //管理者ログインページのテンプレート
    }
    protected function guard()
    {
        return \Auth::guard('admin'); //管理者認証のguardを指定
    }
    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/welcome');  // ログアウト後のリダイレクト先
    }
    public function admin_password(){
      return 'admin_password';
    }
    public function admin_email(){
        return 'admin_email';
    }
    //実際のログイン処理
    public function login(Request $request)
    {
      $message = '';
      if ($request->isMethod('post')) {
        $authinfo =[
          'admin_email' => $request->admin_email,
          'admin_password' => $request->admin_password
        ];

        if (Auth::guard("admin")->attempt($authinfo)){

          return redirect()->route('admin.home');
        } else {
          $message = 'ログインに失敗しました。';
        }
      }

      return view('admins.auth.login',[
        'message' => $message
      ]);
    }

}
