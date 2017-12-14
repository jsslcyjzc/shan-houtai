@extends('home.layout.home')

@section('title')
<title>抢先布局5G+AI</title>
@endsection


@section('center')
<div class="container" style="min-height: 1500px;padding: 0px;">
	<div class="col-xs-12" style="height: 300px;background-image: url(/image/xinwen1.png);background-repeat: no-repeat;">
         <h2>News</h2>
	     <p>首页-新闻</p>
	</div>
	<style>
		.col-xs-12 h2{
			color: #fff;
			font-size: 50px;
			text-align: center;
			margin-top: 100px;
		}
		.col-xs-12 p{
			font-size: 15px;
			color: #fff;
			text-align: center;
		}

	</style>
	<div class="col-xs-7" style="min-height: 600px;margin-left: -20px;">
		<div class="col-md-12 col-md-offset-1" style="border: 1px solid #ece8e8; margin: 10px; margin-top: 20px;width: 800px;min-height: 600px;">
			<h3 style="text-indent: 15px;margin-top: 30px;">{!!$articles->title!!}</h3>
			<h5 style="margin-top: -2px;text-indent: 15px;">作者 : {!!$articles->author!!} <span style="margin-left: 20px;">时间 : {!! $articles->time !!}</span></h5>
			<span style="width: 100%;height: 2px;background-color: #cccccc;display: inline-block;margin-bottom: 10px;"></span>
			<p class="col-md-11" style="background-color: #f3f3f3;min-height: 38px;font-size: 14px;color: #abaaaa; text-align: left;text-indent: 15px; line-height: 38px;margin-left: 15px;">{{ $articles->contop }}</p>

			<p style="word-wrap:break-word;font-size: 16px;margin-top: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!!$articles->content!!}</p>

          <hr>

            
            <ul class="list-unstyled">
            	<li><a href="/article/{{$recents -> id}}">上一篇 ：{!! $recents->title !!}</a></li>

            	<li><a href="/article/{{$articles -> id}}">下一篇 ：{!! $articles->title !!}</a></li>
            	
            </ul>
            

		</div>


	</div>
	<style>
		.xinwen2 h4,.xiangguan h4{
			margin-top:25px;
			color: #928d8d;
		}
		.xinwen2 .abc ul li a,.xiangguan .abc ul li a{
            color: #6c6a6a;
            font-size: 14px;
		}
		.xinwen2 .abc ul li,.xiangguan .abc ul li{
			line-height: 25px;
		}
		.xinwen2 .abc span a,.xiangguan .abc span a{
            color: #999;
            font-size: 15px;
		}
		.xinwen2 .abc span,.xiangguan .abc span{
			margin-bottom: 15px;
		}
	</style>
	<div class="col-md-3 col-md-offset-2" style="min-height: 1000px;">
		<div class="col-md-10 xinwen2" style="border:solid 1px #ece8e8; min-height: 300px; margin-top: 20px;">
			<h4>新闻</h4>
			<div class=" col-md-12 abc">
				<ul style="list-style: none;">
					<li><a href="/article/{{$recents -> id}}">{{ $recents->title }}</a></li>
					<li><a href="/article/{{$articles -> id}}">{{ $articles->title }}</a></li>
					<li><a href="/article/{{$recents -> id}}">{{ $recents->title }}</a></li>
				</ul>
				<span class="pull-right center-block"><a href="#">查看更多</a></span>
			</div>
		</div>
		<div class="col-md-10 xiangguan" style="border:solid 1px #ece8e8; min-height: 100px; margin-top: 120px; font-size: 17px;">
			<h4>相关链接</h4>
			<div class=" col-md-10 col-md-offset-1 abc">
				<ul style="list-style: none;">
					<li><a href="/home/index">努比亚商城</a></li>
					<li><a href="#">努比亚公益</a></li>
				</ul>
				<span class="pull-right center-block"><a href="#">查看更多</a></span>
			</div>
		</div>
		<div class="col-md-10 xiangguan" style="border:solid 1px #ece8e8; height: 200px; margin-top: 120px;font-size:16px;">
			<h4>媒体联系</h4>
			<div class=" col-md-10 col-md-offset-1 abc">
				<ul style="list-style: none;margin-left: -12px;width: 180px;margin-top: 20px;">
					<li style="font-size: 15px;color: #999;">联系方式：<a href="">123456789</a></li>
					<li style="font-size: 15px;color: #999;">作者：<a href="">某某某</a></li>
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