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
                @if(count($nubia) > 0)
                @foreach($nubia as $k=>$v)
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-4" style="float: left;height: 360px;margin-bottom: 30px;">
                    
                    <div class="tpl-table-images-content">
                        <div class="tpl-table-images-content-i-time">发布时间：{{ $v->time }}</div>
                        <div class="tpl-i-title">
                            {{ $v->title }}
                        </div>
                        <a href="javascript:;" class="tpl-table-images-content-i">
                            <div class="tpl-table-images-content-i-info">
                                <span class="ico">
                        			<img src="{{ $v->photo }}" alt="" width="40" height="40">{{ $v->author }}
                     			</span>

                            </div>
                            <img src="{{ $v->pic }}" alt="" width="245" height="154">
                        </a>
                        <div class="tpl-table-images-content-block">
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
                                    <a href="/UIluntan/{{ $v->id }}/edit">
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                    </a>
                                    <form action="/UIluntan/{{ $v->id }}" id="del" method="post">

                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}

                                        <button class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                     
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
                    
                </div>
                @endforeach
                @else
                    <div class="am-u-sm-11" style="height: 80px;text-align: center;color: #999;font-size: 17px;background-color: #f1c0c0;line-height: 80px;margin-left: 40px;">
                        暂无数据
                    </div>
                @endif
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

    

</div>
@endsection


@section('js')
<script>
    $('.am-btn-group #del').submit(function(e){
    if(!confirm('您确定要删除该文章么?')) return false;
    });
</script>
@endsection