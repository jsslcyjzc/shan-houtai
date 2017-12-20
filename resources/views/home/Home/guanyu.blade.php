@extends('home.layout.home')


@section('title')
	<title>关于我们——努比亚nubia智能手机官网</title>
@endsection

@section('center')
<!-- 主体开始 -->
<div class="col-md-12" style="background: #fff;">
	<!-- 左侧 -->
	<div class="col-md-3 services">
		<a href="/index">首页</a>&nbsp;&nbsp;/&nbsp;
		<a href="/Home/lianxi">关于我们</a>&nbsp;&nbsp;/&nbsp;
		<a href="/Home/liaojie">了解努比亚</a>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-2 navs">
		<ul>
			<li class="actives"><a href="/Home/liaojie">了解努比亚</a></li>
			<li><a href="/Home/lianxi">联系努比亚</a></li>
			<li><a href="/Home/pinpai">品牌大事件</a></li>
		</ul>
	</div>
	<!-- 右侧 -->
	<div class="col-md-9 jian">
		@foreach($guanyu as $k=>$v)
		@if($k == 0)
		<div class="jie">{{ $v->title }}</div>
		<div class="pins">{!! $guanyu[1]->content !!}</div>
		@endif
	    @endforeach		


		<div class="jie">{{ $guanyu[2]->title }}</div>
		<div class="pins">{!! $guanyu[3]->content !!}</div>


		<div class="jie">{{ $guanyu[4]->title }}</div>
		<div class="pin">{!! $guanyu[5]->content !!}</div>


		<div class="jie">{{ $guanyu[6]->title }}</div>
		<div class="pais">{{ $guanyu[7]->title }}</div>
		<div class="pins">{!! $guanyu[8]->content !!}</div>

		<div class="pais">{{ $guanyu[9]->title }}</div>
		<div class="pins">{!! $guanyu[10]->content !!}</div>


		<div class="jie">{{ $guanyu[11]->title }}</div>
		<div class="pais">{{ $guanyu[12]->title }}</div>
		<div class="pin">{!! $guanyu[13]->content !!}</div>

		<div class="pais">{{ $guanyu[14]->title }}</div>
		<div class="pin">{!! $guanyu[15]->content !!}</div>

		<div class="pais">{{ $guanyu[16]->title }}</div>
		<div class="pinss">{!! $guanyu[17]->content !!}</div>

		<div class="pais">{{ $guanyu[18]->title }}</div>
		<div class="pin">{!! $guanyu[19]->content !!}</div>

		<div class="pais">{{ $guanyu[20]->title }}</div>
		<div class="pins">{!! $guanyu[21]->content !!}</div>


        <div class="jie">{{ $guanyu[22]->title }}</div>
        <div class="Z">{{ $guanyu[23]->title }}</div>

		<div class="pais">{{ $guanyu[24]->title }}</div>
		<div class="pin">{!! $guanyu[25]->content !!}</div>

		<div class="pais">{{ $guanyu[26]->title }}</div>
		<div class="pi">{!! $guanyu[27]->content !!}</div>

		<div class="pais">{{ $guanyu[28]->title }}</div>
		<div class="pi">{!! $guanyu[29]->content !!}</div>

		<div class="pais">{{ $guanyu[30]->title }}</div>
		<div class="pi">{!! $guanyu[31]->content !!}</div>

		<div class="pais">{{ $guanyu[32]->title }}</div>
		<div class="pi">{!! $guanyu[33]->content !!}</div>

		<div class="pais">{{ $guanyu[34]->title }}</div>
		<div class="pin">{!! $guanyu[35]->content !!}</div>

		<div class="pais">{{ $guanyu[36]->title }}</div>
		<div class="pi">{!! $guanyu[37]->content !!}</div>

		<div class="pais">{{ $guanyu[38]->title }}</div>
		<div class="pin">{!! $guanyu[39]->content !!}</div>

		<div class="pais">{{ $guanyu[40]->title }}</div>
		<div class="pi">{!! $guanyu[41]->content !!}</div>

		<div class="pais">{{ $guanyu[42]->title }}</div>
		<div class="pi">{!! $guanyu[43]->content !!}</div>

		<div class="pais">{{ $guanyu[44]->title }}</div>
		<div class="pi">{!! $guanyu[45]->content !!}</div>

		<div class="Z">{!! $guanyu[46]->content !!}</div>

		<div class="jie">{{ $guanyu[47]->title }}</div>
		<div class="pins">{!! $guanyu[48]->content !!}</div>


	</div>
</div>
<!-- 主体结束 -->
@stop

@section('css')
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="stylesheet" href="/Home/css/bootstrap.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/bootstrap.min.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/index.css" type="text/css"  media="all">
	<script src="/Home/js/holder.min.js"></script>
@stop

