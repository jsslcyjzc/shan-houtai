@extends('home.layout.home')

@section('title')
<title>个人中心——努比亚nubia智能手机官网</title>
@endsection


@section('link')
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta property="wb:webmaster" content="6bdcc5762d77ce58">
<meta property="qc:admins" content="4267477257665211636">
<meta name="baidu-site-verification" content="YjQteHb3gi">
<meta name="charset" content="utf-8">
<meta name="wb:webmaster" content="6bdcc5762d77ce58">
<meta name="keywords" content="努比亚手机, Z17mini, M2, M2青春版, Z11 miniS, Z11, Z11 Max, Z11 mini, N2, 努比亚手机配件">
<meta name="description" content="努比亚手机官网，囊括了Z17mini, M2, M2青春版, Z11 miniS, Z11等智能手机及其配件，同时提供努比亚客户服务及售后支持。">
<link rel="stylesheet" href="/css/gerenzhongxin/css/bootstrap.css">
<link rel="stylesheet" href="/css/gerenzhongxin/css/nubia-ui.css">
<link rel="stylesheet" href="/css/gerenzhongxin/css/store.css">
<link rel="stylesheet" href="/css/gerenzhongxin/css/base.css">
<link rel="stylesheet" href="/css/gerenzhongxin/css/jia.css">
<link rel="stylesheet" href="/css/gerenzhongxin/css/services.css">
<link rel="stylesheet" href="/css/gerenzhongxin/css/member.css">

<link rel="stylesheet" href="/css/gerenzhongxin/css/59505ac996a056.css">    
@endsection


	




@section('center')
<div class="services-con">
        <div class="nav" style="margin-bottom: 20px;">
            <a target="_blank" href="#">首页</a>
            &nbsp;/&nbsp;
            <a href="#">个人中心</a>
            &nbsp;/&nbsp;
            <a href="#" style="cursor:default">信息总览</a>
        </div>
        <div class="sideNav" id="memberCon">
    <ul>
        <li>
            <p class="membertitle">个人中心</p>
            <ul class="membersubmenu">
                <li class="selected">
                    <a href="#">信息总览</a>
                </li>
                <li>
                    <a href="#">我的优惠劵</a>
                </li>
                <li>
                    <a href="#">我的礼包劵</a>
                </li>
                <li>
                    <a href="#">我的回收代金劵</a>
                </li>
                <li>
                    <a href="#">我的牛豆</a>
                </li>
                <li>
                    <a href="#">我的NB码</a>
                </li>
                <li>
                    <a href="/address">收货地址</a>
                </li>
                <li>
                    <a href="#">我的收藏</a>
                </li>
                <li>
                    <a href="#">我的预约</a>
                </li>
                <li>
                    <a href="#">账户中心</a>
                </li>
            </ul>
        </li>
    </ul>
</div>        
<div class="con">
    <div class="address memberboard">
        <div class="hd"> <h2 style="height: 35px;line-height: 35px;"> <span class="ico"></span> 信息总览 </h2> </div>
        <div class="welcome"><p> <span class="name">n4dnf57jw</span> ，欢迎您回来！ </p></div>
    </div>
    <div class="address user-orders">
        <div class="hd clearfix" style="float:none;"> <h4> <span class="ico"></span> 最近订单 </h4> </div>
        <table class="member-grid orders-table">
        <tbody><tr>
            <th>订单号</th>
            <th>收货人</th>
            <th>订单金额</th>
            <th>订单状态</th>
            <th>下单时间</th>
            <th>操作</th>
        </tr>
        
        <tr>
            <td colspan="6" class="quiet">
                未找到任何订单
            </td>
        </tr>
       </tbody></table>
        <div class="more-orders">
            <span>等待付款订单数(0)</span>
            <span>未完成的订单数(0)</span>
            <span>已完成的订单数(0)</span>
            <span>已取消的订单数(0)</span>
            <span>订单总数(0)</span> <strong><a href="https://shop.nubia.com/memberorder.php?a=orderList#memberCon" style="color:#e8380d">查看所有订单</a></strong> 
        </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style type="text/css">
    .gouwuche .pull-left{
        line-height: 75px;
    }
    .col-sm-2 .gouwuche .glyphicon-shopping-cart{
        margin-bottom: 25px;
    }
</style>
@stop