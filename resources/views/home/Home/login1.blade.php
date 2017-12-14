@extends('home.Home.login')
<!-- 主体开始 -->
    @section('div')
    <div class="navTab" id="tab_nav">
	    <label for="tab-mobile" class="tab-btn bbb" style="margin-right:8px">
			<a href="/Home/login">努比亚账号登录</a>  
		</label>|							
		<label for="tab-email" class="tab-btn bb" style="margin-left:8px">
			<a href="/Home/login1">手机验证码登录</a>
		</label>
    </div>
    @stop

    @section('content')
        <div class="navCon CON">
	        <div class="reg-phone">
	    		<div class="reg-class">
					<dl>
						<dd>
							<div class="input-con">
                                <input type="text" id="mobile" name="mobile" placeholder="手机号码" datatype="m" errormsg="手机号码格式错误" ajaxurl="/login/checkmobile.action">
                                <span class="icon-id"></span>
                            </div>
							<div class="checktip" id="mobile-tag"><span class="Validform_checktip"></span></div>
						</dd>
					</dl>
					<dl>
						<dd>
							<div class="input-con">
                                <input type="text" class="inpu" id="mobileValidateCode" name="mobileValidateCode" placeholder="请输入手机验证码" datatype="*" style="width: 260px;">
                                <input type="button" value="获取验证码" class="btn-code" id="btn-code-mobile">
                            </div>
							<div class="checktip"><span class="Validform_checktip"></span></div>
						</dd>
					</dl>
				    <div id="mobile-tips" style="color:red"></div>
				</div>    
			</div>
		</div>
    @stop
<!-- 主体结束 -->