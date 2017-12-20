@extends('home.layout.home')


@section('title')
	<title>联系我们——努比亚nubia智能手机官网</title>
@endsection

@section('center')
<!-- 主体开始 -->
<div class="col-md-12" style="background: #fff;">
	<!-- 左侧 -->
	<div class="col-md-3 ser_con">
		<a href="/index">首页</a>&nbsp;&nbsp;/&nbsp;
		<a href="/Home/lianxi">关于我们</a>&nbsp;&nbsp;/&nbsp;
		<a href="/Home/liaojie">了解努比亚</a>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-2 na">
		<ul>
			<li><a href="/Home/liaojie">了解努比亚</a></li>
			<li class="activ"><a href="#">联系努比亚</a></li>
			<li><a href="/Home/pinpai">品牌大事件</a></li>
		</ul>
	</div>
    <!-- 右侧 -->
    <div class="col-md-8 col-md-offset-1 tab_content">
    	@foreach($guanyu as $k=>$v)
		@if($k == 49)
    	<div class="kehu">{{ $v->title }}</div>
        <div class="nei">{!! $guanyu[50]->content !!}

        </div>
        @endif
	    @endforeach	

        <div class="hezuo">{{ $guanyu[51]->title }}</div>
        <div class="xian">{!! $guanyu[52]->content !!}
        	
	    </div>

	    <div class="gongguan">{{ $guanyu[53]->title }}</div>
        <div class="xiao">{!! $guanyu[54]->content !!}
        	
	    </div>
        
        <div class="yewu">{{ $guanyu[55]->title }}</div>
        <div class="b2c">{!! $guanyu[56]->content !!}
        	
	    </div>

	    <div class="kaifa">{{ $guanyu[57]->title }}</div>
        <div class="shiwu">{!! $guanyu[58]->content !!}
        	
	    </div>

	    <div class="zhishi">{{ $guanyu[59]->title }}</div>
        <div class="jubao">{!! $guanyu[60]->content !!}
        	
	    </div>

	    <div class="lianshi">{{ $guanyu[61]->title }}</div>
        <div class="shenzhen">{!! $guanyu[62]->content !!}
        	
	    </div>
    </div>
</div>
<!-- 主体结束 -->
@stop

@section('css')
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="stylesheet" href="/Home/css/bootstrap.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/bootstrap.min.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/index.css" type="text/css"  media="all">
	<script type ="text/javascript" src="/Home/js/holder.min.js"></script>
@stop