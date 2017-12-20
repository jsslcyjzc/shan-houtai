@extends('home.layout.home')

@section('title')
<title>收获地址——努比亚nubia智能手机官网</title>
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
        @include('layout.creat-menu')
</div>        
<div class="con">
    <div class="address memberboard">
        <div class="hd"> <h2 style="height: 35px;line-height: 35px;"> <span class="ico"></span> 收获地址 </h2> </div>
        <!-- <div class="welcome"><p> <span class="name">n4dnf57jw</span> ，欢迎您回来！ </p></div> -->
    </div>
    <div class="address user-orders">
        @foreach($addresses as $k=>$v)
        <div class="col-xs-4" style="height:150px;border: 1px solid #666;padding: 0px;margin-right: 10px;margin-bottom: 15px; ">
            <div class="col-xs-10 col-md-offset-1" style="height: 140px;margin-top: 4px;padding: 0px;">
                 <h4>{{$v->name}}</h4>
                 <div class="col-xs-12" style="height: 1px;background-color: #999;"></div>
                 <p>{{$v->phone}}</p>
                 <div class="col-xs-12" style="height: 1px;background-color: #999;"></div>
                 <p>{{$v->pname}} {{$v->cname}} {{$v->xname}} </p>
                 <div class="col-xs-12" style="height: 1px;background-color: #999;"></div>
                 <p>{{$v->detail}}</p> 
            </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
        <div class="col-xs-3">
            <a href="" class="btn btn-default pull-right normal">添加收货地址</a>
        </div>


            <div class="clearfix"></div>
            <div class="ten"></div>
            <div class="ten"></div>
            <hr>
             


             <style>
                 label{
                  font-size: 15px;
                 }
             </style>
            <div class="col-md-6 col-md-offset-3">
            <form action="/address" method="post">
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
                <textarea name="detail" id="" style="width: 500px;height: 100px;"></textarea>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="1" name="is_default" style="display: block;border: 1px solid #999;margin-left: 4px;">是否为默认收货地址
                </label>
              </div>
                {{csrf_field()}}
              <button type="submit" class="btn btn-default col-xs-3" style="margin-bottom: 30px;">添加</button>
            </form>
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
   .glyphicon-shopping-cart{
        margin-bottom: 30px;
   }
</style>
@stop



@section('js')
<script>
    // alert(4);
  //三级联动 
    $(function(){
      function init() {
          //
          $.ajax({
              type:'get',
              url: '/getadd',
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
              url: '/getadd',
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
              url: '/getadd',
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
@endsection