@extends('home.layout.home')


@section('title')
<title>智能手机配件在线购买</title>
@endsection


@section('css')
<link rel="stylesheet" href="/css/shouji.css">
@endsection


@section('js')
<script>
	$(function(){
		var	speed=0;
		if(speed>$(".shouji > ul > li > a").length-1){
			speed=0;
		}else{
			speed++;
		}
		alert(speed);
		$('.shouji > ul > li > a').hover(function(){
			$('.span1').eq(speed).show();
		},function(){
			$('.span1').eq(speed).hide();
		})
	})
</script>
@endsection

@section('center')
<section>
	<div class="container-fluid" style="min-height: 500px;">
		<div class="container">
			<div class="col-xs-12 shouji">
				<ul class="list-unstyle list-inline">
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
					    </a>
					    <span class="span1"></span>
				    </li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>保护壳</p>
					</a></li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
					</a></li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
					</a></li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
					</a></li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
					</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


@endsection