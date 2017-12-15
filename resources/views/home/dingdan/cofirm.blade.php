@extends('home.layout.home')

@section('title')
<title>确认订单</title>
@endsection

@section('css')
<link rel="stylesheet" href="/css/gouwu.css">
<link rel="stylesheet" href="/css/qrdd.css">
@endsection

@section('center')
<section>
<div class="contianer-fluid" id="gouwu">
       <div class="container" style="padding: 0px;">
       	   <div class="col-xs-12">
              <form>
       	   	   <ul class="list-unstyle list-inline">
       	   	   	   <li><a href="/gwc" class="active">购物车</a>
       	   	   	   	<span class="active2">
       	   	   	   		<div style="width: 360px;height: 3px;background-color: #e8340e;;position: absolute;top: 6px;left:-260px;"></div>
       	   	   	   	</span>
       	   	   	   </li>

       	   	   	   <li><a href="">确认订单</a>
                                   <span style="left: 25px;"></span>
       	   	   	   </li>
       	   	   	   <li><a href="">支付订单</a>
                                   <span style="left: 25px;"></span>
       	   	   	   </li>
       	   	   	   <li><a href="">完成支付</a>
                                   <span style="left: 27px;"></span>
       	   	   	   </li>
       	   	   </ul>
       	   	   <div class="che"></div>
       	   	   <!-- 确认地址 -->
       	   	   <div class="col-xs-11 col-xs-offset-1 shdz">
       	   	   	  <div class="shdz_t">
       	   	   	  	我的收货地址
       	   	   	  </div>
       	   	   	  <div class="shdz_b">
       	   	   	  	<button class="btn btn-sm" type="submit">使用其他地址</button>
       	   	   	  </div>
       	   	   </div>

       	   	   <!-- 支付方式 -->
       	   	   <div class="col-xs-11 col-xs-offset-1 zffs">
       	   	   	  <div class="shdz_t">
       	   	   	  	我的收货地址
       	   	   	  </div>
       	   	   	  <div class="zffs_b">
       	   	   	  	<a href="#">
                     <input type="radio" name="" checked="checked">
                     <span>在线支付</span>
                    </a>
       	   	   	  </div>
       	   	   </div>

       	   	   <!-- 商品清单 -->
       	   	   <div class="col-xs-11 col-xs-offset-1 spqd">
       	   	   	  <div class="shdz_t">
       	   	   	  	商品清单
       	   	   	  </div>
       	   	   	  <div class="spqd_b">
       	   	   	  	<table style="margin-left: 1px;">
       	   	   	  		<tr class="tr1">
       	   	   	  		   <td class="td1">1</td>	
       	   	   	  		   <td class="td2">2</td>	
       	   	   	  		   <td class="td2">3</td>	
       	   	   	  		   <td class="td2">4</td>	
       	   	   	  		</tr>
       	   	   	  		<tr class="tr2">
       	   	   	  		   <td class="td1">1</td>	
       	   	   	  		   <td class="td2">2</td>	
       	   	   	  		   <td class="td2">3</td>	
       	   	   	  		   <td class="td2">4</td>	
       	   	   	  		</tr>
       	   	   	  	</table>
       	   	   	  </div>
       	   	   </div>
              </form>
       	   </div>

       </div>
</div>

</section>

@stop