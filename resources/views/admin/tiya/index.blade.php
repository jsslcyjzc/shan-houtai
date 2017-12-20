@extends('admin.index')


@section('title')
<title>体验列表</title>
@endsection

@section('page')
@endsection


@section('css')


@endsection


@section('am')

    @if(session('msg'))
    <div class="alert alert-info col-md-12 bg-primary">
    	{{session('msg')}}
    </div>
    @endif
    <div class="tpl-content-page-title">
        体验列表
    </div>
    <ol class="am-breadcrumb">
        <li><a href="/admin" class="am-icon-home">首页</a></li>
        <li><a href="#">体验列表</a></li>
        <li class="am-active">列表内容</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span>体验列表
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="search" class="form-control form-control-solid" placeholder="搜索..." name="keywords"> </div>
                </div>
            </div>


        </div>
        <div class="tpl-block">
            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                        	
                            <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span><a href="/tiya/create" style="color: #fff;"> 新增</a></button>
                            
                            <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="am-g" style="margin-top: 20px;">
                <div class="am-u-sm-12">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                                <tr>
                                    <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                    <th class="table-id">ID</th>
                                    <th class="table-author am-hide-sm-only" style="width: 200px;">标题</th>
                                    <th class="table-author am-hide-sm-only" style="width: 200px;">图片</th>
                                    <th class="table-author am-hide-sm-only" style="width: 200px;">logo图</th>

                                    <th class="table-set">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@if(count($tiya) > 0)
                            	@foreach($tiya as $k=>$v)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->title}}</td>
                                    <td class="am-hide-sm-only">
                                    	<img src="{{$v->pic}}" alt="" width="65" height="35">
                                    </td>
                                    <td class="am-hide-sm-only">
                                        <img src="{{$v->img}}" alt="" width="30" height="30">
                                    </td>

                                    <td>
                                    	
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                            	<form action="/tiya/{{$v->id}}" method="post" id="del">
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
                                <tr style="height: 100px;">
                               		<td colspan="12" class="am-text-center" style="line-height: 100px;">暂无数据</td>
                               	</tr>
                               @endif
                            </tbody>
                        </table>
                        <div class="nihao">
                            {{ $tiya->appends(['num'=>$num])->links() }}
                        </div>



                        <hr>
                        <style>
                        	.pagination{
                        		float: right;
                        		height: 50px;
                        		margin-top: 50px;
                        	}
                        	.pagination li{
                        		float: left;
                        		border: 1px solid #999;
                        		width: 35px;
                        		height: 35px;
                        		line-height: 35px;
                        		border-radius: 5px;
                        		text-align: center;
                        		margin-right: 10px;
                        		cursor: pointer;
                        	}
                        </style>
                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>
    </div>



@endsection





@section('js')
<script>
	$('#del').submit(function(e){
		if(!confirm('您确定要删除该图片么?')) return false;
	})

</script>
@endsection



