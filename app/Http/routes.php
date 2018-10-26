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
    return view('admin/index');
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
/**
 * x显示分类添加的模块
 */
Route::get('article_category',function (){
    return view('admin/add_article_category');
});
/**
 * x显示分类添加的模块product_category
 */
Route::get('product_category',function (){
    return view('admin/add_product_category');
});
/**
 * 显示前台页面
 */
Route::get('indexs',function (){
    return view('index/index');
});
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
