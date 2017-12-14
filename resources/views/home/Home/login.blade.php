<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@section('title')
	<title>用户登录-努比亚官方网站</title>
	@show
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="stylesheet" href="/Home/css/bootstrap.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/bootstrap.min.css" type="text/css"  media="all">	
	<link rel="stylesheet" href="/Home/css/index.css" type="text/css"  media="all">	
</head>
<body>	
<!-- 主体开始 -->
	<section>
		<div class="col-md-12 zhu">
			<div class="col-md-8 col-md-offset-2 ti">
				<div class="col-md-6 col-md-offset-3 deng">
					<form class="loginForm" method="post">
						<div class="logos"></div>
                        @section('div')
						<div class="navTab" id="tab_nav">
							<label for="tab-mobile" class="tab-btn cur" style="margin-right:8px">
								<a href="/Home/login">努比亚账号登录</a>  
							</label>|							
							<label for="tab-email" class="tab-btn cc" style="margin-left:8px">
								<a href="/Home/login1">手机验证码登录</a>
							</label>
					    </div>
                        @show

					    @section('content')
					    <div class="navCon" id="tab_con">		
					    	<div class="reg-id">
								<dl>
									<dd>
			                            <div class="input-con">
			                            	<input type="text" id="username" name="username" placeholder="邮箱/手机号码/用户名" datatype="*" errormsg="手机号码格式错误"> 
			                            	<span class="icon-id"></span>
			                            </div>
										<div class="checktip" id="user_name_tag">
											<span class="Validform_checktip"></span>
										</div>
									</dd>
								</dl>
								<dl>
									<dd>
										<div class="input-con">
			                                <input type="password" id="password" name="password" placeholder="密码为6-16个字符（数字、字母、符号至少包含两种）">
			                            </div>
										<div class="checktip" id="password_tag">
											<span class="Validform_checktip"></span>
										</div>
									</dd>
								</dl>
							</div>	
					    </div>
					    @show
					    <input type="hidden">
                        <a href="../index" style="text-decoration: none;"><input type="button" style="margin-top:10px" id="login_btn_id" value="立&nbsp;&nbsp;即&nbsp;&nbsp;登&nbsp;&nbsp;录" class="btn-login"></a>
                        <div class="register-now">
					        <a href="/home/zhuce" style="color:#e8380d">注册新账号</a>
					        <span style="font-size: 18px;padding: 0 7px;color: #d5d5d5;">|</span>
					        <a style="color:#34383d" href="/Home/wangji">忘记密码?</a>
		                </div>
                        <div class="third-login">
							<span style="float:left;line-height:30px;">其他方式登录：</span>
							<label class="login-rem" style="float:left">
								<a href="#" class="qq"></a>
								<a href="#" class="weibo"></a>
								<a href="#" class="wx"></a>
								<a href="#" class="alipay"></a>
							</label>
						</div>
				    </form>
				</div>
			</div>
		</div>
	</section>
<!-- 主体结束 -->
<!-- 底部开始 -->
	<footer>
		<div class="col-md-12 di">
			<div class="col-md-8 col-md-offset-2 bu">
				<p class="zi">&nbsp;2012-2017&nbsp;努比亚&nbsp;版权所有&nbsp;<a href="#">&nbsp;粤ICP备10006213号-2</a>&nbsp;&nbsp;ICP经营许可证编号:粤B2-20120688&nbsp;<img src="/Home/img/login/govIcon.png" width="20" height="25">&nbsp;努比亚技术有限公司</p>
			</div>
		</div>
	</footer>
<!-- 底部结束 -->
	
    <script type="text/javascript" src="/Home/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Home/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="/Home/js/holder.min.js"></script>
     <script>
     	 
     </script>


    @section('js')
    @show
</body>
</html>
	