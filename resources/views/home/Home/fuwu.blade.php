@extends('home.layout.home')



@section('title')
	<title>努比亚完善的手机售后服务-努比亚nubia智能手机官网</title>
@endsection


@section('center')
<!-- 主体开始 -->
<div class="col-md-12 all">
	<div class="container">
		<div class="col-xs-12 fw" style="height: 450px;">
            @foreach($fw as $k=>$v)
            @if($k == 5)
			<img src="{{ $v->pic }}" alt="" style="width: 100%; height: 450px;">
            @endif   
            @endforeach         
			<div class="nb_stitl">
	            <h3>{{ $fw[6]->title }}</h3>
	        </div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container">
    <div class="nb_content">
    	<div class="nb_xection">
    		<div class="nb_stitle">
                <p style="font-size: 23px; color: #333;">{{ $fw[7]->title }}</p>
            </div>
            <div class="nb_sbo">
            	<ul class="col-md-12 sbo">
            		<li class="col-md-5 sbo_aa">
            			<div class="col-md-3 aa_cl">
            				<img src="{{ $fw[3]->img }}" alt="" style="width: 100px; height: 100px;">
            			</div>
            			<div class="col-md-6 aa_cj">
            				<p style="font-size: 18px; color: #333;">{{ $fw[1]->title }}</p>
            				<p>{!! $fw[0]->content !!}</p>
            			</div>
            		</li>
            		<li class="col-md-5 sbo_bb">
            			<div class="col-md-3 aa_cl">
            				<img src="{{ $fw[2]->img }}" alt="" style="width: 100px; height: 100px;">
            			</div>
            			<div class="col-md-6 aa_cj">
            				<p style="font-size: 18px; color: #333;">{{ $fw[9]->title }}</p>
            				<p>{!! $fw[8]->content !!}</p>
            			</div>
            		</li>
            	</ul>
            </div>
    	</div>
        <div class="nb_xection1">
    		<div class="nb_stitle1">
                <p style="font-size: 23px; color: #333;">{{ $fw[4]->title }}</p>
            </div>
            <div class="nb_sbo1">
            	<div class="t1 t">
            		<img src="{{ $fw[10]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[11]->title }}</p>
            	</div>
            	<div class="t2 t">
            		<img src="{{ $fw[12]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[13]->title }}</p>
            	</div>
            	<div class="t3 t">
            		<img src="{{ $fw[15]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[14]->title }}</p>
            	</div>
            	<div class="t4 t">
            		<img src="{{ $fw[16]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[17]->title }}</p>
            	</div>
            	<div class="t5 t">
            		<img src="{{ $fw[18]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[19]->title }}</p>
            	</div>
            	<div class="t6 t">
            		<img src="{{ $fw[20]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[21]->title }}</p>
            	</div>
            	<div class="t7 t">
            		<img src="{{ $fw[22]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[23]->title }}</p>
            	</div>
            	<div class="t8 t">
            		<img src="{{ $fw[24]->img }}" alt="" style="width: 100px; height: 100px;">
            		<p class="zi">{{ $fw[25]->title }}</p>
            	</div>
            </div>
    	</div>
        <div class="nb_sections">
        	<ul>
                <li class="s_a1">
                    <a href="#">
                    	<img src="{{ $fw[26]->img }}" alt="" style="width: 100px; height: 100px;">
                        <p class="qi">{{ $fw[27]->title }}</p>
                    </a>
                </li>
                <li class="ll"></li>
                <li class="s_a1">
                    <a href="#">
                    	<img src="{{ $fw[28]->img }}" alt="" style="width: 100px; height: 100px;">
                        <p class="qi">{{ $fw[29]->title }}</p>
                    </a>
                </li>
                <li class="ll"></li>
                <li class="s_a1">
                    <a href="#">
                    	<img src="{{ $fw[30]->img }}" alt="" style="width: 100px; height: 100px;">
                        <p class="qi">{{ $fw[31]->title }}</p>
                    </a>
                </li>
                <li class="ll"></li>
                <li class="s_a1">
                    <a href="#">
                    	<img src="{{ $fw[32]->img }}" alt="" style="width: 100px; height: 100px;">
                        <p class="qi">{{ $fw[33]->title }}</p>
                    </a>
                </li>
            </ul>
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