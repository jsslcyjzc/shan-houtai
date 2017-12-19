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
                        <span class="am-icon-code"></span> 分类列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="search" class="form-control form-control-solid" placeholder="搜索..."> 
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
                                            <th class="table-check">
                                            <th class="table-id" style="width: 200px;">ID</th>
                                            <th class="table-title" style="width: 300px;">标题</th>
                                            <th class="table-set" style="width: 130px;text-align: center;">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@if(count($cates) > 0)
	                                	@foreach($cates as $k=>$v)
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td style="font-size: 15px;">{{ $v->id }}</td>
                                            <td><a href="#" style="font-size: 15px;">{{ $v->name }}</a></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="/cate/{{$v->id}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary bj" type="submit" style="font-size: 15px;">
                                                            <span class="am-icon-pencil-square-o"></span> 修改
                                                        
                                                       </a>
                                                         <form class="del" action="/cate/{{$v->id}}" method="post" style="float: left;">
                                                        {{method_field('DELETE')}}
                                                         {{csrf_field()}}
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" style="margin-left: 70px;font-size: 15px;"><span class="am-icon-trash-o"></span> 删除</button>
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
                        </div>

                    </div>


                </div>
                <div class="tpl-alert"></div>
            </div>
@endsection

@section('css')

<style type="text/css">
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
</style>

@endsection

@section('js')
<script>
$('.del').submit(function(e){
    if(!confirm('您确定要删除该文章么?')) return false;
});
</script>
@endsection