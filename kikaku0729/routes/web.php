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

    Route::get('/users/edit','UserController@edit')->name('user.edit');
    //php artisan make:controller      作る@そのなか

    Route::POST('/users/store','UserController@store')->name('user.store');//store保存

    /////////////////message///////////////////////
    Route::get('/message', 'PostController@create')->name('message');
    Route::post('/message/store', 'PostController@store')->name('message.store');
    ////////////////////////////////////////////////
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


////////Admin//////////////////////////////////////////////////////////////////////////////
//Admin 登録　ログイン ログアウト
    Route::get('admins/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admins/login', 'Admin\Auth\LoginController@login')->name('admin.login');

    Route::get('admins/register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('admins/register', 'Admin\Auth\RegisterController@register')->name('admin.register');

Route::group(['prefix' => 'admins', 'middleware' => 'auth:admin'], function(){


     Route::get('/home', 'Admin\HomeController@index')->name('admin.home');

    Route::get('/index','AdminController@index')->name('admin.index');
    Route::get('/edit','AdminController@edit')->name('admin.edit');
    Route::post('/store','AdminController@store')->name('admin.store');


    Route::get('password/rest', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
/////////////////admin-message///////////////////////
    Route::get('/message', 'AdminPostController@create')->name('admin.message');
    Route::post('/message/store', 'AdminPostController@store')->name('admin.message.store');
////////////////////////////////////////////////

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
