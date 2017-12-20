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
	});

       $('.del').click(function(){
        //获取相关信息
        var cid = $(this).attr('cid');
        var tr = $(this).parents('tr');
        //发送请求
        $.ajax({
            type:'get',
            url: '/gwc/delete',
            data: {'cid':cid},
            success: function(data){
                if(data == '1') {
                    tr.fadeOut(1000,function(){
                        alert('移出成功!!!');
                    });
                }
            }

        })

    });
</script>
@endsection


<!-- 身体 start -->
<!-- 身体 end -->
@section('center')
<section>
<div class="contianer-fluid" id="gouwu">
       <div class="container" style="padding: 0px;">
       	   <div class="col-xs-12">
              <form action="/dingdan">
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
       	   	   <table id="shoptable">
       	   	   	   <tr>
       	   	   	   	  <th>共<span>1</span>件商品</th>
       	   	   	   </tr>
       	   	   	   <tr>
       	   	   	   	  <td>商品</td>
       	   	   	   	  <td></td>
       	   	   	   	  <td>单价</td>
       	   	   	   	  <td>数量</td>
       	   	   	   	  <td>操作</td>
       	   	   	   </tr>
                    @foreach($goods as $k=>$v)
       	   	   	   <tr>
       	   	   	   	  <td>
       	   	   	   	  	 <img src="{{$v->pic}}" alt="" width="50" height="100">
       	   	   	   	  </td>
       	   	   	   	  <td style="text-align: left;">
       	   	   	   	  	 <a href="" style="color: #000000;">&nbsp;&nbsp;{{$v->detail->title}}</a>
       	   	   	   	  </td>
       	   	   	   	  <td>
       	   	   	   	  	 ¥{{$v->detail['price']}}
       	   	   	   	  </td>
       	   	   	   	  <td>
       	   	   	   	  	 <p style="margin-left: 35px;cursor: pointer;" id="jian">-</p>
       	   	   	   	  	 <input type="text" value="1" id="shu">
       	   	   	   	  	 <p id="jia" style="cursor: pointer;">+</p>
       	   	   	   	  </td>
       	   	   	   	  <td>
       	   	   	   	  	<a href="#" class="remove-item del" cid="{{$v->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove from cart" style="color: #838383;">
       	   	   	   	  	  <i class="glyphicon glyphicon-remove"></i>
       	   	   	   	  	</a>
       	   	   	   	  </td>
       	   	   	   </tr>
                    @endforeach


                    {{ csrf_field() }}
       	   	   	   <tr>
       	   	   	   	  <td colspan="6">
       	   	   	   	  	  <button class="but" type="button">
       	   	   	   	  	  	   继续购物
       	   	   	   	  	  </button>
       	   	   	   	  	  <button class="but" type="submit" >
       	   	   	   	  	  	   立即结算
       	   	   	   	  	  </button>
       	   	   	   	  </td>
       	   	   	   </tr>
       	   	   </table>
              </form>
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



