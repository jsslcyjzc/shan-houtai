@extends('home.Home.wangji')
<!-- 主体开始 -->
@section('div')
	<div class="biao">
		<label for="r1" class="dd_a" style="margin-right:8px">
				<a href="/Home/wangji">手机号码找回密码</a>  
		</label>|							
		<label for="r2" class="vv_x" style="margin-left:8px">
				<a href="/Home/wangji1">注册邮箱找回密码</a>
		</label>
	</div>
@stop

@section('content')
    <div class="C" id="c">
        <div class="c2">
        	<dl class="dls">
        		<dd>
        			<div class="in_co">
        				<input type="text" class="text validate-email" name="email" id="email" placeholder="请输入常用邮箱地址">
        				<span class="succ_tips"></span>
        			</div>
        			<span class="check_tips succ_tips" id="mobile_succ_tag" style="display: none;"></span>

				    <!-- <span class="check_tips error_tip" id="mobile_error_tag" style="display: none;">请输入邮箱地址</span> -->
        		</dd>
        	</dl>
        	<dl class="dls">
        		<dd>
        			<div class="in_co">
        				<input type="text" name="emailValidateCode" id="emailCode" class="text required validate-mobilecode" placeholder="请输入邮箱收到的验证码">
						<input class="mobile-code-btn" type="button" id="sendEmailCode" value="获取验证码">
        				<span class="check_tips error_tip" id="mobileCode_error_tag"></span>
				        <span class="check_tips succ_tips" id="mobileCode_succ_tag"></span>
        			</div>
        			
        		</dd>
        	</dl>
        	<dl class="dls">
        		<dd>
        			<div class="in_co">
        				<input type="text" class="password_1 text req minLength:6 maxLength:20" name="" placeholder="密码为6-16个字符(数字、字母、符号至少包含两种)">
        				<span class="check_tips error_tip" id="pwd_error_tag"></span>
			            <span class="check_tips succ_tips" id="pwd_succ_tag"></span>
        			</div>		
        		</dd>
        	</dl>
        	<dl class="dls">
        		<dd>
        			<div class="in_co">
        				<input type="text" class="password_3 text req minLength:6 maxLength:20 validate-surepwd" name="" placeholder="请再次输入密码">
        				<span class="check_tips error_tip" id="rpwd_error_tag"></span>
			            <span class="check_tips succ_tips" id="rpwd_succ_tag"></span>
        			</div>		
        		</dd>
        	</dl>
        	<div class="buttons">
				<input type="hidden" name="back_url">
				<input type="button" class="btn" value="提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交" name="regButton" id="regButton">
			</div>
        </div>
    </div>
@stop
<!-- 主体结束 -->