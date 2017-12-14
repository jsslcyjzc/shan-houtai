@extends('home.layout.home')

@section('title')
<title>成功加入购物车</title>
@stop

@section('center')
<div class="col-md-12 dj">
	<div class="alert alert-success" role="alert" style="height: 150px;text-align: center;line-height: 150px;font-size: 20px;">成功加入购物车&nbsp;&nbsp;&nbsp;<a href="/cart">点击进入购物车</a></div>
</div>
@endsection

@section('css')
<style type="text/css">
	.dj .alert a{
		color: #3C763D;
	}
	.dj .alert a:hover{
		color: red;
	}
</style>
@stop