@extends('admin.index')



@section('title')
<title>nubiaUI 管理</title>
@endsection

@section('page')
@endsection


@section('am')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span>nubiaUI 列表
        </div>
        <div class="tpl-portlet-input tpl-fz-ml">
            <div class="portlet-input input-small input-inline">
                <div class="input-icon right">
                    <i class="am-icon-search"></i>
                    <input type="text" class="form-control form-control-solid" placeholder="搜索..."> 
                </div>
            </div>
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g" style="margin-bottom: 20px;">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="/UIluntan/create" style="float:left">
                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                        </a>

                         <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                    <style>
                    	.am-btn-group-xs .am-btn{
                    		font-size: 14px;
                    	}
                    </style>
                </div>
            </div>
        </div>
        <div class="am-g">
            <div class="tpl-table-images">
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-4" style="float: left;">
                    @if(count($nubias) > 0)
                    <div class="tpl-table-images-content">
                        <div class="tpl-table-images-content-i-time">发布时间：{{ $nubias->time }}</div>
                        <div class="tpl-i-title">
                            {{ $nubias->title }}
                        </div>
                        <a href="javascript:;" class="tpl-table-images-content-i">
                            <div class="tpl-table-images-content-i-info">
                                <span class="ico">
                        			<img src="{{ $nubias->photo }}" alt="" width="40" height="40">{{ $nubias->author }}
                     			</span>

                            </div>
                            <img src="{{ $nubias->pic }}" alt="">
                        </a>
                        <div class="tpl-table-images-content-block">
                            <div class="tpl-i-font">
                                {!! $nubias->content !!}
                            </div>
                            <div class="tpl-i-more">
                                <ul>
                                    <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                    <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                    <li><span class="am-icon-github font-green"> 600+</span></li>
                                </ul>
                            </div>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                    <a href="/UIluntan/create">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                    </a>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                <form action="/UIluntan/{{ $nubias->id }}" class="del" method="post">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                 
                                </form>
                                </div>
                                <style>
                                    .am-btn-toolbar .tpl-edit-content-btn .am-btn{
                                        float: left;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="am-u-sm-12">
                        暂无数据
                    </div>
                    @endif
                </div>
                <style>
                	.am-btn-toolbar .tpl-edit-content-btn .am-btn{
                		font-size: 12px;
                	}
                </style>
                <hr style="float: left;">
                
                {{ $nubia->appends(['num'=>$num])->links() }}
                

            </div>

        </div>
    </div>
    <div class="tpl-alert"></div>

    <script>
        $('.del').submint(function(){
            alert(655);
            if(!confirm('您确定要删除该文章吗')) return false;
        })
    </script>

</div>
@endsection