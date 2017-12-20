<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@section('title')
	<title>找回密码-努比亚官方网站</title>
	@show
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="stylesheet" href="/Home/css/bootstrap.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/bootstrap.min.css" type="text/css"  media="all">
	<link rel="stylesheet" href="/Home/css/index.css" type="text/css" media="all">
</head>
<body>
<!-- 主体开始 -->
<section>
	<div class="col-md-12 shen">
		<div class="col-md-8 col-md-offset-2 ti_s">
			<div class="col-md-6 col-md-offset-3 zhao">
				<form class="wangjiForm" method="post">
					<div class="logo_s"></div>
					@section('div')
					<div class="biao">
						<label for="r1" class="a_bb" style="margin-right:8px">
								<a href="/Home/wangji">手机号码找回密码</a>  
						</label>|							
						<label for="r2" class="b_cc" style="margin-left:8px">
								<a href="/Home/wangji1">注册邮箱找回密码</a>
						</label>
					</div>
                    @show

                    @section('content')
                    <div class="C" id="c">
                        <div class="c2">
                        	<dl class="dls">
                        		<dd>
                        			<div class="in_co">
                        				<input type="text" id="mobile" name="mobile" placeholder="请输入手机号码">
                        				<span class="succ_tips"></span>
                        			</div>
                        			<span class="check_tips succ_tips" id="mobile_succ_tag" style="display: none;"></span>

								    <span class="check_tips error_tip" id="mobile_error_tag" style="display: none;">请输入手机号码</span>
                        		</dd>
                        	</dl>
                        	<dl class="dls">
                        		<dd>
                        			<div class="in_co">
                        				<input type="text" name="mobileValidateCode" id="mobileCode" class="text required validate-mobilecode" placeholder="请输入手机收到的验证码">
                        				<input id="send" class="mobile-code-btn" type="button" value="获取验证码">
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
								<a href="/Home/login"><input type="button" class="btn" value="提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交" name="regButton" id="regButton"></a>
							</div>
                        </div>
			        </div>
                    @show
				</form>
			</div>
		</div>
	</div>	
</section>
<!-- 主体结束 -->
<!-- 底部开始 -->
<footer>
		<div class="col-md-12 dis">
			<div class="col-md-8 col-md-offset-2 bus">
				<div class="appeal">
					<span>以上方法都不可行，您还可以尝试</span>
					<a href="#">账号申诉</a>
				</div>
				<p class="zis">&nbsp;2012-2017&nbsp;努比亚&nbsp;版权所有&nbsp;<a href="#">&nbsp;粤ICP备10006213号-2</a>&nbsp;&nbsp;ICP经营许可证编号:粤B2-20120688&nbsp;<img src="/Home/img/login/govIcon.png" width="20" height="25">&nbsp;努比亚技术有限公司</p>
			</div>
		</div>
	</footer>
<!-- 底部结束 -->
    <script type="text/javascript" src="/Home/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Home/js/jquery.js"></script>
    <script type="text/javascript" src="/Home/js/holder.min.js"></script>
    
    @section('js') 
    <script>
        $('.in_co > #send').click(function(){

            // alert(111);
            //获取用户输入的手机号  name=mobile
            var phone = $('input[name=mobile]').val();
            // alert(phone);
            //检测用户的手机号格式是否正确
            var reg =  /1\d{10}/;
            //检测
            if(!reg.test(phone)) {
                alert('手机号格式错误!!!');
                return;
            }

            $.ajax({
                type:'get',
                data:{mobile:phone},
                url:'/message',
                success:function(data){
                    alert(data.data.vcode);
                    console.log(data);
                }
            });
            //发送短信之后1分钟之内不能点击该按钮
            $(this).addClass('disabled');
            var t = 5;
            //加倒计时
            var inte = setInterval(function(){
                $('#send').html(t+'秒之后再重新发送');
                t--;
                if(t < 0) {
                    //停止定时器
                    clearInterval(inte);
                    //使按钮可点
                    $('#send').removeClass('disabled');
                    //更换文字
                    $('#send').html('发送验证码');
                }

            },1000);
        });
    </script>
    @show
</body>
</html>