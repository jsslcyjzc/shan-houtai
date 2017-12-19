@extends('home.layout.home')

@section('title')
	<title>支付页面</title>
@stop

<link rel="stylesheet" type="text/css" href="css/zf.css">
<link rel="stylesheet" type="text/css" href="css/qrdd.css">

<style type="text/css">
  

  .active{
    border:solid 1px blue;
  }

  table tr td{
    text-align: center;
  }
</style>

@section('center')
<section>
	<div class="container" id="zf">
    <div class="shdz_t col-xs-12" style="margin-top: 30px;">
                    我的收货地址
                  </div>
                    <div class="col-md-9">
                            
                        @foreach($addresses as $k=>$v)
                        <div class="col-md-4 m-10" style="border:1px dashed #000; margin-left: 20px;margin-top: 15px;margin-bottom: 20px;">
                            <div class="goods-item" aid="{{$v->id}}">
                            <h4>{{$v->name}}</h4>
                            <p>{{$v->phone}}</p>
                            <p>{{$v->pname}}{{$v->cname}}{{$v->xian}}{{$v->detail}}</p>
                            </div>
                        </div>
                        @endforeach
                      <input type="hidden" name="address_id">

		            <div class="col-xs-12 spqd">
                  <div class="shdz_t col-xs-12" style="min-width: 1130px;margin-left: -98px;">
                    商品清单
                  </div>
                  <div class="col-xs-12 spqd_b">
                    <table style="margin-top: 0px;margin-left: -50px;">
                         <tr>
                                     <th style="width: 300px;">商品名称</th>          
                                     <th style="width: 180px;">单价</th>          
                                     <th style="width: 180px;">数量</th>          
                                     <th style="width: 180px;">小计</th>          
                                 </tr>
                                 @foreach($goods as $k=>$v)
                                 <tr style="height: 175px;">
                                     <td>
                                       <div class="xiaon" style="margin-left: 170px;">
                                         <img src="{{$v->pic}}" alt="" width="70" height="100">
                                       </div>
                                       <div class="titles">
                                          <p><a href="">{{$v->detail->title}}</a></p>
                                          <p><a href="" style="font-size: 12px;color: #b5b5b5;">[赠品]Z17minS防震保护套(透明)</a></p>
                                       </div>
                                     </td>
                                     <td>¥<span>{{$v->detail->price}}</span></td>
                                     <td>{{$v->num}}</td>
                                     <td>¥<span></span></td>
                                 </tr>
                                 @endforeach
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
            </div>
	</div>
</section>
@stop

@section('js')
<script type="text/javascript">
  $('.goods-item').hover(function(){
       $(this).addClass('active');
  },function(){
       $(this).removeClass('active');
  })
</script>
@stop