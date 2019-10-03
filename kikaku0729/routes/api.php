<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//ーーーーーーーーーーuser->adminーーーーーーーーーー//

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:user'], function(){

});

Route::POST('favorites/admins/{admin_id}/update','API\FavoriteController@update')->name('favorite.admin.update');
//ーーーーーーーーーーuser-ーーーーーーーーーー//


//ーーーーーーーーーーadmin->userーーーーーーーーーー//

 Route::middleware('auth:api')->get('/admin', function (Request $request) {
    return $request->admin();
});
Route::group(['middleware' => 'auth:admin'], function(){

});

 Route::POST('/api/favorites/admins/{user_id}/update','API\RequestController@update')->name('favorite.user.update');
