@extends('home.layout.home')


@section('title')
	<title>努比亚nubia手机商城——努比亚nubia智能手机官网</title>
@endsection
		
@section('css')
<style type="text/css">
	.carousel-inner > .item > img, .carousel-inner > .item > a > img{
		width: 1340px;
		height: 500px;
	}
</style>
@stop

@section('center')
	<section>
	<!-- 轮播图 start -->
    <div class="container-fluid" style="height: 500px;">
         <div class="lunbotu" style="padding: 0px;">
         	 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox" style="margin-left: -10px;">
                    @foreach($banner as $k=>$v)
                    @if($k < 4)
				    <div class="@if($k==0) active @endif item">
				    	<a href="#">
					      <img src="{{$v->pic}}" style=" top: 0px;left: 0px;">
					      <div class="carousel-caption">
					      </div>
					    </a>
				    </div>
				    @endif
					@endforeach
			  </div>
			   
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="margin-left: -10px;">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-left:200px;"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="margin-right: 10px;">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<!-- 左侧边 start -->
			<div class="container zuocebian">
				<div class="col-xs-10 col-md-offset-2 zuo_one" style="height: 500px;">
					<ul class="list-unstyled">
						<li>
							<a href="">Z17s</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
						<li>
							<a href="">Z17miniS</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
						<li>
							<a href="">Z17</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
						<li>
							<a href="">Z17mini</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
						<li>
							<a href="">Z11</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
						<li>
							<a href="">M&N系列</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
						<li>
							<a href="">周边配件</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
						<li>
							<a href="">专属配件</a>
							<div class="cebian col-xs-12" >
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
								<div class="heijin">
									<a href="">
										<img src="/image/z173.jpg" alt="" class="pull-left" style="margin-top: 5px;">
										<p class="pull-left" style="margin-left: 15px;">Z17S黑金</p>
									</a>
								</div>
									
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 左侧边 end -->

        </div>
    </div>
	<!-- 轮播图 end -->
	<!-- 以旧换新 start -->
	<div class="container-fluid yijiu">
		<div class="container">
			<div class="col-xs-2 yijiu-left"  style="margin-right: 10px;">
				<div class="col-xs-4 lefts">
					<a href="">
					<ul class="list-unstyled">
						<li class="glyphicon glyphicon-refresh"></li>
						<li>以旧换新</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-4 lefts">
					<a href="">
					<ul class="list-unstyled">
						<li class="glyphicon glyphicon-cloud-upload"></li>
						<li>NB码通道</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-4 lefts">
					<a href="">
					<ul class="list-unstyled">
						<li class="glyphicon glyphicon-apple"></li>
						<li>意外保</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-4 lefts">
					<a href="">
					<ul class="list-unstyled">
						<li class="glyphicon glyphicon-chevron-up" style="line-height: 35px;text-indent: 3px;"></li>
						<li>真伪查询</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-4 lefts">
					<a href="">
					<ul class="list-unstyled">
						<li class="glyphicon glyphicon-map-marker"></li>
						<li>售后网点</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-4 lefts">
					<a href="">
					<ul class="list-unstyled">
						<li class="glyphicon glyphicon-arrow-down"></li>
						<li>软件下载</li>
					</ul>
				    </a>
				</div>
			</div>
			@foreach($banner as $k=>$v)
			@if($k == 6)
			<div class="col-xs-2 yijiu-left pull-right" id="yijiu-right" style=" margin-left: 0px;">
				<img src="{{ $v->pic }}" alt="" width="306" height="175">
			</div>
			@elseif($k == 4)
			<div class="col-xs-2 yijiu-left pull-right" id="yijiu-right">
				<img src="{{ $v->pic }}" alt=""  width="306" height="175" >
			</div>
			@elseif($k == 5)
			<div class="col-xs-2 yijiu-left pull-right" id="yijiu-right" style=" margin-left: -8px;">
				<img src="{{ $v->pic }}" alt=""  width="306" height="175" >
			</div>
			@endif
			@endforeach
			<!-- 
			<div class="col-xs-2 yijiu-left pull-right" id="yijiu-right">
				<img src="holder.js/306x175" alt="">
			</div> -->
		</div>
	</div>
	<!-- 以旧换新 end -->
	<!-- 热门产品 start -->
	<div class="container-fluid" style="height: 500px;background-color: #fff;">
		<div class="container">
			<div class="col-xs-12 remen">
				<h3>热门产品</h3>
				<a href="">
				<h5 class="pull-right">查看更多&nbsp;<i class="glyphicon glyphicon-plus-sign"></i></h5>
			    </a>
			</div>
			<div class="col-xs-12 chanpin">
				@foreach($goods as $key =>$v)
				@if($key == 4)
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 5 )
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 6 )
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 7)
				<div class="col-xs-3 chanpin-one" style="margin-right: 0;">
					<a href="/goods/{{$v->id}}">
					<img src="{{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>
							{{ $v->title }}
						</li>
						<li>后置双1300万</li>
						<li>¥2499 <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- 热门产品 end -->
	<!-- 精品手机 start -->
	<div class="container-fluid" style="min-height: 500px;background-color: #fff;">
		<div class="container">
			<div class="col-xs-12 remen">
				<h3>精品手机</h3>
				<a href="">
				<h5 class="pull-right">查看更多&nbsp;<i class="glyphicon glyphicon-plus-sign"></i></h5>
			    </a>
			</div>
			@foreach($banner as $k=>$v)
			@if($k == 7)
			<div class="col-xs-12 chanpin" style="margin-bottom: 15px;">
				<a href="">
				<img src="{{ $v->pic }}" alt="" width="100%" height="100%">
			    </a>
			</div>
			@endif
			@endforeach

			<div class="col-xs-12 chanpin">

				@foreach($goods as $key =>$v)
				@if($key == 8)
				<div class="col-xs-3 chanpin-one">
					<a href="">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 10)
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src="{{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>
							{{ $v->title }}
						</li>
						<li>后置双1300万</li>
						<li>¥2499 <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 11)
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 12)
				<div class="col-xs-3 chanpin-one" style="margin-right: 0px;">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@endif
				@endforeach
			</div>





			<div class="col-xs-12 chanpin" style="margin-top: 13px;">

				@foreach($goods as $key =>$v)
				@if($key == 13)
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 10)
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src="{{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>
							{{ $v->title }}
						</li>
						<li>后置双1300万</li>
						<li>¥2499 <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 11)
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@elseif($key == 12)
				<div class="col-xs-3 chanpin-one" style="margin-right: 0px;">
					<a href="/goods/{{$v->id}}">
					<img src=" {{ $v->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $v->title }}</li>
						<li>后置双1300万</li>
						<li>¥{{ $v->price }} <span>| <del>¥2799</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>
				    <div class="goumai">
				    	<button type="button" class="btn btn-default but1">查看详情</button>
				    	<button type="button" class="btn btn-default but1 but2">立即购买</button>
				    </div>				    
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- 精品手机 end -->
	<!-- 精选配件 start -->
	<div class="container-fluid" style="min-height: 500px;background-color: #fff;">
		<div class="container">
			<div class="col-xs-12 remen">
				<h3>精选配件</h3>
				<a href="">
				<h5 class="pull-right">查看更多&nbsp;<i class="glyphicon glyphicon-plus-sign"></i></h5>
			    </a>
			</div>
			<div class="col-xs-12 chanpin">

				<div class="col-xs-6 chanpin-one" style="width: 585px; padding: 0px;">
                    <a href="">
					<img src="{{ $banner[32]->pic }}" alt="" style="width: 100%; height:410px;margin: 0px;">				
					</a>
				</div>
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$goods[14]->id}}">
					<img src="{{ $goods[14]->pic }}" alt="" style="width: 280px; margin-left: -15px;" >
					<ul class="list-unstyled">
						<li>{{ $goods[14]->title }}</li>
						<li>¥{{ $goods[14]->price }}</li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>				    
				</div>
				<div class="col-xs-3 chanpin-one" style="margin-right: 0px;">
					<a href="/goods/{{$goods[9]->id}}">
					<img src="{{ $goods[9]->pic }}" alt="" style="width: 280px; margin-left: -15px;">
					<ul class="list-unstyled">
						<li>{{ $goods[9]->title }}</li>
						<li>¥{{ $goods[9]->price }}</li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>				    
				</div>
			</div>
			<div class="col-xs-12 chanpin" style="margin-top: 15px;">
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$goods[15]->id}}">
					<img src="{{ $goods[15]->pic }}" alt="" style="width: 280px; margin-left: -15px;">
					<ul class="list-unstyled">
						<li>{{ $goods[15]->title }}</li>
						<li>¥{{ $goods[15]->price }} <span>| <del>149</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>				    
				</div>
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$goods[16]->id}}">
					<img src="{{ $goods[16]->pic }}" alt="" >
					<ul class="list-unstyled">
						<li>{{ $goods[16]->title }}</li>
						<li></li>
						<li>¥{{ $goods[16]->price }} <span>| <del>149</del></span></li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>				    
				</div>
				<div class="col-xs-3 chanpin-one">
					<a href="/goods/{{$goods[17]->id}}">
					<img src="{{ $goods[17]->pic }}" alt="" style="width: 280px; margin-left: -15px;">
					<ul class="list-unstyled">
						<li>{{ $goods[17]->title }}</li>
						<li></li>
						<li>¥{{ $goods[17]->price }}</li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>				    
				</div>
				<div class="col-xs-3 chanpin-one" style="margin-right: 0px;">
					<a href="/goods/{{$goods[18]->id}}">
					<img src="{{ $goods[18]->pic }}" alt="">
					<ul class="list-unstyled">
						<li>{{ $goods[18]->title }}</li>
						<li></li>
						<li>¥{{ $goods[18]->price }}</li>
					</ul>
					<div class="quan">
						新品
					</div>
					<div class="xiaoquan"></div>
				    </a>				    
				</div>
			</div>
		</div>
	</div>
	<!-- 精选配件 end -->
	<!-- 产品热评 start -->
	<div class="container-fluid" style="min-height: 380px;background-color: #f4f3ef;margin-top: 25px;">
		<div class="container">
			<div class="col-xs-12 remen">
				<h3>产品热评</h3>
				<a href="">
				<h5 class="pull-right">查看更多&nbsp;<i class="glyphicon glyphicon-plus-sign"></i></h5>
			    </a>
			</div>
			<div class="col-xs-12 reping">
				<div class="col-xs-3 reping-one">
					<a href="">
					<img src="{{ $banner[33]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[33]->bname !!}</li>
						<li>{!! $banner[33]->blink !!}</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-3 reping-one">
					<a href="">
					<img src="{{ $banner[34]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[34]->bname !!}</li>
						<li>{!! $banner[34]->blink !!}</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-3 reping-one">
					<a href="">
					<img src="{{ $banner[35]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[35]->bname !!}</li>
						<li>{!! $banner[35]->blink !!}</li>
					</ul>
				    </a>
				</div>
				<div class="col-xs-3 reping-one" style="margin-right: 0px;">
					<a href="">
					<img src="{{ $banner[36]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[36]->bname !!}</li>
						<li>{!! $banner[36]->blink !!}</li>
					</ul>
				    </a>
				</div>
			</div>
		</div>
	</div>
	<!-- 产品热评 end -->
	<!-- 视频 start -->
	<div class="container-fluid" style="min-height: 380px;background-color: #f4f3ef;">
		<div class="container">
			<div class="col-xs-12 remen">
				<h3>视频</h3>
				<a href="">
				<h5 class="pull-right">查看更多&nbsp;<i class="glyphicon glyphicon-plus-sign"></i></h5>
			    </a>
			</div>
			<div class="col-xs-12 reping">
				<div class="col-xs-3 reping-one reping-two">
					<a href="">
					<img src="{{ $banner[37]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[37]->bname !!}</li>
						<li>{!! $banner[37]->blink !!}</li>
					</ul>
				    <div class="kaishi glyphicon glyphicon-play"></div>

				    </a>
				</div>

				<div class="col-xs-3 reping-one reping-two">
					<a href="">
					<img src="{{ $banner[38]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[38]->bname !!}</li>
						<li>{!! $banner[38]->blink !!}</li>
					</ul>
				    <div class="kaishi glyphicon glyphicon-play"></div>

				    </a>
				</div>

				<div class="col-xs-3 reping-one reping-two">
					<a href="">
					<img src="{{ $banner[39]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[39]->bname !!}</li>
						<li>{!! $banner[39]->blink !!}</li>
					</ul>
				    <div class="kaishi glyphicon glyphicon-play"></div>

				    </a>
				</div>
				<div class="col-xs-3 reping-one reping-two" style="margin-right: 0px;">
					<a href="">
					<img src="{{ $banner[40]->pic }}" alt="" width="285" height="175">
					<ul class="list-unstyled">
						<li>{!! $banner[40]->bname !!}</li>
						<li>{!! $banner[40]->blink !!}</li>
					</ul>
				    <div class="kaishi glyphicon glyphicon-play"></div>

				    </a>
				</div>
			</div>
		</div>
	</div>
	<!-- 视频 end -->
	<!-- 服务 start -->
	<div class="container-fluid" style="min-height: 380px;background-color: #f4f3ef;">
		<div class="container">
			<div class="col-xs-12 remen">
				<h3>服务</h3>
				<a href="">
				<h5 class="pull-right">查看更多&nbsp;<i class="glyphicon glyphicon-plus-sign"></i></h5>
			    </a>
			</div>
			<div class="col-xs-12 fuwu">
				<a href="">
					<div class="col-xs-5 fuwu-left" style="margin-right: 15px;">
						
						<p class="tese glyphicon glyphicon-list-alt pull-left"></p>
						<ul class="list-unstyled pull-left"> 
							<li>售后政策</li>
							<li>了解nubia努比亚的服务和保修等相关政策.了解nubia努比亚的服务和保修等相关政策</li>
						</ul>
					</div>
			    </a>
				<a href="">
					<div class="col-xs-5 fuwu-left">
						
						<p class="tese glyphicon glyphicon-list-alt pull-left"></p>
						<ul class="list-unstyled pull-left"> 
							<li>售后政策</li>
							<li>了解nubia努比亚的服务和保修等相关政策.了解nubia努比亚的服务和保修等相关政策</li>
						</ul>
					</div>
			    </a>
			    <div class="col-xs-3 fuwu-bot">
			    	<a href="">
			    		<p class="qiqi glyphicon glyphicon-map-marker pull-left"></p>
			    		<p class="qiqi-one pull-left">
			    			查找线下商店
			    		</p>
			    		<span></span>
			    	</a>
			    </div>
			    <div class="col-xs-3 fuwu-bot">
			    	<a href="">
			    		<p class="qiqi glyphicon glyphicon-map-marker pull-left"></p>
			    		<p class="qiqi-one pull-left">
			    			查找线下商店
			    		</p>
			    		<span></span>
			    	</a>
			    </div>
			    <div class="col-xs-3 fuwu-bot">
			    	<a href="">
			    		<p class="qiqi glyphicon glyphicon-map-marker pull-left"></p>
			    		<p class="qiqi-one pull-left">
			    			查找线下商店
			    		</p>
			    		<span></span>
			    	</a>
			    </div>
			    <div class="col-xs-3 fuwu-bot">
			    	<a href="">
			    		<p class="qiqi glyphicon glyphicon-map-marker pull-left"></p>
			    		<p class="qiqi-one pull-left">
			    			查找线下商店
			    		</p>
			    	</a>
			    </div>
			</div>
		</div>
	</div>
	<!-- 服务 end -->
	</section>
@endsection

	
	
