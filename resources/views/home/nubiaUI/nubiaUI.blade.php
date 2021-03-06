<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nubiaUI社区-nubiaUI官方论坛</title>


	    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
		<script src="/bootstrap/js/jquery.js"></script>
		<script src="/bootstrap/js/bootstrap.js"></script>
		<script src="/bootstrap/js/holder.min.js"></script>

		<link rel="stylesheet" href="/css/nubiaUI.css">
		<script src="/js/jquery-3.1.0.js"></script>
</head>
<body>
	<!-- 头导航 start -->
	<header>
	<div class="container-fluid top-nav">
		<div class="container">
			<ul class="list-unstyled list-inline pull-left">
				<li><a href="/">nubia商城</a></li>
				<li><a href="/index">nubia官网</a></li>
				<li><a href="">nubia微博</a></li>
				<li><a href="">nubia UI</a></li>
			</ul>
			<p class="pull-right"><a href="">登录</a></p>
		</div>
	</div>
	<div class="container-fluid bot-nav">
		<div class="container">
			<div class="col-xs-12 bot-nav-one">
				<div class="col-xs-4">
					<a href="" title="nubiaUI社区">
					<img src="/image/nubiaUI.png" alt="" width="285" height="28" class="pull-left">
				    </a>
				</div>
				<div class="col-xs-3 pull-right bot-nav-one-right">
					<p class="pull-left">帖子</p>
					<input type="text" class="pull-left" placeholder="请输入搜索内容">
				</div>
			</div>
			<div class="col-xs-12">
				<ul class="list-unstyled list-inline">
					<li><a href="/index">首页</a></li>
					<li><a href="">产品交流</a></li>
					<li><a href="">资源分享</a></li>
					<li><a href="">牛仔乐园</a></li>
					<li><a href="">产品反馈</a></li>
					<li><a href="">服务大厅</a></li>
					<li><a href="">ROM下载</a></li>
				</ul>
			</div>
		</div>
	</div>
	</header>
	<!-- 头导航 end -->
	<!-- 身体 start -->
	<section>
		<div class="container-fluid shenti">
			<div class="container">
				<div class="lunbotu" style="margin-top: 10px;">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators" id="xiantiao">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>
                           
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						  	@foreach($banner as $k=>$v)
						  	@if($k == 9)
						    <div class="active item" style="width: 1200px;height: 330px;">
							      <img src="{{ $v->pic }}" alt="..." style="width: 100%; height: 100%;">
							      <div class="carousel-caption">
							      </div>
						    </div>
						    @endif
						    @if($k == 10)
						    <div class="item" style="width: 100%;height: 330px;">
						      <img src="{{ $v->pic }}" alt="..." style="width: 100%; height: 100%;">
						      <div class="carousel-caption">
						      </div>
						    </div>
						    @endif
						    @if($k == 11)
						    <div class="item" style="width: 100%;height: 330px;">
						      <img src="{{ $v->pic }}" alt="..." style="width: 100%; height: 100%;">
						      <div class="carousel-caption">
						      </div>
						    </div>
						    @endif
						    @if($k == 12)
						    <div class="item" style="width: 100%;height: 330px;">
						      <img src="{{ $v->pic }}" alt="..." style="width: 100%; height: 100%;">
						      <div class="carousel-caption">
						      </div>
						    </div>
                            @endif
						    @endforeach
						  </div>
						  
					</div>
				</div>
				<div class="jinri" style="margin-top: 40px;">
					<div class="col-xs-5 jinri-left">
						<ul class="list-unstyled list-inline">
							<li>今日 : <span>410</span></li>
							<p class="pull-left">|</p>
							<li>昨日 : <span>410</span></li>
							<p class="pull-left">|</p>
							<li>帖子 : <span>410</span></li>
							<p class="pull-left">|</p>
							<li>会员 : <span>410</span></li>
						</ul>
					</div>
					<div class="col-xs-5 jinri-right" id="jinri-right">
						<p class="glyphicon glyphicon-pencil fabiao">
							发表主题
						</p>
					</div>
				</div>
				<div class="jinri">
				<div style="float: left;min-height: 500px;width: 750px;">
					@foreach($shequ as $k=>$v)
					<div class="col-xs-5 jinri-left jinri-left-one">
					  <div class="col-xs-12" id="nunuli">
					  	<a href="/article/304">
						<h4 class="pull-left">{{ $v->title }}</h4>
						</a>
                      </div>
                      <div class="col-xs-12">
                      	  <a href=""><img src="{{ $v->pic }}" alt="" width="100%" height="100%"></a>
                      </div>
                      <div class="col-xs-12">
                      	  <p>{!! $v->content !!}</p>
                      </div>
                      <div class="col-xs-12" style="margin-top: 3px;">
                      	  <img src="{{ $v->photo }}" alt="" class="pull-left touxiang" width="25" height="25">
                      	  <ul class="list-unstyled list-inline pull-left">
                      	  	  <li><a href="">{!! $v->author !!}</a></li>
                      	  	  <li>/</li>
                      	  	  <li>发布于: <span>{!! $v->time !!}</span></li>
                      	  	  <li>/</li>
                      	  	  <li>查看: <span>2086</span></li>
                      	  	  <li>/</li>
                      	  	  <li>回复: <span>143</span></li>
                      	  </ul>
                      </div>
					</div>
					@endforeach
				</div>
				<div style="float: right; min-height: 500px; width: 290px;">
					<a href="">
					<div class="col-xs-5 jinri-right jinri-right-one">
						<p>签到</p>
						<ul class="list-unstyled">
							<li>82人</li>
							<li>签到看排名</li>
						</ul>
					</div>
					</a>
					<div class="col-xs-5 jinri-right jinri-right-two" style="padding: 0px;">
						<div class="list-group col-xs-12" style="padding-right: 0px;margin-bottom: 0px;">
						  <a href="#" class="list-group-item disabled">
						    设置机型
						  </a>
						  <a href="#" class="list-group-item"><span>>></span></a>
						  <a href="#" class="list-group-item">请选择手机品牌<span>>></span></a>
						  <a href="#" class="list-group-item"><span>>></span></a>
						  <a href="#" class="list-group-item">请选择手机品牌<span>>></span></a>
						  <a href="#" class="list-group-item">
						  	<button type="button" class="btn btn-default btn-xs" style="width: 215px;margin-left: 15px;height: 30px;background-color: #ff370e;border: none;color: #fff;font-size: 15px;">确认</button>
						  </a>
						</div>
					</div>
					<div class="col-xs-5 jinri-right jinri-right-two jinri-right-there" style="padding: 0px;">
						<div class="panel panel-default" style="margin-bottom: 0px;">
						  <div class="panel-heading">常用版块</div>
						  <table class="table">
						    <tr>
						    	<td style="border-right: 1px solid #ebebeb;"><a href="">牛仔乐园</a></td>
						    	<td><a href="">服务大厅</a></td>
						    </tr>
						    <tr>
						    	<td style="border-right: 1px solid #ebebeb;"><a href="">牛仔乐园</a></td>
						    	<td><a href="">服务大厅</a></td>
						    </tr>
						    <tr>
						    	<td style="border-right: 1px solid #ebebeb;"><a href="">牛仔乐园</a></td>
						    	<td><a href="">服务大厅</a></td>
						    </tr>
						  </table>
						</div>
					</div>
					<div class="col-xs-5 jinri-right jinri-right-two jinri-right-there" style="padding: 0px;">
						<div class="panel panel-default" style="margin-bottom: 0px;">
						  <div class="panel-heading" style="border-bottom:#ebebeb; ">热门活动 <a href="" style="float: right;">更多</a></div>
						  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators" style="margin-bottom: 0px;">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>
						  <div class="carousel-inner" role="listbox">
						  	@foreach($banner as $k=>$v)
						  	@if($k == 13)
						    <div class="item active">
							      <img src="{{ $v->pic }}" alt="..." style="height: 100px;width: 288px;">
							      <div class="carousel-caption">
							      </div>
						    </div>
						    @endif
						    @if($k == 14)
						    <div class="item">
						      <img src="{{ $v->pic }}" alt="..." style="height: 100px;width: 288px;">
						      <div class="carousel-caption">
						      </div>
						    </div>
						    @endif
						    @if($k == 15)
						    <div class="item">
						      <img src="{{ $v->pic }}" alt="..." style="height: 100px;width: 288px;">
						      <div class="carousel-caption">
						      </div>
						    </div>
						    @endif
						    @if($k == 16)
						    <div class="item">
						      <img src="{{ $v->pic }}" alt="..." style="height: 100px;width: 288px;">
						      <div class="carousel-caption">
						      </div>
						    </div>
						    @endif
                            @endforeach
						  </div>
						  
							</div>
						</div>
					</div>
					<div class="col-xs-5 jinri-right jinri-right-two jinri-right-there" style="padding: 0px;">
						<div class="list-group col-xs-12" style="padding-right: 0px;margin-bottom: 0px;">
						  <a href="#" class="list-group-item disabled">
						    玩机必看
						  </a>
						  <a href="#" class="list-group-item bikan" style="border-top: 1px solid red;">工具 | Magisto视频编辑器</a>
						  <a href="#" class="list-group-item bikan">【攻略】贴心功能-红外遥控</a>
						  <a href="#" class="list-group-item bikan">【小南玩机】带你玩转手机管家</a>
						  <a href="#" class="list-group-item bikan">新年抢红包快人一步，nubia UI新版红包助</a>
						  <a href="#" class="list-group-item bikan">【摄影教程】拍照必备：玩转努比亚相机家</a>
						</div>
					</div>
					<div class="col-xs-5 jinri-right jinri-right-two" style="padding: 0px;min-height: 90px;" id="jinri-four">
						<div class="panel panel-default" style="margin-bottom: 0px;">
						  <div class="panel-heading">新手上路</div>
						  <button style="width: 274px;margin-top: 12px;margin-left: 7px;margin-bottom: 10px;background-color: #e94924;border: none;border-radius: 5px;height: 30px;font-size: 14px;color: #fff;" id="butt">【新手学堂】微信指纹支付的正确开启方式</button>
						</div>
					</div>
					<div class="col-xs-5 jinri-right jinri-right-two" style="padding: 0px;min-height: 90px;" id="jinri-four">
						<div class="panel panel-default" style="margin-bottom: 0px;">
						  <div class="panel-heading">论坛明星用户</div>
						    @foreach($banner as $k=>$v)
						      @if($k == 17)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 18)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 19)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 20)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 21)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 22)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 23)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 24)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 25)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 26)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 27)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @if($k == 28)
						      <a href="">
							      <ul class="list-unstyled" id="xiaoya">
							      	  <li><img src="{{ $v->pic }}" alt="" style="width: 48px;height: 48px;"></li>
							      	  <li><a href="" style="font-size: 12px;">{{ $v->bname }}</a></li>
							      </ul>
						      </a>
						      @endif
						      @endforeach
						</div>
					</div>
					<div class="col-xs-5 jinri-right jinri-right-two" style="padding: 0px;min-height: 90px;" id="jinri-four">
						<div class="panel panel-default" style="margin-bottom: 0px;">
						  <div class="panel-heading">nubiaUI社区客户端下载</div>
						  <div style="width: 288px;">
						  	@foreach($banner as $k=>$v)
						  	@if($k == 8)
						  	<a href="">
						  	   <img src="{{ $v->pic }}" alt="" style="margin: 15px;margin-left:70px;" width="145" height="145">
						  	</a>
						  	@endif
						  	@endforeach
						  </div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	<!-- 身体 end -->
	<!-- 版权 start -->
	<footer>
		<div class="container-fluid" style="height: 305px;background-color: #f1f1f1;">
			<div class="container">
				<div class="col-xs-12 banquan">
					<div class="lianjie">
						<h5>友情链接</h5>
						<ul class="list-unstyled list-inline">
							<li><a href="">努比亚官网</a></li>
							<li><a href="">努比亚京东</a></li>
							<li><a href="">努比亚天猫</a></li>
							<li><a href="">努比亚社区</a></li>
						</ul>
					</div>
					<div class="guanyu">
					    <ul class="list-unstyled list-inline pull-left">
					    	<li><a href="">关于我们</a></li>
					    	<li>|</li>
					    	<li><a href="">联系我们</a></li>
					    	<li>|</li>
					    	<li><a href="">新闻中心</a></li>
					    	<li>|</li>
					    	<li><a href="">加入我们</a></li>
					    	<li>|</li>
					    	<li><a href="">公益</a></li>
					    	<li>|</li>
					    	<li><a href="">星空之约</a></li>
					    </ul>
					    <a href="">
					    <p class="glyphicon glyphicon-folder-close pull-left" style="margin-left: 170px;"></p>
					    </a>
					    <a href="">
					    <p class="glyphicon glyphicon-tree-deciduous
					    pull-left" style="font-size: 18px;"></p>
					    </a>
					    <a href="">
					    <p class="glyphicon glyphicon-folder-close pull-left"></p>
					    </a>
					    <a href="">
					    <p class="glyphicon glyphicon-folder-close pull-left"></p>
					    </a>
					    <a href="">
					    <p class="glyphicon glyphicon-headphones pull-left"></p>
					    </a>
					    <span class="glyphicon glyphicon-earphone" style="margin-left: 10px;">
					    	服务热线:<a href="">400-700-6600</a>
					    </span>
                        <ol style="clear: both;" class="list-unstyled list-inline">
                        	<li>2012-2016 努比亚 版权所有 
                        		<a href="">粤ICP备10006213号-2</a>
                        	</li>
                        	<li>ICP经营许可证编号：粤B2-20120688
                        		<a href="">深圳市市场监督管理局企业主体身份公示</a>
                        		努比亚技术有限公司
                        	</li>
                        </ol>
                        <i>
                        	<a href="">
                        	<img src="/image/security.png" alt="">
                        	&nbsp;
                        	</a>
                        </i>

                        <i>
                        	<a href="">
                        	<img src="/image/toss_11.gif" alt="">
                        	</a>
                        </i>
				    </div>
				</div>
				
			</div>
		</div>
	</footer>
	<!-- 版权 end -->
</body>
</html>