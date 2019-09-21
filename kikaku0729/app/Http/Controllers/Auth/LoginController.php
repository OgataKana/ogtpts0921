<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function user_password()
    {
      return 'user_password';
    }
    public function user_email()
    {
      return 'user_email';
    }


    //実際のログイン処理
    public function login(Request $request)
    {
      $message = '';
      if ($request->isMethod('post')) {
        $authinfo =[
          'user_email' => $request->user_email,
          'user_password' => $request->user_password
        ];
        if (Auth::attempt($authinfo)){
          return redirect()->route('home');
        } else {
          $message = 'ログインに失敗しました。';
        }
      }
      return view('auth.login',[
        'message' => $message
      ]);
    }
}
