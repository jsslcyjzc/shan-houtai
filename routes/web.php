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
//后台
//登录管理
Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@dologin');

//后台路由组
Route::group(['middlemware'=>'login'],function(){
//首页
Route::get('/admin','AdminController@index');

//用户管理
Route::resource('user','UserController');

//文章管理
Route::resource('article','ArticleController');

//尺寸管理
Route::resource('size','SizeController');

//分类管理
Route::resource('cate','CateController');

//商品管理
Route::resource('goods','GoodsController');

});



//前台管理
//详情
Route::get('/details','DetailsController@details');
//商城主页
Route::get('/Homes','HomeController@index');
//努比亚首页
Route::get('/index','HomeController@doindex');
//努比亚论坛
Route::get('/nubiaUI','HomeController@nubiaUI');
<<<<<<< HEAD
//手机配件在线购买
// Route::get('/zxgm','HomeController@zxgm');
=======
Route::get('home/zhuce1','zhuceController@zhuce1');
Route::get('home/index','ceshiController@index');
Route::get('home/zhuce','zhuceController@zhuce');
Route::get('home/gerenzhongxin','gerenController@gerenzhongxin');
Route::get('home/qiangxianbuju','qiangxianbujuController@index');
>>>>>>> 1376db3ce11c757f12ad321c0b7f75375ef69fe9
