@extends('home.layout.home')

@section('title')
<title>确认订单</title>
@endsection

@section('css')
<link rel="stylesheet" href="/css/gouwu.css">
<link rel="stylesheet" href="/css/qrdd.css">
@endsection

@section('center')
<script>
       $(function(){
              $('.shdz_b > button').mousedown(function(){
                   $('.dizhi').show();
              })



              $('.baocun > #xin').mousedown(function(){
                   $('.dizhi').hide();
              })

              $('.baocun > #xin').mousedown(function(){
                   $('.wancheng').show();
              })



              $('.wancheng > button').mousedown(function(){
                   $('.dizhi').show();
                   $('.wancheng').hide();
              })
       })
</script>




<section>
<div class="contianer-fluid" id="gouwu">
       <div class="container" style="padding: 0px;">
       	   <div class="col-xs-12">
             <form action="/zhifu">
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
                                  <span style="left: 25px;"></span>
           	   	   </li>
           	   	   <li><a href="">完成支付</a>
                                  <span style="left: 27px;"></span>
           	   	   </li>
           	   </ul>
             	   <div class="che"></div>
           	   <!-- 确认地址 -->
           	   <div class="col-xs-11 shdz">
           	   	  <div class="shdz_t">
           	   	  	我的收货地址
           	   	  </div>
           	   	  <div class="shdz_b">
           	   	  	<button class="btn btn-sm" type="submit">使用其他地址</button>
                            <div class="dizhi">
                                   <style>
                                         .form-group label{
                                             color: #666666;
                                             font-weight: normal;
                                             text-indent: 40px;
                                             margin-top: 10px;
                                             font-size: 15px;
                                         } 
                                   </style>
                                <form class="form-horizontal">
                                     <div class="form-group col-xs-10">
                                       <label for="inputEmail3" class="col-sm-2 control-label">收件人 : </label>
                                       <div class="col-sm-10">
                                         <input type="text" class="form-control" id="inputEmail3" placeholder="填写收件人">
                                         <small>填写收件人</small>
                                       </div>
                                     </div>
                                     <div class="form-group col-xs-10">
                                       <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top: 25px;">省份 : </label>
                                       <div class="col-sm-10" style="margin-top: 20px;">
                                           <select class="form-control" style="width: 100px;float: left;margin-right: 15px;">
                                                <option>省</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                          </select>
                                          <select class="form-control" style="width: 100px;float: left;margin-right: 15px;">
                                                <option>市</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                          </select>
                                          <select class="form-control" style="width: 100px;">
                                                <option>县</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                          </select>
                                          <small>填选择所在城市</small>
                                       </div>
                                     </div>
                                     <div class="form-group col-xs-10" style="clear: both;">
                                       <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 25px;">收货地址 : </label>
                                       <div class="col-sm-10" style="margin-top: 20px;">
                                         <input type="text" class="form-control" id="inputPassword3" placeholder="请填写收货地址">
                                         <small>请填写收货地址</small>
                                       </div>
                                     </div>
                                     <div class="form-group col-xs-10" style="clear: both;">
                                       <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 25px;">手机 : </label>
                                       <div class="col-sm-10" style="margin-top: 20px;">
                                         <input type="text" class="form-control" id="inputPassword3" placeholder="请填写手机号码">
                                         <small>请填写手机号码</small>
                                       </div>
                                     </div>
                                     <div class="form-group col-xs-10">
                                       <div class="col-sm-offset-1 col-sm-10" style="margin-left: 130px;margin-top: 20px;">
                                         <div class="checkbox">
                                           <label>
                                             <input type="checkbox"> 设为默认地址
                                           </label>
                                         </div>
                                       </div>
                                     </div>
                                   <div style="float: right;" class="col-xs-10">
                                     <div class="form-group pull-left col-md-offset-3">
                                       <div class="col-sm-offset-2 col-sm-10 baocun">
                                         <button type="submit" class="btn btn-default" style="background-color: #e8380d;color: #fff;" id="xin">保存新地址</button>
                                       </div>
                                     </div>
                                     <div class="form-group pull-left">
                                       <div class="col-sm-offset-2 col-sm-10">
                                         <button type="submit" class="btn btn-default">取消</button>
                                       </div>
                                     </div>
                                   </div>
                                   </form>
                            </div>
                            <div class="wancheng">
                                <div class="wan">
                                    <div class="neirong">收件人</div>
                                    <div class="neirong"></div>
                                    <div class="neirong"></div>
                                </div>
                                <button class="btn btn-sm" type="submit">使用其他地址</button>
                            </div>
	   	   	  </div>
	   	   </div>

	   	   <!-- 支付方式 -->
	   	   <div class="col-xs-11 zffs">
	   	   	  <div class="shdz_t">
	   	   	  	支付方式
	   	   	  </div>
	   	   	  <div class="zffs_b">
	   	   	  	<a href="#">
                            <input type="radio" name="" checked="checked" class="form-control">
                            <span>在线支付</span>
                           </a>
	   	   	  </div>
	   	   </div>

          	   <!-- 商品清单 -->
          	   <div class="col-xs-11 spqd">
          	   	  <div class="shdz_t col-xs-12">
          	   	  	商品清单
          	   	  </div>
          	   	  <div class="col-xs-12 spqd_b">
          	   	  	<table style="margin-top: 0px;margin-left: 0px;">
          	   	  	     <tr>
                                     <th>商品名称</th>          
                                     <th>单价</th>          
                                     <th>数量</th>          
                                     <th>小计</th>          
                                 </tr>
                                 <tr style="height: 175px;">
                                     <td>
                                       <div class="xiaon"></div>
                                       <div class="titles">
                                          <p><a href="">Z17miniS 小牛8</a></p>
                                          <p><a href="" style="font-size: 12px;color: #b5b5b5;">[赠品]Z17minS防震保护套(透明)</a></p>
                                       </div>
                                     </td>
                                     <td>¥<span>1999</span></td>
                                     <td>1</td>
                                     <td>¥<span>1999</span></td>
                                 </tr>
                                <form action="/zhifu">
                                 <tr style="height: 250px;">
                                      <td colspan="4" style="border: none;">
                                          <div class="jin">商品金额 :<span>¥1999</span></div>
                                          <div class="jin">+配送费用 :<span>¥1999</span></div>
                                          <div class="jin">总计 :<span>¥1999</span></div>
                                          <div class="jin">
                                              <input type="submit" value="提交订单">
                                          </div>
                                      </td>
                                 </tr>
                                </form>
          	   	  	</table>
          	   	  </div>
          	   </div>
              </form>
           </div>

       </div>
</div>

</section>

@stop