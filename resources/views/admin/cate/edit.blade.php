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
            <span class="am-icon-code"></span>分类修改
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
    <div class="tpl-block ">
        <div class="am-g tpl-amazeui-form">
            <div class="am-u-sm-12 am-u-md-9">

                <style>
                    .am-form-group .am-u-sm-9 input{
                        font-size: 15px;
                    }
                </style>

                <form class="am-form am-form-horizontal" action="/cate/{{$p->id}}" role="form" method="post" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">名称</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-title" placeholder="请输入您要修改的名称" name="name" value="">
                            <small>请输入您要修改的名称</small>
                        </div>
                    </div>

                     {{csrf_field()}}
                     {{method_field('PUT')}}

                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary">修改</button>

                            <button type="button" class="am-btn am-btn-primary">重置</button>
                        </div>
                    </div>


                    <style>
                        .am-form-group .am-u-sm-push-3 button{
                            font-size: 15px;
                        }
                    </style>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection