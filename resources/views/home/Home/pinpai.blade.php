@extends('home.layout.home')


@section('title')
	<title>努比亚大事件——努比亚nubia智能手机官网</title>
@endsection

@section('center')
<!-- 主体开始 -->
<div class="col-md-12" style="background: #fff;">
	<!-- 左侧 -->
	   <div class="col-md-3 ser_cons">
		<a href="/index">首页</a>&nbsp;&nbsp;/&nbsp;
		<a href="/Home/lianxi">关于我们</a>&nbsp;&nbsp;/&nbsp;
		<a href="/Home/liaojie">了解努比亚</a>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-2 nas">
		<ul>
			<li><a href="/Home/liaojie">了解努比亚</a></li>
			<li class="activs"><a href="/Home/lianxi">联系努比亚</a></li>
			<li><a href="/Home/pinpai">品牌大事件</a></li>
		</ul>
	</div>
	<!-- 右侧 -->
	<div class="col-md-8 col-md-offset-1 tab_contents">
        @foreach($guanyu as $k=>$v)
        @if($k == 63)
    	<div class="duans">{!! $v->content !!}</div>
        @endif
        @endforeach 

    	<div class="duans">{!! $guanyu[64]->content !!}</div>

    	<div class="duans">{!! $guanyu[65]->content !!}</div>

    	<div class="duans">{!! $guanyu[66]->content !!}</div>

    	<div class="duans">{!! $guanyu[67]->content !!}</div>

    	<div class="duans">{!! $guanyu[68]->content !!}</div>

    	<div class="duans">{!! $guanyu[69]->content !!}</div>

    	<div class="duans">{!! $guanyu[70]->content !!}</div>

    	<div class="duans">{!! $guanyu[71]->content !!}</div>

    	<div class="duans">{!! $guanyu[72]->content !!}</div>

    	<div class="duans">{!! $guanyu[73]->content !!}</div>

    	<div class="duans">{!! $guanyu[74]->content !!}</div>

    	<div class="duans">{!! $guanyu[75]->content !!}</div>

    	<div class="duans">{!! $guanyu[76]->content !!}</div>

    	<div class="duans">{!! $guanyu[77]->content !!}</div>

    	<div class="duans">{!! $guanyu[78]->content !!}</div>

    	<div class="duans">{!! $guanyu[79]->content !!}</div>

    	<div class="duans">{!! $guanyu[80]->content !!}</div>

    	<div class="duans">{!! $guanyu[81]->content !!}</div>

    	<div class="duans">{!! $guanyu[82]->content !!}</div>

    	<div class="duans">{!! $guanyu[83]->content !!}</div>

    	<div class="duans">{!! $guanyu[84]->content !!}</div>

    	<div class="duans">{!! $guanyu[85]->content !!}</div>

    	<div class="duans">{!! $guanyu[86]->content !!}</div>

    	<div class="duans">{!! $guanyu[87]->content !!}</div>

    	<div class="duans">{!! $guanyu[88]->content !!}</div>

    	<div class="duans">{!! $guanyu[89]->content !!}</div>

    	<div class="duans">{!! $guanyu[90]->content !!}</div>

        
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