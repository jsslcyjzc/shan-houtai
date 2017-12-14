<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="/css/zhuce/zhu.css">
	<link rel="stylesheet" href="/css/zhuce/bootstrap.css">
	<link rel="stylesheet" href="/css/zhuce/bootstrap.min.css">
	<script type="text/javascrip" src="/js/zhuce/bootstrap.js"></script>
	<script type="text/javascrip" src="/js/zhuce/bootstrap.min.js"></script>
	<script type="text/javascrip" src="/js/zhuce/jquery.js"></script>
	
</head>
<body style="background:#f5f5f5; height:900px;">
	<div class="a_a col-md-8 col-md-offset-2" style="background: #fff;">
		<div class="col-md-4 col-md-offset-4 a_aa">
			<a href="#">
				<img src="/img/zhuce/logo.png" alt="图片丢失" />
			</a>
		</div>
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2 a_ab">
				@section('p')
					<p>
					<a href="/home/zhuce" style="color: #e8380d;">用手机号码注册账号</a>
					<span>|</span>
					<a class="mo" href="/home/zhuce1">用电子邮箱注册账号</a>
					</p>
				@show
			</div>
			@section('content')
				<div class="col-md-12 input">
					<div class="col-md-12 a_ac">
						<div class="col-md-3"><p class="p_a"></p></div>
						<div class="col-md-6"><input type="text" name="shoujihao" placeholder="请输入手机号" id="tel" onblur="hide_tel" onfocus="show_tel" /></div>
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
							<input type="text" id="yzm_a" name="yzm" placeholder="请输入验证码(不区分大小写)" style="width: 200px;" />
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
			@show	
				<div class="col-md-12" style="margin-top: 10px;"><p class="col-md-3 col-md-offset-7">已有账户,<a href="/Home/login" style="color: #e8380d;">直接登陆</a></p></div>
		</div>
	</div>
	<div class="col-md-12" style="margin-top: 40px;">
		<p class="col-md-8 col-md-offset-2 pp">
			<span style="margin-left: 20px;">2012-2017 努比亚 版权所有 粤ICP备10006213号-2</span>
			<span style="margin-left: 40px;">ICP经营许可证编号：粤B2-20120688深圳市市场监督管理局企业主体身份公示 努比亚技术有限公司</span>
		</p>
	</div>
	
	<script src="/js/zhuce/jquery.min.js"></script>
	<script>

function hide_tel()
{
	var tel = document.getElementById("tel");
	if(tel.value == "")
	{
		document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:red;'>手机号不能为空</span>";
	}
	else
	{
		if(preg_tel.test(tel.value))
		{
			document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:green;'>√</span>";
		}
		else
		{
			document.getElementById("tel_span").innerHTML = "<span style='font-size:12px;color:red;'>手机号输入有误</span>";
		}
	}
}

	</script>


	
    
</body>
</html>

