@extends('home.layout.home')



@section('title')
	<title>努比亚公益基金会——努比亚nubia智能手机官网</title>
@endsection


@section('center')
<!-- 主体开始 -->
<div class="col-md-12 news" style="background: #fff;">
	<div class="container">
		<div class="col-xs-12 ds" style="height: 300px;">
			@foreach($gongyi as $k=>$v)
			@if($k == 0)
			<img src="{{ $v->images }}" alt="" style="width: 100%; height: 300px;">
			@endif
			@endforeach
		</div>
    </div>
	<div class="clearfix"></div>
	<!-- 左侧 -->
	<div class="col-md-8 gong">
		<div class="col-md-9 col-md-offset-1 lun">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				</ol>
			    <!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active" style="margin-top: 20px;">
					    <a href="">
					    	<img src="holder.js/100px360?theme=sky" alt="...">
					        <div class="carousel-caption"></div>
					    </a>
					</div>
					<div class="item" style="margin-top: 20px;">
						<a href="">
						    <img src="holder.js/100px360?bg=#fc029b" alt="...">
						    <div class="carousel-caption"></div>
					    </a>
					</div>
					<div class="item" style="margin-top: 20px;">
						<a href="">
						    <img src="holder.js/100px360?bg=#e64ff8" alt="...">
						    <div class="carousel-caption"></div>
					    </a>
					</div>
					<div class="item" style="margin-top: 20px;">
						<a href="">
						    <img src="holder.js/100px360?bg=#46f9f7" alt="...">
						    <div class="carousel-caption"></div>
					    </a>
					</div>
			    </div>
			    <!-- Controls -->
			    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-md-10 new_box">
			<div class="h3"><a href="#">{{ $gongyi[1]->title }}</a></div>
			<div class="p">作者&nbsp;:&nbsp;{{ $gongyi[1]->author }}&nbsp;&nbsp;&nbsp;&nbsp;发布时间&nbsp;:&nbsp;{{ $gongyi[1]->time }}</div>
			<div class="entry">
				<a href="#">
					<img src="{{ $gongyi[1]->images }}" alt="" width="100%" height="370">
				</a>
			</div>
			<div class="biao">{!! $gongyi[1]->content !!}<a href="#">&nbsp;[查看全文]</a></div>
		</div>
		<div class="col-md-10 new_box">
			<div class="h3"><a href="#">{{ $gongyi[2]->title }}</a></div>
			<div class="p">作者&nbsp;:&nbsp;{{ $gongyi[2]->author }}&nbsp;&nbsp;&nbsp;&nbsp;发布时间&nbsp;:&nbsp;{{ $gongyi[2]->time }}</div>
			<div class="entry">
				<a href="#">
					<img src="{{ $gongyi[2]->images }}" alt="" width="100%" height="370">
				</a>
			</div>
			<div class="biao">{!! $gongyi[2]->content !!}<a href="#">&nbsp;[查看全文]</a></div>
		</div>
		<div class="col-md-10 new_box">
			<div class="h3"><a href="#">{{ $gongyi[3]->title }}</a></div>
			<div class="p">作者&nbsp;:&nbsp;{{ $gongyi[3]->author }}&nbsp;&nbsp;&nbsp;&nbsp;发布时间&nbsp;:&nbsp;{{ $gongyi[3]->time }}</div>
			<div class="entry">
				<a href="#">
					<img src="{{ $gongyi[3]->images }}" alt="" width="100%" height="370">
				</a>
			</div>
			<div class="biao">{!! $gongyi[3]->content !!}<a href="#">&nbsp;[查看全文]</a></div>
		</div>
		<div class="col-md-10 new_box">
			<div class="h3"><a href="#">{{ $gongyi[4]->title }}</a></div>
			<div class="p">作者&nbsp;:&nbsp;{{ $gongyi[4]->author }}&nbsp;&nbsp;&nbsp;&nbsp;发布时间&nbsp;:&nbsp;{{ $gongyi[4]->time }}</div>
			<div class="entry">
				<a href="#">
					<img src="{{ $gongyi[4]->images }}" alt="" width="100%" height="370">
				</a>
			</div>
			<div class="biao">{!! $gongyi[4]->content !!}<a href="#">&nbsp;[查看全文]</a></div>
		</div>
		<div class="col-md-10 new_box">
			<div class="h3"><a href="#">{{ $gongyi[5]->title }}</a></div>
			<div class="p">作者&nbsp;:&nbsp;{{ $gongyi[5]->title }}&nbsp;&nbsp;&nbsp;&nbsp;发布时间&nbsp;:&nbsp;{{ $gongyi[5]->time }}</div>
			<div class="entry">
				<a href="#">
					<img src="{{ $gongyi[5]->images }}" alt="" width="100%" height="370">
				</a>
			</div>
			<div class="biao">{!! $gongyi[5]->content !!}<a href="#">&nbsp;[查看全文]</a></div>
		</div>
        <div class="col-md-10 pagelist_box">
        	<nav style="margin-left: 230px; margin-top: -12px;">
				<ul class="pagination pagination-lg">
					<li>
						<a href="#" aria-label="Previous">
		                    <span aria-hidden="true">&laquo;</span>
		                </a>
                    </li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li>
				      	<a href="#" aria-label="Next">
				        	<span aria-hidden="true">&raquo;</span>
				      	</a>
				    </li>
				</ul>
			</nav>
        </div>
	</div>
	<!-- 右侧 -->
	<div class="col-md-3 news_boxl" style="margin-left: 50px;">
		<div class="boxls">
			<div class="h3">{{ $gongyi[6]->title }}</div>
			<div class="P">{!! $gongyi[6]->content !!}</div>
		</div>
		<div class="oxls">
			<ul>
				<div class="h3">{{ $gongyi[7]->title }}</div>
				<li class="xinwen">
					<a href="#">{{ $gongyi[7]->title }}</a>
					<img src="{{ $gongyi[7]->images }}" alt="" width="100%" height="140">
					<div class="pp">{!! $gongyi[7]->content !!}
                        <a href="#">[详细]</a>
                    </div>
				</li>
				<li class="xinwen">
					<a href="#">{{ $gongyi[7]->title }}</a>
					<img src="{{ $gongyi[7]->images }}" alt="" width="100%" height="140">
					<div class="pp">{!! $gongyi[7]->content !!}
                        <a href="#">[详细]</a>
                    </div>
				</li>
				<li class="xinwen">
					<a href="#">{{ $gongyi[7]->title }}</a>
					<img src="{{ $gongyi[7]->images }}" alt="" width="100%" height="140">
					<div class="pp">{!! $gongyi[7]->content !!}
                        <a href="#">[详细]</a>
                    </div>
				</li>
				<li class="xinwen">
					<a href="#">{{ $gongyi[7]->title }}</a>
					<img src="{{ $gongyi[7]->images }}" alt="" width="100%" height="140">
					<div class="pp">{!! $gongyi[7]->content !!}
                        <a href="#">[详细]</a>
                    </div>
				</li>
				<li class="xinwen">
					<a href="#">{{ $gongyi[7]->title }}</a>
					<img src="{{ $gongyi[7]->images }}" alt="" width="100%" height="140">
					<div class="pp">{!! $gongyi[7]->content !!}
                        <a href="#">[详细]</a>
                    </div>
				</li>
			</ul>
		</div>
		<div class="bxls">
			<div class="h3">{{ $gongyi[8]->title }}&nbsp;:&nbsp;</div>
			<ul>
				<li><a href="#">联系方式&nbsp;:&nbsp;foundation@nubia.cn</a></li>
				<li class="li1"><a href="#">联系人&nbsp;:&nbsp;侯先生</a></li>
			</ul>
			<div class="container">
			<div class="meta">
				<p class="lians"><a href="#">联系我们</a></p>
				<img src="{{ $gongyi[8]->images }}" alt="" style="margin-top: 10px; margin-left: -25px;" width="160px" height="160px">
				<p class="guanzhu">欢迎关注“努比亚公益”微信公众号</p>
			</div>
			</div>
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
	<script type="text/javascript" src="/Home/js/holder.min.js"></script>
@stop