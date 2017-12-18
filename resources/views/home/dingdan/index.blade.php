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
<div class="contianer-fluid" id="gouwu">
       <div class="container" style="padding: 0px;">
           <div class="col-xs-12">
             <form action="">
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
              <div class="container">
                <div class="row">         
                  <div class="shdz_t" style="margin-top: 30px;">
                    我的收货地址
                  </div>
                    <div class="col-md-9">
                        <h3 class="pull-left">收货地址</h3>
                        <a href="/dingdan/create" class="btn btn-default pull-right normal">添加收货地址</a>
                            
                        @foreach($addresses as $k=>$v)
                        <div class="col-md-4 m-10">
                            <div class="address-item">
                            <h4>{{$v->name}}</h4>
                            <p>{{$v->phone}}</p>
                            <p>{{$v->pname}}{{$v->cname}}{{$v->xian}}{{$v->detail}}</p>
                            </div>
                        </div>
                        @endforeach



                        
                        <div class="clearfix"></div>
                        <div class="ten"></div>
                        <div class="ten"></div>
                        <hr>

                        <div class="col-md-6 col-md-offset-3">
                        <form action="/dingdan" method="get">
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
                          <div class="form-group" style="margin-top: 30px;">
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
                          <button class="btn btn-default" style="margin-bottom: 30px;">Submit</button>
                        </form>
                        </div>
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
                                          {{csrf_field()}}
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
