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
	$banner = DB::table('banner')->where('path',1)->get();
	$cates = DB::table('cates')->where('pid',0)->get();
	// dd($cates);
    return view('home.layout.home',['banner'=>$banner,'cates'=>$cates]);
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


//轮播图管理
Route::resource('banner','BannerController');


//nubiaUI
Route::resource('UIluntan','NubiaUIController');

});




//前台管理
//详情
//http://ht.com/goods/10
Route::get('/details','DetailsController@details');

//商城主页
Route::get('/Homes','HomeController@index');

//努比亚首页
Route::get('/index','HomeController@doindex');
//努比亚论坛
Route::get('/Shequ','HomeController@shequ');


//注册


//登录
Route::get('/Home/login','LoginsController@login');
Route::get('/Home/login1','LoginsController@login1');
//忘记密码
Route::get('/Home/wangji','WangjiController@wangji');
Route::get('/Home/wangji1','WangjiController@wangji1');
Route::get('/message','CommonControlller@message');

//了解努比亚
Route::get('/Home/liaojie','LiaojieController@liaojie');

//联系努比亚
Route::get('Home/lianxi','LianxiController@lianxi');

//公益基金会
Route::get('/Home/jijin','JijinController@jijin');

//福利会
Route::get('/Home/fuwu','FuwuController@fuwu');

//手机体验店 地图
Route::get('/Home/tiyan','TiyanController@tiyan');





//购物车
Route::get('/Gouwu',"HomeController@gouwu");



//购物车
Route::post('/gwc','CartController@store');
Route::get('/gwc','CartController@indexa');


//收获地址
Route::resource('/dingdan','DingdanController');

Route::get('/getarea','DingdanController@getArea');

Route::get('/zhifu','DingdanController@zhifu');

Route::get('/store','DingdanController@store');


//手机配件

Route::get('/Shouji',"HomeController@shouji");

Route::get('/Shouji',"GoodsController@glist");

Route::get('home/zhuce1','zhuceController@zhuce1');
Route::get('home/index','ceshiController@index');
//注册
Route::get('home/zhuce','zhuceController@zhuce');
//个人中心
Route::get('home/gerenzhongxin','gerenController@gerenzhongxin');

//抢先布局
//ht.com/article/304
Route::get('home/qiangxianbuju','ArticleController@show');

Route::get('home/qiangxianbuju','qiangxianbujuController@index');
