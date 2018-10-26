<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/**
 * 新增的路由
 */
Route::match(['get', 'post'], 'insert',['uses'=>'UserController@insert']);
/**
 * 显示的路由
 */
Route::get('read',['uses'=>'UserController@read']);
/**
 * 删除的路由
 */
Route::get('delete/{id}',['uses'=>'UserController@delete']);
/**
 * 修改的路由
 */
Route::match(['get','post'],'update/{id}',['uses'=>'UserController@update']);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
