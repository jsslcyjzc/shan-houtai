@extends('home.layout.home')



@section('title')
	<title>关于我们——努比亚nubia智能手机官网</title>
@endsection


@section('center')
<!-- 主体开始 -->
<div class="col-md-12 news" style="background: #fff;">
	<div class="col-xs-12 ds" style="height: 300px;">
		<img src="holder.js/1349x300?bg=#654" alt="">
	</div>
	<div class="clearfix"></div>
	<!-- 左侧 -->
	<div class=" gong">
		<div class="col-md-6 col-md-offset-1 lun">
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
		<div class="col-md-7 new_box">
			<h3><a href="#">为贵州的孩子筑一个梦想</a></h3>
			<p>作者&nbsp;:&nbsp;努比亚公益&nbsp;&nbsp;&nbsp;&nbsp;发布时间&nbsp;:&nbsp;2017-06-20</p>
			<div class="entry">
				<a href="#">
					<img src="holder.js/100px370?bg=#04fced" alt="">
				</a>
			</div>
			<p class="biao">公益与摄影相结合,努比亚公益带你走进黔南<a href="#">[查看全文]</a></p>
		</div>
	</div>
	<!-- 右侧 -->
</div>
<!-- 主体结束 -->
@stop


@section('css')
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="stylesheet" href="/Home/css/bootstrap.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/bootstrap.min.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/index.css" type="text/css"  media="all">
	<script src="/Home/js/.min.js"></script>
@stop