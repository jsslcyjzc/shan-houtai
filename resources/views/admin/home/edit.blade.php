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
                        <span class="am-icon-code"></span>用户修改
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">

                            <form class="am-form am-form-horizontal" action="/qt/{{$useres->id}}" role="form" method="post" enctype="multipart/form-data">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">手机号</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-phone" placeholder="手机号" name="phone" value="{{$useres->phone}}"  style="font-size: 15px;">
                                    </div>
                                </div>
                                
                                <div class="am-form-group">
                                    <label for="user-password" class="am-u-sm-3 am-form-label">密码 / Password</label>
                                    <div class="am-u-sm-9">
                                        <input type="password" id="user-password" placeholder="输入你的密码 / Password" name="password" value="{{$useres->password}}"  style="font-size: 15px;">
                                    </div>
                                </div>
                                 
                                 {{csrf_field()}}
                                 {{method_field('PUT')}}

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary"  style="font-size: 15px;">修改</button>

                                        <button type="button" class="am-btn am-btn-primary"  style="font-size: 15px;">重置</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
@endsection