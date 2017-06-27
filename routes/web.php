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

Route::get('/', function () {
    return view('welcome');
});
//建立前台路由组  
Route::group(['prefix' => 'home','middleware' => 'home'], function () {
    Route::get('/',"Home\IndexController@index");//前台首页路由
});
 
 
//建立后台路由组
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/',"Admin\IndexController@index"); //后台首页
    Route::resource('Articletype', 'Admin\ArticletypeController'); //后台商品类别管理
});

