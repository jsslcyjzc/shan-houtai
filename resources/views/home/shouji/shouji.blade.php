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
		$('.shouji > ul > li > a').hover(function(){
			$(this).find(".span1").show();
		},function(){
			$(this).find(".span1").hide();
		})
	})


	$(function(){
		$(".tan > a").hover(function(){
			$(this).find('img').stop().animate({
				width:"550px",
				height:"250px",
				top:"-15px",
				left:"-10px"

				},1200)
			$(this).find("li:last-child button").css("border"," 1px solid #ff370e");
			$(this).find("li:last-child button").css("color","#ff370e");
		},function(){
			$(this).find('img').stop().animate({
				width:"525px",
				height:"240px",
				top:"0px",
				left:"0px"
			},1200)
			$(this).find("li:last-child button").css("border"," 1px solid #e4e4e4");
			$(this).find("li:last-child button").css("color","#666666");
		})
	})



	$(function(){
        
		$(".tutu > a").hover(function(){
			$(this).find('img').stop().animate({
				width:"100px",
				height:"195px",
				top:"-5px",
				left:"-5px"
				},500)
			$(this).find("li:first-child").css("color","#ff370e");
		},function(){
			$(this).find('img').stop().animate({
				width:"95px",
				height:"185px",
				top:"0px",
				left:"0px"
			},500)
			$(this).find("li:first-child").css("color","#666");
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
						<span class="span1"></span>
					    </a>
					    
				    </li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>保护壳</p>
						<span class="span1"></span>
					    </a>
					    
				    </li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
						<span class="span1"></span>
						</a>
						
					</li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
						<span class="span1"></span>
						</a>
						
					</li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
						<span class="span1"></span>
						</a>
						
					</li>
					<li><a href="">
						<img src="holder.js/60x80" alt="">
						<p>耳机</p>
						<span class="span1"></span>
						</a>
						
					</li>
				</ul>
			</div>
			<div class="col-xs-12 tupian">
				<img src="holder.js/100px450" alt="" width="100%" height="450">
			</div>
			<div class="col-xs-12 tan">
				<a href="">
					<ul class="list-unstyled">
						<li>
							<div class="fangda">
							    <img src="/image/erji1.png" alt="">
							</div>
						</li>
						<li>
							<ol class="list-unstyled">
								<li>努比亚圈铁耳机</li>
								<li>动画+动铁 双发声单元</li>
								<li>
									<button>一探究竟</button>
								</li>
							</ol>
						</li>
					</ul>
				</a>
				<a href="">
					<ul class="list-unstyled">
						<li>
							<div class="fangda">
							    <img src="/image/erji1.png" alt="">
							</div>
						</li>
						<li>
							<ol class="list-unstyled">
								<li>努比亚圈铁耳机</li>
								<li>动画+动铁 双发声单元</li>
								<li>
									<button>一探究竟</button>
								</li>
							</ol>
						</li>
					</ul>
				</a>
			</div>
			<div class="col-xs-12 fenlei">
				<ul class="list-unstyled list-inline">
					<li><a href="">所有分类</a></li>
					<li>|</li>
					<li><a href="">保护壳</a></li>
					<li>|</li>
					<li><a href="">皮套</a></li>
					<li>|</li>
					<li><a href="">贴膜</a></li>
					<li>|</li>
					<li><a href="">耳机</a></li>
					<li>|</li>
					<li><a href="">数据线/充电器</a></li>
					<li>|</li>
					<li><a href="">周边产品</a></li>
				</ul>
				<div class="col-xs-12 xian" ></div>
				<ul class="list-unstyled list-inline">
					<li><a href="">所有分类</a></li>
					<li>|</li>
					<li><a href="">保护壳</a></li>
					<li>|</li>
					<li><a href="">皮套</a></li>
					<li>|</li>
					<li><a href="">贴膜</a></li>
					<li>|</li>
					<li><a href="">耳机</a></li>
					<li>|</li>
					<li><a href="">数据线/充电器</a></li>
					<li>|</li>
					<li><a href="">周边产品</a></li>
				</ul>
				<div class="col-xs-12 xian" ></div>
				<ul class="list-unstyled list-inline">
					<li><a href="">所有分类</a></li>
					<li>|</li>
					<li><a href="">保护壳</a></li>
					<li>|</li>
					<li><a href="">皮套</a></li>
					<li>|</li>
					<li><a href="">贴膜</a></li>
					<li>|</li>
					<li><a href="">耳机</a></li>
					<li>|</li>
					<li><a href="">数据线/充电器</a></li>
					<li>|</li>
					<li><a href="">周边产品</a></li>
				</ul>

				<div class="col-xs-12" style="padding: 0px;margin-top: 40px;">
					@foreach($goods as $k=>$v)
					<div class="tutu col-xs-3">
						<a href="/goods/{{$v->id}}">
						<div class="imgs">
							<img src="{{$v->pic}}" alt="">
						</div>
						<ul class="list-unstyled">
							<li>{{$v->title}}</li>
							<li>¥<span>{{$v->price}}</span></li>
						</ul>
						</a>
					</div>
					@endforeach
				</div>
			
			</div>

		</div>
	</div>
</section>


@endsection


@section('footer')
<footer>
	<div class="container-fluid" style="margin-top: 100px;">
		<div class="container foot">
			<ul class="list-unstyled">
				<li><img src="/image/banquan1.png" alt=""></li>
				<li class="col-xs-12 col-xs-offset-5">
					<p class="glyphicon glyphicon-cloud"></p>
					<p class="glyphicon glyphicon-book"></p>
					<p class="glyphicon glyphicon-comment"></p>
				</li>
				<li class="col-xs-12" style="margin-top: 5px;">2012-2017 努比亚技术有限公司 版权所有 <span><a href="">粤ICP备10006213号-2</a></span>
				</li>
				<li class="col-xs-12" style="margin-top: 5px;">
					<img src="/image/gongshang.jpg" alt="" width="20" height="30">
					ICP经营许可证编号：粤B2-20120688 <span><a href=""><img src="/image/gongshang2.png" alt="">粤公网安备 44030502000309号</a></span>
				</li>
				<li>
					<a href="">加入我们</a>
					<i>-</i>
					<a href="">公益</a>
					<i>-</i>
					<a href="">星空之约</a>
					<i>-</i>
					<a href="">问题反馈</a>
					<i>-</i>
					<a href="">简体中文</a>
				</li>
			</ul>
		</div>
	</div>
</footer>
@endsection