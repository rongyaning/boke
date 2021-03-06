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


Route::get('/home/login',"Home\LoginController@login");//加载前台登录界面
Route::post('/home/dologin',"Home\LoginController@doLogin"); //执行前台登录
Route::get('/home/logout',"Home\LoginController@logout"); //执行退出
Route::get('/home/getcode',"Home\LoginController@getCode");//加载验证码


Route::get('/admin/login',"Admin\LoginController@login");//加载后台登录界面
Route::post('/admin/dologin',"Admin\LoginController@doLogin"); //执行后台登录
Route::get('/admin/logout',"Admin\LoginController@logout"); //执行退出
Route::get('/admin/getcode',"Admin\LoginController@getCode");//加载验证码


//建立前台路由组  
Route::group(['prefix' => 'home','middleware' => 'home'], function () {
    Route::get('/',"Home\IndexController@index");//前台首页路由
    
});


//建立后台路由组
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/',"Admin\IndexController@index"); //后台首页路由
    Route::resource('userinfo',"Admin\UserinfoController"); //后台信息管理
    Route::resource('article',"Admin\ArticleController");//后台文章表管理
    Route::resource('contents',"Admin\ContentsController");//后台文章内容管理
    Route::resource('articletype',"Admin\ArticletypeController");//后台文章类别
    Route::resource('discusstab',"Admin\DiscusstabController");//后台评论表管理
    Route::resource('article_discussTab',"Admin\Article_discussTabController");//文章评论表
    Route::resource('collection',"Admin\CollectionController");//收藏
    Route::resource('log',"Admin\LogController");//日志
    Route::resource('adminor',"Admin\AdminorController");//管理员
});
