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
                        <span class="am-icon-code"></span>用户添加
                    </div>

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">

                            <form class="am-form am-form-horizontal" action="/user" role="form" method="post" enctype="multipart/form-data">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" placeholder="姓名 / Name" name="username">
                                        <small>请输入您的名字</small>
                                    </div>
                                </div>
                                
                                <div class="am-form-group">
                                    <label for="user-password" class="am-u-sm-3 am-form-label">密码 / Password</label>
                                    <div class="am-u-sm-9">
                                        <input type="password" id="user-password" placeholder="输入你的密码 / Password" name="password">
                                        <small>请输入您的密码</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-password" class="am-u-sm-3 am-form-label">确认密码 / Password</label>
                                    <div class="am-u-sm-9">
                                        <input type="password" id="user-password" placeholder="请再次确认密码 / Password">
                                        <small>请输入您的密码</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">电话 / Telephone</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel" id="user-phone" placeholder="输入你的电话号码 / Telephone" name="phone">
                                        <small>请输入您的Telphone</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">邮箱 / Email</label>
                                    <div class="am-u-sm-9">
                                        <input type="email" id="user-email" placeholder="输入你的电子邮件 / Email" name="email">
                                        <small>邮箱你懂得...</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">头像 / Photos</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" id="user-file" class="am-input-sm" name="profile">

                                    </div>
                                </div>
                                 
                                 {{csrf_field()}}

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">保存</button>

                                        <button type="button" class="am-btn am-btn-primary">重置</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
@endsection