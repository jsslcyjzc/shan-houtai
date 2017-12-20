@extends('home.layout.home')



@section('title')
	<title>努比亚手机体验店-努比亚nubia智能手机官网</title>
@endsection


@section('center')
<!-- 主体开始 -->
<div class="col-md-12 alls">
	<div class="container">
		<div class="sss" style="height: 450px;">
			@foreach($tiya as $k=>$v)
            @if($k == 0)
			<img src="{{ $v->pic }}" alt="" style="width: 100%; height: 450px;">
			@endif   
            @endforeach 
			<div class="t_tle">
				<p class="s_p">{{ $tiya[1]->title }}</p>
				<p class="s_pp">{{ $tiya[2]->title }}</p>
				<div class="s_ppp">
					<ul>
						<li class="li">
							<img src="{{ $tiya[3]->img }}" alt="" style="width: 90px; height: 90px;">
							<p>{{ $tiya[4]->title }}</p>
						</li>
						<li class="li1">
							<img src="{{ $tiya[5]->img }}" alt="" style="width: 90px; height: 90px;">
							<p>{{ $tiya[6]->title }}</p>
						</li>
						<li class="li2">
							<img src="{{ $tiya[7]->img }}" alt="" style="width: 90px; height: 90px;">
							<p>{{ $tiya[8]->title }}</p>
						</li>
					</ul>
				</div>			 
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-12 dt">
			<div class="zs">
				<p class="shi">45个城市224个体验店</p>
			</div>
			<div class="dit">
				<img src="/Home/img/tiyan/ditu.png" alt="" width="100%" height="800px">
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
	<script src="/Home/js/holder.min.js"></script>
@stop