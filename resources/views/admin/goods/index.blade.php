@extends('admin.index')


@section('page')
	
@endsection

@section('am')
    @if(session('msg'))
    <div class="alert alert-info col-md-12 bg-primary">
        {{session('msg')}}
    </div>
    @endif
    <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 商品列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="search" class="form-control form-control-solid" placeholder="搜索..." name="title" value="{{$keywords}}"> 
                            </div>
                        </div>
                    </div>
                </div>
                 
                 

                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"></th>
                                            <th class="table-id" style="min-width: 80px;">ID</th>
                                            <th class="table-title" style="min-width: 150px;">商品标题</th>
                                            <th class="table-phone" style="min-width: 150px;">商品价格</th>
                                            <th class="table-set" style="min-width: 70px;">库存</th>
                                            <th class="table-set" style="min-width: 300px;">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@if(count($goods) > 0)
	                                	@foreach($goods as $k=>$v)
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{ $v->id }}</td>
                                            <td><a href="#">{{ $v->title }}</a></td>
                                            <td>{{ $v->price }}</td>
                                            <td class="center">{{$v->kucun}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        
                                                       <a href="/goods/{{$v->id}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary bj" type="submit">
                                                        	<span class="am-icon-pencil-square-o"></span> 编辑
                                                        
                                                       </a>
                                                       
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>

                                                         <form class="del" action="/goods/{{$v->id}}" method="post" style="float: left;">
                                                        {{method_field('DELETE')}}
                                                         {{csrf_field()}}
                                                         
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                   
                                                    </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                       @endforeach
                                       @else
                                       <tr>
                                       	<td colspan="12" class="am-text-center">暂无数据</td>
                                       </tr>
                                       @endif
                                    </tbody>
                                </table>
                                <hr>
                                			
                                {{ $goods->appends(['num'=>$num])->links() }}
                             
                        </div>

                    </div>


                </div>
                <div class="tpl-alert"></div>
            </div>
@endsection

@section('css')

<style type="text/css">
    a{
        font-size: 15px;
    }
	.am-btn-group .bj{
		background-color: #fff;
	}
	.am-btn-group .bj:hover{
		background: #eee;
		color: #000;
	}
    .pagination{
        float: right;
    }
    .pagination li{
        width: 30px;
        float: left;
        text-align: center;
        margin-right: 10px;
        border: 1px solid #ddd;
        color: #36c6d3;
        border-radius: 5px;
    }
    .am-table-striped>tbody>tr:nth-child(odd)>td, .am-table-striped>tbody>tr:nth-child(odd)>th{
        font-size: 14px;
    }
    .am-table>tbody>tr>td, .am-table>tbody>tr>th, .am-table>tfoot>tr>td, .am-table>tfoot>tr>th, .am-table>thead>tr>td, .am-table>thead>tr>th{
        font-size: 14px;
    }
    .am-btn-group>.am-btn:first-child:not(:last-child):not(.am-dropdown-toggle){
        font-size: 14px;
    }
    
</style>

@endsection

@section('js')
<script>
$('.del').submit(function(e){
    if(!confirm('您确定要删除该用户么?')) return false;
});
</script>
@endsection