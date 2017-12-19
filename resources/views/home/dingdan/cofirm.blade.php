@extends('home.layout.home')

@section('title')
<title>确认订单</title>
@endsection

<script type="text/javascript" src="/js/jquery-3.1.0.js"></script>

@section('css')
<link rel="stylesheet" href="/css/gouwu.css">
<link rel="stylesheet" href="/css/qrdd.css">
@endsection
<style type="text/css">
  textarea{
    width: 300px;
    min-height: 50px;
  }
  .ten{
    height: 20px;
  }
</style>

@section('center')
<script type="text/javascript">
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
  
     //三级联动 
    $(function(){
      function init() {
          //
          $.ajax({
              type:'get',
              url: '/getarea',
              dataType:'json',
              data: {pid:0},
              success: function(data){
                  
                  // console.log(data);
                      for(var i=0;i<data.length;i++){
                    var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                    //将option插入到省的select中
                    $('select[name=province]').append(option);
                }
              }
          })
      }
      init();

          $('select[name=province]').change(function(){
          $('select[name=city]').html('<option value="">请选择</option>')
          //获取当前省的id
          var id = $(this).val();
          //发送ajax获取当前省所对应的市的信息
          $.ajax({
              type:'get',
              url: '/getarea',
              dataType:'json',
              data: {pid:id},
              success: function(data){
                  for(var i=0;i<data.length;i++){
                      var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                      //将option插入到省的select中
                      $('select[name=city]').append(option);
                  }
              }
          })
      });

      $('select[name=city]').change(function(){
          $('select[name=xian]').html('<option value="">请选择</option>')
          //获取当前省的id
          var id = $(this).val();
          //发送ajax获取当前省所对应的市的信息
          $.ajax({
              type:'get',
              url: '/getarea',
              dataType:'json',
              data: {pid:id},
              success: function(data){
                  for(var i=0;i<data.length;i++){
                      var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                      //将option插入到省的select中
                      $('select[name=xian]').append(option);
                  }
              }
          })
      });
    })




</script>




<section>
<div class="contianer-fluid" id="gouwu" style="min-height: 700px;">
       <div class="container" style="padding: 0px;">
       	   <div class="col-xs-12">
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
           	   	   <div class="container">
                  <div class="row">
                      <div class="col-md-10">
                              
                          @foreach($addresses as $k=>$v)
                          <div class="col-md-4 m-10" style="border: 1px dashed #000;margin-top: 30px;margin-left: 20px;">
                              <div class="address-item">
                              <h4>{{$v->name}}</h4>
                              <p>{{$v->phone}}</p>
                              <p>{{$v->pname}} {{$v->cname}} {{$v->xname}} {{$v->detail}}</p>
                              </div>
                          </div>
                          @endforeach
                      </div>
                      <div class="col-md-11" style="min-height: 50px;margin-top: 40px;padding: 0px;">

                           <div>
                            <form action="/zhifu">
                               <table id="shoptable">
                                 <tr>
                                    <th>共<span>1</span>件商品</th>
                                 </tr>
                                 <tr>
                                    <td>商品</td>
                                    <td>商品名称</td>
                                    <td>单价</td>
                                    <td>数量</td>
                                    <td>操作</td>
                                 </tr>
                                  @foreach($goods as $k=>$v)
                                 <tr>
                                    <td>
                                       <input type="checkbox" style="height: 18px;width: 18px;margin-top: 40px;" value="{{$v->id}}" name="data[{{$v->id}}][id]">
                                       <img src="{{$v->pic}}" alt="" width="50" height="100">
                                    </td>
                                    <td style="text-align: left;">
                                       <a href="" style="color: #000000;">&nbsp;&nbsp;
                                        {{$v->detail->title}}
                                       </a>
                                    </td>
                                    <td>
                                       ¥{{ $v->detail->price }}
                                    </td>
                                    <td>
                                       <input type="text" style="width:20%" name="data[{{$v->id}}][num]" value="{{$v->num}}">
                                    </td>
                                    <td>
                                      <a href="/gwc" class="remove-item del" cid="{{$v->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove from cart" style="color: #838383;">
                                        <i class="glyphicon glyphicon-remove"></i>
                                      </a>
                                    </td>
                                 </tr>
                                  @endforeach
                                 <tr>
                                    <td colspan="6">

                                        {{ csrf_field() }}
                                        <button class="but" type="submit" style="margin-top: 7px;">
                                             立即结算
                                        </button>
                                    </td>
                                 </tr>
                             </table>



                          
                          <div class="clearfix"></div>
                          <div class="ten"></div>
                          <div class="ten"></div>
                          <hr>

                          <div class="col-md-6 col-md-offset-3">
                          <form action="/dingdan" method="post">
                            <div class="form-group">
                              <label for="exampleInputEmail1">姓名</label>
                              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">手机号</label>
                              <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">收货地址</label>
                              <div class="clearfix"></div>
                              <div class='col-md-4'>
                                  <select name="province" id="" class="form-control ">
                                      <option value="">请选择</option>
                                  </select>
                              </div>
                              <div class='col-md-4'>
                                  <select name="city" id="" class="form-control ">
                                      <option value="">请选择</option>
                                  </select>
                              </div>
                              <div class='col-md-4'>
                                  <select name="xian" id="" class="form-control ">
                                      <option value="">请选择</option>
                                  </select>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group" style="margin-top: 20px;">
                              <label for="exampleInputEmail1">详细地址</label>
                              <div class="clearfix"></div>
                              <textarea name="detail" id=""></textarea>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value="1" name="is_default"> 是否为默认收货地址
                              </label>
                            </div>
                              {{csrf_field()}}
                            <button class="btn btn-default" style="margin-top: 20px;">Submit</button>
                            <div class="clearfix"></div>
                            
                          </form>
                           </div>
                      </div>
                  </div>
              </div>

	   	   	  </div>
            
	   	   </div>

      </div>

    </div>
</div>

</section>

@stop
