@extends('home.layout.home')



@section('title')
<title>支付订单</title>
@endsection



@section('css')
<link rel="stylesheet" href="/css/gouwu.css">
<link rel="stylesheet" href="/css/zhifu.css">
@endsection


@section('center')
<section>
	<div class="contianer-fluid" id="gouwu">
       <div class="container" style="padding: 0px;">
       	   <div class="col-xs-12" style="margin-left: -10px;">
		   	   <ul class="list-unstyle list-inline">
		   	   	    <li><a href="/gwc" class="active">购物车</a>
			   	   	   	<span class="active2">
				   		    <div style="width: 360px;height: 3px;background-color: #e8340e;position: absolute;top: 6px;left:-260px;"></div>
			   	   	   	</span>
		   	   	    </li>

		   	   	   <li><a href="">确认订单</a>
                        <span style="left: 25px;background-color: #e8340e;">
                            <div style="width: 360px;height: 3px;background-color: #e8340e;position: absolute;top: 6px;left:-260px;"></div>   
                        </span>
		   	   	   </li>
		   	   	   <li><a href="">支付订单</a>
		                <span style="left: 25px;background-color: #e8340e;">
		                	<div style="width: 360px;height: 3px;background-color: #e8340e;position: absolute;top: 6px;left:-260px;"></div>  
		                </span>
		   	   	   </li>
		   	   	   <li><a href="">完成支付</a>
                        <span style="left: 27px;"></span>
		   	   	   </li>
		   	   </ul>
       	       <div class="che"></div>
           </div>

           <!-- 订单提交成功 -->
           <div class="col-xs-11 one">
           	    <div class="dui glyphicon glyphicon-ok"></div>
           	    <div class="two">
           	    	<ol class="list-unstyled">
           	    		<li>订单提交成功 !</li>
           	    		<li>(请您在 <span>23时59分33秒</span>内完成支付 , 超时订单将自动取消 ) 。</li>
           	    		<li>您的订单已经提交成功 , 请记住您的订单号 : <span>NN171212940483320591</span></li>
           	    		<li>您选定的支付方式为 : <span>在线支付</span></li>
           	    		<li>您的订单总额为 : <span>¥1,999.00</span></li>
           	    	</ol>
           	    </div>
           </div>


           <!-- 在线支付 -->
           <div class="col-xs-11 zaixian">
           	    <div class="zaixian-one col-xs-12">
           	    	<ol class="list-unstyled list-inline">
           	    		<li>在线支付</li>
           	    		<li>扫码支付</li>
           	    		<li>微信支付</li>
           	    		<li>招行掌上生活扫码支付</li>
           	    	</ol>
           	    	<div class="sanfang">
           	    		<div class="qingtai">
           	    			第三方支付平台:由于支付宝平台本身问题,暂不支持使用支付宝账号支付的过程中更换其它支付账号.
           	    		</div>
           	    		<div class="suning">
           	    			<div class="sn-one">
           	    				<input type="radio" checked="checked">
           	    				<div class="sn-two">
           	    					<p>苏宁支付</p>
           	    					<img src="/image/suning1.png" alt="">
           	    					<div class="shouci">首次支付立减10元 , 数量有限</div>
           	    				</div>
           	    			</div>
           	    			<!-- 支付宝 -->
           	    			<div class="sn-one">
           	    				<input type="radio">
           	    				<div class="sn-two" style="line-height: 40px;">
           	    					<p>支付宝</p>
           	    					<img src="/image/zhifubao1.png" alt="" style="margin-top: 10px;">
           	    				</div>
           	    			</div>

           	    			<!-- 银联在线 -->
           	    			<div class="sn-one">
           	    				<input type="radio">
           	    				<div class="sn-two" style="line-height: 40px;">
           	    					<p>银联在线</p>
           	    					<img src="/image/yinlian1.png" alt="" style="margin-top:8px;">
           	    				</div>
           	    			</div>
           	    		</div>
           	    		<div class="clearfix"></div>
           	    		<!-- 银行网银 -->
       	    			<div class="qingtai">
       	    			     银行网银:
       	    		    </div>
       	    		    <div class="suning">
           	    			<!-- 银行网银 -->
           	    			<div class="sn-one">
           	    				<input type="radio">
           	    				<div class="sn-two" style="line-height: 40px;">
           	    					<p>银行网银</p>
           	    					<img src="/image/yinlian2.png" alt="" style="margin-top: 10px;">
           	    				</div>
           	    			</div>
           	    		</div>
           	    		<div class="clearfix"></div>
           	    		<!-- 分期付款 -->
       	    			<div class="qingtai">
       	    			     分期付款:
       	    		    </div>
       	    		    <div class="suning">
           	    			<!-- 银行网银 -->
           	    			<div class="sn-one">
           	    				<input type="radio">
           	    				<div class="sn-two" style="line-height: 40px;">
           	    					<p>花呗分期</p>
           	    					<img src="/image/huabai.png" alt="" style="margin-top: 10px;">
           	    				</div>
           	    			</div>
           	    		</div>
           	    		<div class="clearfix"></div>
           	    		<input type="button" value="立即支付" style="margin-top: 40px;width: 125px;height: 30px;background-color: #e8380d;border-radius: 5px;border: none;color: #fff;margin-left:150px;">
           	    	</div>


           	    </div>

           </div>

       </div>
    </div>
</section>

@endsection

