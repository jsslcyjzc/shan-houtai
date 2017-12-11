<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@section('title')
	<title>努比亚官网首页</title>
	@show
        
        
	    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
		<script src="/bootstrap/js/jquery.js"></script>
		<script src="/bootstrap/js/bootstrap.js"></script>
		<script src="/bootstrap/js/holder.min.js"></script>

		<link rel="stylesheet" href="/css/nubiya.css">
		<script src="/js/jquery-3.1.0.js"></script>
		<script>
             $(function(){
             	$('.shangchang').hover(function(){
                   $(this).find(".xialacaidan").stop(1000).slideDown(1000);
             	},function(){
                   $(this).find(".xialacaidan").stop(1000).slideUp(1000);
             	})




             	$(".zuo_one > ul > li").hover(function(){
             		$(".zuo_one > ul > li > a").eq($(this).index()).css("color","#ff0036");
             		$(".cebian").eq($(this).index()).show();
             	},function(){
             		$(".zuo_one > ul > li > a").eq($(this).index()).css("color","#333333");
             		$(".cebian").eq($(this).index()).hide();
             	})




             	$(".cebian > .heijin").hover(function(){
             		$(".cebian > .heijin > a > p").eq($(this).index()).css("color","#ff0036");
             	},function(){
             		$(".cebian > .heijin > a > p").eq($(this).index()).css("color","#333333");
             	})



                
             	$(".reping-two > a").eq(0).hover(function(){
             		$(".kaishi").eq(0).css("background","rgba(255,0,54,0.5)");
             	},function(){
                    $(".kaishi").eq(0).css("background","rgba(255,255,255,0.3)");
             	})
             	$(".reping-two > a").eq(1).hover(function(){
             		$(".kaishi").eq(1).css("background","rgba(255,0,54,0.5)");
             	},function(){
                    $(".kaishi").eq(1).css("background","rgba(255,255,255,0.3)");
             	})
             	$(".reping-two > a").eq(2).hover(function(){
             		$(".kaishi").eq(2).css("background","rgba(255,0,54,0.5)");
             	},function(){
                    $(".kaishi").eq(2).css("background","rgba(255,255,255,0.3)");
             	})
             	$(".reping-two > a").eq(3).hover(function(){
             		$(".kaishi").eq(3).css("background","rgba(255,0,54,0.5)");
             	},function(){
                    $(".kaishi").eq(3).css("background","rgba(255,255,255,0.3)");
             	})
             	$(".reping-two > a").eq(4).hover(function(){
             		$(".kaishi").eq(4).css("background","rgba(255,0,54,0.5)");
             	},function(){
                    $(".kaishi").eq(4).css("background","rgba(255,255,255,0.3)");
             	})




             	$(".chanpin-one").hover(function(){
             		$(".chanpin-one >.goumai").eq($(this).index()).stop(900).slideDown(900);
		    	},function(){
		           $(".chanpin-one >.goumai").eq($(this).index()).stop(900).slideUp(900);
		    	})




             })


		</script>
		@section('js')

		@show
</head>
<body>
	<!-- 头部导航  start -->
	<header>
	<div class="top-nav">
		<div class="container">
			<div class="col-sm-2" style="padding:0px;">
				<img src="/image/logo.png" alt="" style="margin-top: 20px;" width="150" height="38">
			</div>
			<div class="col-sm-8">
				<ul class="list-unstyled list-inline" style="margin-top: 25px;">
					<li style="margin-left: 45px;"><a href="">商城</a></li>
					<li class="shangchang" >
						<a href="">手机</a>
						<div class="xialacaidan" id="xialacaidan">
					         <div class="container" role="listbox">

					         	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-left:20px;"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>

							   <div class="col-xs-2 shouji_one">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>

					         </div>
		                </div>
					</li>
					<li class="shangchang">
						<a href="">配件</a>
						<div class="xialacaidan" id="xialacaidan">
					         <div class="container" role="listbox">

					         	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-left:20px;"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>

							   <div class="col-xs-2 shouji_one">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>

					         </div>
		                </div>
					</li>
					<li class="shangchang">
						<a href="">摄影</a>
						<div class="xialacaidan" id="xialacaidan">
					         <div class="container" role="listbox">

					         	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-left:20px;"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>

							   <div class="col-xs-2 shouji_one">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>

					         </div>
		                </div>
					</li>
					<li><a href="">服务</a></li>
					<li><a href="">体验店</a></li>
					<li><a href="">社区</a></li>
					<li style="margin-right: none;" class="shangchang">
						<a href="">nubia UI</a>
                        <div class="xialacaidan" id="xialacaidan">
					         <div class="container" role="listbox">

					         	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-left:20px;"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>

							   <div class="col-xs-2 shouji_one">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>
							   <div class="col-xs-2 shouji_one" style="margin-left: 0px;">
							   	<a href="">
							   	    <img src="/image/z173.png" alt="">
							   	    <p>Z17S全面屏</p>
							   	</a>
							   </div>

					         </div>
		                </div>
					</li>
				</ul>
				
			</div>
			<div class="col-sm-2">
				<a href="" class="yonghu">
				<i class="glyphicon glyphicon-user" style="color:#fff;line-height: 70px;font-size: 16px;"></i>
			    </a>
				<a href="">
				<div class="col-sm-9 gouwuche pull-right">
					<p class="pull-left" style="text-indent: 15px;margin-right: 5px;">购物车</p>
                    <i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
			    </a>
			</div>
		</div>
		
	</div>
	</header>
	<!-- 头部导航  end -->

	@section('center')
	<section>
		<div class="container-fluid" style="height: auto; background-color: #efeeeb;">
			<div class="col-xs-12" style="height: 530px; padding: 0px;">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="" id="xiantiao">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
					      <img src="holder.js/100px530" alt="...">
					      <div class="carousel-caption">
					      </div>
				    </div>
				    <div class="item">
				      <img src="holder.js/100px530?bg=#265" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="holder.js/100px530?bg=#654" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="holder.js/100px530?theme=sky" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				  </div>
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
			
		    </div>
		    <div class="col-xs-12" style="padding: 0px; margin-top: 10px;">
				<div class="col-xs-4 nuy">
					<a href="">
					<div class="col-xs-11.5 nuy-one">
						<img src="holder.js/100px260?bg=#dec0f3" alt="">
						<p class="col-xs-12">
							努比亚Z17S无边框全面屏 未来全面而来
						</p>
					</div>
				    </a>
				</div>
				<div class="col-xs-4 nuy">
					<a href="">
					<div class="col-xs-11.5 nuy-one">
						<img src="holder.js/100px260?bg=#dec0f3" alt="">
						<p class="col-xs-12">
							努比亚Z17S无边框全面屏 未来全面而来
						</p>
					</div>
				    </a>
				</div>
				<div class="col-xs-4 nuy">
					<a href="">
					<div class="col-xs-11.5 nuy-one">
						<img src="holder.js/100px260?bg=#dec0f3" alt="">
						<p class="col-xs-12">
							努比亚Z17S无边框全面屏 未来全面而来
						</p>
					</div>
				    </a>
				</div>
			</div>
	</div> 
	</section>
	@show

	<!-- 脚步版权 start -->
	<footer>
		<div class="container-fluid" style="background-color: #efeeeb;">
			<div class="container banquan">
				<div class="col-xs-2 banquan-one">
					<h4>关于我们</h4>
					<ul class="list-unstyled">
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
					</ul>
				</div>
				<div class="col-xs-2 banquan-one">
					<h4>关于我们</h4>
					<ul class="list-unstyled">
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
					</ul>
				</div>
				<div class="col-xs-2 banquan-one">
					<h4>关于我们</h4>
					<ul class="list-unstyled">
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
					</ul>
				</div>
				<div class="col-xs-2 banquan-one">
					<h4>关于我们</h4>
					<ul class="list-unstyled">
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
					</ul>
				</div>
				<div class="col-xs-2 banquan-one">
					<h4>关于我们</h4>
					<ul class="list-unstyled">
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
						<li><a href="">个人中心</a></li>
					</ul>
				</div>
				<div class="col-xs-2 banquan-one">
					<h4>全国服务热线</h4>
					<ul class="list-unstyled">
						<li><a href=""><i class="glyphicon glyphicon-earphone"></i> 400-700-6600</a></li>
						<li>周一到周日 8:30 20:30</li>
						<li>(全年无休)</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container foot">
				<ul class="list-unstyled">
					<li><img src="/image/banquan1.png" alt=""></li>
					<li class="col-xs-12 col-xs-offset-5">
						<p class="glyphicon glyphicon-cloud"></p>
						<p class="glyphicon glyphicon-book"></p>
						<p class="glyphicon glyphicon-comment"></p>
					</li>
					<li class="col-xs-12" style="margin-top: 5px;">2012-2017 努比亚技术有限公司 版权所有 <span><a href="">粤ICP备10006213号-2</a></span>
					</li>
					<li class="col-xs-12" style="margin-top: 5px;">
						<img src="/image/gongshang.jpg" alt="" width="20" height="30">
						ICP经营许可证编号：粤B2-20120688 <span><a href=""><img src="/image/gongshang2.png" alt="">粤公网安备 44030502000309号</a></span>
					</li>
					<li>
						<a href="">加入我们</a>
						<i>-</i>
						<a href="">公益</a>
						<i>-</i>
						<a href="">星空之约</a>
						<i>-</i>
						<a href="">问题反馈</a>
						<i>-</i>
						<a href="">简体中文</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	<!-- 脚步版权 end -->

</body>
</html>