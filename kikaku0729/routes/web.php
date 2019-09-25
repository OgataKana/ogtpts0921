<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//WELcom
Route::get('/','Controller@index')->name('');
// Route::get('/', function () {
//     return view('welcome')->name('/');
// });

//初めて＊＊について　に飛ぶ
Route::get('/top','Controller@top')->name('top');
// Route::get('/top', function () {
//     return view('top');
// });
//登録フォーム表示させたい
//ユーザー登録表示ページ名考える
Route::middleware("auth")->group(function(){//中はログイン しないとアクセスできない

    /////////////////////profile///////////////////////////////
    Route::get('/users/edit','UserController@edit')->name('user.edit');
    Route::POST('/users/store','UserController@store')->name('user.store');//store保存

    ////////////////////message/////////////////////////////////
    Route::get('/message', 'PostController@create')->name('message');
    Route::post('/message/store', 'PostController@store')->name('message.store');

    //////////////////favorite//u->a//////////////////////////
    // Route::get('/favorite', function () {
    //     $admin = Admin::orderBy('created_at', 'asc')->get();
    //       return view('favorite', [  'admins' => $admins  ]);
    // });
    // Route::delete('/favorite/{favorite}', function (favorite $favorite) {
    //     $admin->delete();  return redirect('/favorite');  });

    ////////////////////////////////////////////////////////


});
//各ページ表示//
    Route::get('/about','UserController@about');
    Route::get('/favorite','UserController@favorite')->name('favorite');
    // Route::get('/message','UserController@message')->name('message');
    Route::get('/photodata','UserController@photodata')->name('photodata');
    Route::get('/request','UserController@request')->name('request');
    Route::get('/sales','UserController@sales')->name('sales');
    Route::get('/pr','UserController@pr')->name('profile');
    Route::get('/Q&A','UserController@QA')->name('Q&A');


    ////////Admin/////////////////////////////////////////////////////////

    //////////ログイン ログアウト////////////////////////
    Route::get('admins/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admins/login', 'Admin\Auth\LoginController@login')->name('admin.login');
    /////////////新規登録/////////////////////////////
    Route::get('admins/register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('admins/register', 'Admin\Auth\RegisterController@register')->name('admin.register');
    ////////////////////////////////////////////////

Route::group(['prefix' => 'admins', 'middleware' => 'auth:admin'], function(){


    Route::get('/home', 'Admin\HomeController@index')->name('admin.home');

    Route::get('/index','AdminController@index')->name('admin.index');
    Route::get('/edit','AdminController@edit')->name('admin.edit');
    Route::post('/store','AdminController@store')->name('admin.store');


    Route::get('password/rest', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    /////////////////admin-message///////////////////////////
    Route::get('/message', 'AdminPostController@create')->name('admin.message');
    Route::post('/message/store', 'AdminPostController@store')->name('admin.message.store');
    /////////////////////request//a->u/////////////////////////
    // Route::get('/request', function () {
    //     $user = User::orderBy('created_at', 'asc')->get();
    //     return view('request', [  'users' => $users  ]);
    // });
    // Route::delete('/request/{request}', function (request $request) {
    //       $user->delete();  return redirect('/request');  });


    ///////////////////////////////////////////////////////
    Route::get('/item','Admin\ItemController@create');
    Route::post('/item/store','Admin\ItemController@store');

    //各ページ表示//
    Route::get('/favorite','AdminController@favorite')->name('admin.favorite');
    // Route::get('/message','AdminController@message')->name('admin.message');
    Route::get('/photodata','AdminController@photodata')->name('admin.photodata');
    Route::get('/request','AdminController@request')->name('admin.request');
    Route::get('/pr','AdminController@pr')->name('admin.profile');
    Route::get('/Q&A','AdminController@QA')->name('admin.Q&A');




});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
