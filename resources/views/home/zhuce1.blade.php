@extends('Home.zhuce')
	@section('p')
		<p>
			<a href="/home/zhuce">用手机号码注册账号</a>
			<span>|</span>
			<a href="/home/zhuce1" style="color: #e8380d;">用电子邮箱注册账号</a>
		</p>
	@stop
	@section('content')
		<div class="col-md-12 input">
			<div class="col-md-12 a_ac">
				<div class="col-md-3"><p class="p_a"></p></div>
				<div class="col-md-6"><input type="text" name="shoujihao" placeholder="请输入邮箱账号" id="tel" onblur="hide_tel" onfocus="show_tel" /></div>
				<div class="col-md-3"><span id="tel_span"></span></div>
			</div>
			<div class="col-md-12 a_ac">
				<div class="col-md-3"><p class="p_a"></p></div>
				<div class="col-md-6"><input type="password" name="password" placeholder="密码为6-16个字符(数字、字母、符号至少包含两种)" /></div>
				<div class="col-md-3"><p class="p_b"></p></div>
			</div>

			<div class="col-md-12 a_ac">
				<div class="col-md-3"><p class="p_a"></p></div>
				<div class="col-md-6">
					<input type="text" id="yzm_a" name="yzm" placeholder="请输入邮箱收到的验证码(不区分大小写)" style="width: 200px;" />
					<button style="width: 120px;height: 40px;">获取验证码</button>
				</div>
				<div class="col-md-3"><p class="p_b"></p></div>
			</div>
			{{csrf_field()}}
			<div class="col-md-12" style="height: 50px;">
						<p class="col-md-5 col-md-offset-3" style="height: 100px;">
							<input type="checkbox" checked="checked" style="width:14px;height:14px;">我已阅读并接受<a href="#"style="color: #e8380d;">用户协议</a>和<a href="#"style="color: #e8380d;">隐私政策</a>
						</p>
					</div>
			<div class="col-md-12 a_ac">
				<div class="col-md-3"></div>
				<div class="col-md-6"><a href="/Home/login"><input type="submit" value="立即注册" /></a></div>
				<div class="col-md-3"></div>
			</div>
		</div>
	@stop
			