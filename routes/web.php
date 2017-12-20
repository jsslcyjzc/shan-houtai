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
	// dd($cates);
	$banner =DB::table('banner')->get();
    return view('home.home',compact('banner'));
});
//后台
//登录管理
Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@dologin');

//后台路由组
Route::group(['middleware'=>'login'],function(){
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


//前台管理
Route::resource('qt','QiantaiController');

});


//公益基金会 
Route::resource('gongyis','GongyiController');
//关于我们  联系努比亚  品牌
Route::resource('guanyu','GuanyuController');
//手机体验
Route::resource('tiyas','TiyaController');
//手机服务
Route::resource('fwd','FwController');









//前台管理
//详情
//http://ht.com/goods/10
Route::get('/details','DetailsController@details');

//商城主页
Route::get('/Homes','HomeController@index');

//努比亚首页
Route::get('/index','HomeController@doindex');
//努比亚论坛
Route::get('/Shequ','HomeController@Shequ');


//注册

//登录
Route::get('/Home/login','LoginsController@login');
Route::post('/Home/login','LoginsController@dologin');
Route::get('/Home/login1','LoginsController@login1');

Route::post('/Homes','LoginsController@logindex');
//忘记密码
Route::get('/Home/wangji','WangjiController@wangji');
Route::get('/Home/wangji1','WangjiController@wangji1');
Route::get('/messge','CommonControlller@message');

//了解努比亚
Route::get('/Home/guanyu','GuanController@guanyu');

//联系努比亚
Route::get('Home/lianxi','LianxiController@lianxi');

//公益基金会
Route::get('/Home/jijin','JijinController@jijin');

//手机服务
Route::get('/Home/fuwu','FuwuController@fuwu');

//手机体验店 地图
Route::get('/Home/tiyan','TiyanController@tiyan');

//品牌大事件
Route::get('/Home/pinpai','PinpaiController@pinpai');





//购物车
Route::get('/Gouwu',"HomeController@gouwu");


//手机配件

Route::get('/Shouji',"HomeController@shouji");

Route::get('/Shouji',"GoodsController@glist");


//手机配件

Route::get('/Peijian',"HomeController@peijian");

Route::get('/Peijian',"GoodsController@gpeijian");




Route::get('home/zhuce1','zhuceController@zhuce1');
Route::get('home/index','ceshiController@index');

//注册
Route::get('home/zhuce','UserController@signup');
Route::post('home/zhuce','UserController@dosign');
Route::get('/message','CommonController@message');
Route::get('/confirm/{id}', 'UserController@confirm');

//个人中心
Route::get('home/gerenzhongxin','gerenController@gerenzhongxin');



//收获地址
Route::resource('/address','AddressController');
Route::get('/getadd','AddressController@getAdd');
Route::post('/dingdan','DingdanController@store');

Route::resource('/dingdan','DingdanController');
Route::post('/dingdan/confirm','DingdanController@index');


//支付
Route::get('/zhifu','DingdanController@zhifu');


//抢先布局
//ht.com/article/304
Route::get('home/qiangxianbuju','ArticleController@show');

Route::get('home/qiangxianbuju','qiangxianbujuController@index');



//购物车加入成功
Route::post('/gwc','CartController@store');
Route::get('/gwc','CartController@indexa');
Route::get('/gwc/delete','CartController@delete');

//收获地址
Route::resource('dingdan','DingdanController');

