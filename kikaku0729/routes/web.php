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

//ーーーUserーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー//
Route::middleware("auth")->group(function(){//中はログイン しないとアクセスできない

    //ーーーーーーーーprofileーーーーーーーー//
    Route::get('/users/edit','UserController@edit')->name('user.edit');
    Route::POST('/users/store','UserController@store')->name('user.store');//store保存

    //ーーーーーーーーmessageーーーーーーーー//
    // Route::get("/posts", 'PostController@index')->name('users.message');
    // Route::post("/posts/create", 'PostController@create')->name('users.message.store');

});
//各ページ表示//
    Route::get('/about','UserController@about');

    //ーーーーーーーーーーいいねーーーーーーーーーー//
    Route::get('/favorite','UserController@favorite')->name('favorite');
    // Route::post('/favorite/post','UserController@post')->name('favorite.post');
    //ーーーーーーーーーー承諾／拒否ーーーーーーーーーー//
    Route::get('/ok','UserController@ok')->name('ok');
    // Route::get('/ok/store','FavoriteController@store')->name('ok.store');

    Route::get('/no','UserController@no')->name('no');
    // Route::get('/no/store','Controller@store')->name('no.store');
    //ーーーーーーーーーーMAIL-listーーーーーーーーーー//
    Route::get('/mail','UserController@maillist')->name('maillist');

    //ーーーーーーーーーーMAIL-送るーーーーーーーーーー//
    Route::get('/mail/create', 'UserController@mailcreate')->name('mailcreate');

    // Route::get('/photodata','UserController@photodata')->name('photodata');
    // Route::get('/request','UserController@request')->name('request');
    // Route::get('/sales','UserController@sales')->name('sales');
    // Route::get('/pr','UserController@pr')->name('profile');
    Route::get('/Q&A','UserController@QA')->name('Q&A');


//---Admin------------------------------------------------------------------------------------//

    //ーーーーーーーーーーログイン ログアウトーーーーーーーーーー//
    Route::get('admins/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admins/login', 'Admin\Auth\LoginController@login')->name('admin.login');
    //ーーーーーーーーーー新規登録ーーーーーーーーーー//
    Route::get('admins/register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('admins/register', 'Admin\Auth\RegisterController@register')->name('admin.register');


Route::group(['prefix' => 'admins', 'middleware' => 'auth:admin'], function(){


    Route::get('/home', 'Admin\HomeController@index')->name('admin.home');


    Route::get('/index','AdminController@index')->name('admin.index');
    //ーーーーーーーーーーprofile編集ーーーーーーーーーー//
    Route::get('/edit','AdminController@edit')->name('admin.edit');
    Route::post('/store','AdminController@store')->name('admin.store');

    //ーーーーーーーーーーパスワードリセットーーーーーーーーーー//
    Route::get('password/rest', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

    //ーーーーーーーーーーadmin-messageーーーーーーーーーー//
    // Route::get("posts", 'AdminPostController@index')->name('admin.message');
    // Route::post("posts/create", 'AdminPostController@create')->name('admin.message.store');

    // Route::get('/message', 'AdminPostController@create')->name('admin.message');
    // Route::post('/message/store', 'AdminPostController@store')->name('admin.message.store');

    //ーーーーーーーーーーアイテム登録ーーーーーーーーーー//
    Route::get('/item','Admin\ItemController@create');
    Route::post('/item/store','Admin\ItemController@store');

    //ーーーーーーーーーーお気に入りーーーーーーーーーー//
    // Route::get('/favorite','AdminController@favorite')->name('admin.favorite');

    //ーーーーーーーーーーphotoデーターーーーーーーーーー//
    // Route::get('/photodata','AdminController@photodata')->name('admin.photodata');

    //ーーーーーーーーーーリクエストーーーーーーーーーー//
    Route::get('/request','AdminController@request')->name('admin.request');
    Route::post('/request/post','AdminController@post')->name('admin.request.post');
    //ーーーーーーーーーー承諾／拒否ーーーーーーーーーー//
    Route::get('/ok','AdminController@ok')->name('admin.ok');
    Route::get('/no','AdminController@no')->name('admin.no');
    //ーーーーーーーーーーMAIL-listーーーーーーーーーー//
    Route::get('/mail','AdminController@maillist')->name('admin.maillist');
    //ーーーーーーーーーープロフィールーーーーーーーーーー//
    Route::get('/pr','AdminController@pr')->name('admin.profile');

    //ーーーーーーーーーーQ&A(サービスについて)ーーーーーーーーーー//
    Route::get('/Q&A','AdminController@QA')->name('admin.Q&A');




});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
