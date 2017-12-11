
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>登录</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/admins/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/admins/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/admins/assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="/admins/assets/css/admin.css">
  <link rel="stylesheet" href="/admins/assets/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				<span>登录</span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>
    
		<div class="login-font">
			<i>Log In </i> or <span> Sign Up</span>
			@if(session('msg'))
		    <div class="alert alert-info col-md-12 bg-primary" style="font-size: 22px; color: red;">
		        {{session('msg')}}
		    </div>
		    @endif
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" method="post" action="/admin/login">
				<fieldset>
					<div class="am-form-group">
						<input type="text" class="" id="doc-ipt-email-1" placeholder="请输入您的用户名" name="username">
					</div>
					<div class="am-form-group">
						<input type="password" class="" id="doc-ipt-pwd-1" placeholder="输入您的密码" name="password">
					</div>
					{{csrf_field()}}
					<p><button href="index.html" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="/admins/assets/js/jquery.min.js"></script>
  <script src="/admins/assets/js/amazeui.min.js"></script>
  <script src="/admins/assets/js/app.js"></script>
</body>

</html>