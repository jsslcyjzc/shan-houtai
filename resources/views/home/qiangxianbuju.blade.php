@extends('home.layout.home')

@section('title')
<title>抢先布局5G+AI</title>
@endsection


@section('center')
<div style="min-height: 1500px;">
	<div class="col-md-12 bg-info" style="height: 300px; width: 100%;">
	<h2 style="line-height: 300px; text-align: center;">首页·新闻</h2>
	</div>
	<div class="col-md-7 col-md-offset-1" style="height: 600px;">
		<div class="col-md-10 col-md-offset-1">
			<h3>{!!$articles->title!!}</h3>
			<h6>作者 时间</h6>
			<p class="col-md-12" style="background-color: #f3f3f3;height: 38px;font-size: 16px; text-align: center; line-height: 38px;">抢先布局5G并深度融合AI无边框全面屏技术，努比亚将再次颠覆移动互联的智能</p>

			<p style="word-wrap:break-word;font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!!$articles->content!!}</p>
		</div>

		<div class="col-md-6 col-md-offset-2">
			<img src="{{$articles->pic}}" alt="" width="500px" height="300px">
			<p style="text-align: center;">{{$articles->title}}</p>
		</div>

		<div class="col-md-10 col-md-offset-1">
			<h3>{!!$articles->title!!}</h3>
			<h6>作者 时间</h6>
			<p class="col-md-12" style="background-color: #f3f3f3;height: 38px;font-size: 16px; text-align: center; line-height: 38px;">抢先布局5G并深度融合AI无边框全面屏技术，努比亚将再次颠覆移动互联的智能</p>

			<p style="word-wrap:break-word;font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!!$articles->content!!}</p>
		</div>

		<div class="col-md-6 col-md-offset-2">
			<img src="{{$articles->pic}}" alt="">
			<p style="text-align: center;">{{$articles->title}}</p>
		</div>

	</div>
	
	<div class="col-md-3 col-md-offset-1" style="height: 1000px;">
		<div class="col-md-10 " style="border:solid 1px #000; height: 300px; margin-top: 20px;">
			<h4>新闻</h4>
			<div class=" col-md-10 col-md-offset-1 abc">
				<ul style="list-style: none;">
					<li><a href="#">今天我们又出新手机了</a></li>
					<li><a href="#">今天我们又出新手机了</a></li>
					<li><a href="#">今天我们又出新手机了</a></li>
					<li><a href="#">今天我们又出新手机了</a></li>
					<li><a href="#">今天我们又出新手机了</a></li>
					<li><a href="#">今天我们又出新手机了</a></li>
				</ul>
				<span class="pull-right center-block"><a href="#">查看更多</a></span>
			</div>
		</div>
		<div class="col-md-10 " style="border:solid 1px #000; height: 200px; margin-top: 120px; font-size: 17px;">
			<h4>相关链接</h4>
			<div class=" col-md-10 col-md-offset-1 abc">
				<ul style="list-style: none;">
					<li><a href="/home/index">努比亚商城</a></li>
					<li><a href="#">努比亚公益</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-10 " style="border:solid 1px #000; height: 200px; margin-top: 120px;font-size:16px;">
			<h4>媒体联系</h4>
			<div class=" col-md-10 col-md-offset-1 abc">
				<ul style="list-style: none;">
					<li>联系方式：123456789</li>
					<li>作者：某某某</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection

@section('css')
<style>
  .abc ul li a:hover{color: red;}
  .abc ul li{line-height: 30px;}
</style>
@stop