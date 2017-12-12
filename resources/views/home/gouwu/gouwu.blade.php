@extends('home.layout.home')

@section('title')
<title>查看购物车</title>
@endsection


@section('css')
<link rel="stylesheet" href="/css/gouwu.css">
@endsection


@section('js')
<script>
	$(function(){
		$('#jian').click(function(){
			var	num="";
			num=$('#shu').val();
			var b=parseInt(num);
			if(b>1){
                b--;
			}
			$('#shu').val(b);
		})
		$('#jia').click(function(){
			var num="";
			num=$('#shu').val();
			var a=parseInt(num);
			a++;
			$('#shu').val(a);
		})
	})
</script>
@endsection


<!-- 身体 start -->
<!-- 身体 end -->
@section('center')
<section>
	<div class="contianer-fluid" id="gouwu">
       <div class="container" style="padding: 0px;">
       	   <div class="col-xs-12">
       	   	   <ul class="list-unstyle list-inline">
       	   	   	   <li><a href="" class="active">购物车</a>
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
       	   	   <table>
       	   	   	   <tr>
       	   	   	   	  <th>共<span>1</span>件商品</th>
       	   	   	   </tr>
       	   	   	   <tr>
       	   	   	   	  <td>商品</td>
       	   	   	   	  <td></td>
       	   	   	   	  <td>单价</td>
       	   	   	   	  <td>数量</td>
       	   	   	   	  <td>小计</td>
       	   	   	   	  <td>操作</td>
       	   	   	   </tr>
       	   	   	   <tr>
       	   	   	   	  <td>
       	   	   	   	  	 <img src="holder.js/50x100" alt="" width="50" height="100">
       	   	   	   	  </td>
       	   	   	   	  <td style="text-align: left;">
       	   	   	   	  	 <a href="" style="color: #000000;">&nbsp;&nbsp;nubia Z17mini(6GB+64GB 香槟金)</a>
       	   	   	   	  </td>
       	   	   	   	  <td>
       	   	   	   	  	 ¥1799
       	   	   	   	  </td>
       	   	   	   	  <td>
       	   	   	   	  	 <p style="margin-left: 35px;cursor: pointer;" id="jian">-</p>
       	   	   	   	  	 <input type="text" value="1" id="shu">
       	   	   	   	  	 <p id="jia" style="cursor: pointer;">+</p>
       	   	   	   	  </td>
       	   	   	   	  <td>
       	   	   	   	  	  <ol class="list-unstyled">
       	   	   	   	  	  	 <li>¥<span>1599</span></li>
       	   	   	   	  	  	 <li>已优惠:¥ <span>200.00</span></li>
       	   	   	   	  	  </ol>
       	   	   	   	  </td>
       	   	   	   	  <td>
       	   	   	   	  	<a href="" style="color: #838383;">
       	   	   	   	  	  <i class="glyphicon glyphicon-remove"></i>
       	   	   	   	  	</a>
       	   	   	   	  </td>
       	   	   	   </tr>
       	   	   	   <tr>
       	   	   	   	  <td colspan="2">
       	   	   	   	  	 <input type="checkbox" name="1">
       	   	   	   	  	 <a>+19元得Z17mini防震保护套</a>
       	   	   	   	  	 <div class="clearfix"></div>
       	   	   	   	  	 <input type="checkbox" style="margin-bottom: -10px;"  name="2">
       	   	   	   	  	 <a style="margin-bottom: -10px;">+19元得Z17mini防震保护套</a>
       	   	   	   	  </td>
       	   	   	   	  <td colspan="2">
       	   	   	   	  	  <p>商品总计:</p>
       	   	   	   	  	  <p>共节省:</p>
       	   	   	   	  	  <p>合计(不含运费):</p>
       	   	   	   	  </td>
       	   	   	   	  <td colspan="2">
       	   	   	   	  	  <p>¥<span>1799</span></p>
       	   	   	   	  	  <p>¥<span>200</span></p>
       	   	   	   	  	  <p>¥<span>1599</span></p>
       	   	   	   	  </td>
       	   	   	   </tr>
       	   	   	   <tr>
       	   	   	   	  <td colspan="6">
       	   	   	   	  	  <button class="but" type="button">
       	   	   	   	  	  	   继续购物
       	   	   	   	  	  </button>
       	   	   	   	  	  <button class="but" type="button">
       	   	   	   	  	  	   立即结算
       	   	   	   	  	  </button>
       	   	   	   	  </td>
       	   	   	   </tr>
       	   	   </table>
       	   </div>
       </div>
       <div class="contianer">
       	   <div class="col-xs-12" id="kong">
       	   	    <ul class="list-unstyled">
       	   	    	<li>你的购物车还是空的</li>
       	   	    	<li>赶紧行动吧 ! </li>
       	   	    	<li>
       	   	    		<button class="btn" type="button">马上去购物</button>
       	   	    	</li>
       	   	    </ul>
       	   	    <img src="/image/kong.png" alt="">
       	   </div>
       </div>
    </div>

</section>
   
@endsection
