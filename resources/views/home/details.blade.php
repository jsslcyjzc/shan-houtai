@extends('home.layout.home')
@section('title')
  <title>努比亚详情</title>
@endsection

	    <link rel="stylesheet" href="/home/css/details.css">
@section('js')
		<script src="/home/js/datails.js"></script>

    
@stop
@section('center')
	<!-- 导航start -->
	<div class="nav">
		<div class="container">
			<div class="col-ms-12 dh">
				<ul class="list-unstyled">
		          <li class="action">
					<p>Z17S全面屏</p>
				  </li>
					<li class="li1" style="margin-left: 15px;">
			         <p>Z17miniS小牛8</p>
			        </li>
					<li>
					 <p>Z17旗舰版</p>
				    </li>
					<li>
					 <p>Z17畅享版</p>
				  </li>
				  <li class="li1">
					 <p>nubiaZ17mini</p>
				  </li>
				  <li>
					 <p>nubiaZ11</p>
				  </li>
				  <li>
					 <p>nubiaM2</p>
				  </li>
				  <li>
					 <p>nubiaN2</p>
				  </li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 导航end -->
   </header>
   <!-- 商品介绍start -->
  <!-- 商品start -->
  <div class="sp" style="margin-top: 88px;">
   <div class="container sp1">
     
	   <div class="col-md-4 sp-l">
         <table border="0" cellpadding="20" cellspacing="0">
          <tr>
            <td colspan="5" class="new">

              <iframe src="/images/2.jpg" frameborder="0" width="380" height="400" name="dt" style="margin-left: -15px;"></iframe>

            </td>
          </tr>
          <tr class="xt">
            @foreach($goods_pic as $k=>$v)
            
            <td>
              <a href="{{$v->pic}}" target="dt" style="width: 380px;height: 550px;">
                <img src="{{$v->pic}}" style="width: 90px;height: 90px;margin-left: -14px;">
              </a>
            </td>
            @endforeach
           
          
          </tr>
          </table>
         <div class="sp-l-sc">
         	<div class="sp-l-sc-l glyphicon glyphicon-share">
         	   <a href="#">分享</a>
         	</div>
         	<div class="sp-l-sc-r glyphicon glyphicon-star-empty">
         		<a href="#">收藏</a>
         	</div>
         </div>
	   </div>
     
       <div class="col-md-1"></div>
	   <div class="col-md-7 sp-r">
	   	 <div class="sp-r-t">
	   	 	<ul class="list-unstyled list-inline">
	   	 		<li class="li1">{!!$goods->title!!}</li>
	   	 		<li class="li2">{{$goods->price}}</li>
	   	 		<li class="pull-right">
	   	 			<a href="#">查看详情</a></li>
	   	 	</ul>
	   	 </div>
          
         <div class="col-md-12 qg">
         	<a href="#">【抢购时间】12月7日10点抢购</a>
         </div>
         <div class="col-md-12 qg">
         	<a href="#">【赠】当天购机赠原装手机壳一个</a>
         </div>
         <div class="col-md-12 qg">
         	<a href="#">【分期免息】支持支付宝花呗6期分期免息</a>
         </div>
         
         <!-- 选择颜色 -->
         <div class="col-md-12 ys">
         	1、选择颜色
         </div>
         <div class="col-md-12 lb">
         	<div class="col-md-5 bk bks active">
         		<p>极光蓝</p>
         	</div>
          <div class="col-md-1"></div>
         	<div class="col-md-5 bk">
         		<p>黑金</p>
         	</div>
         </div>
         
         <!-- 选择版本 -->
          <div class="col-md-8 ys">
         	2、选择版本
          </div>
          <div class="col-md-10 lb">
          	 <div class="col-md-6 bk bks">
          	 	<p>6GB+64GB</p>
          	 </div>
          </div>

          <!-- 选择优惠配件套餐 -->
          <div class="col-md-12 ys">
         	3、选择优惠配件套餐
          </div>
          <div class="col-md-12 lb">
          	<div class="col-md-4 tz tzs" style="margin-left: 14px;">
          		<p class="p1">Z17S套装版(含屏碎保)</p>
          		<p class="p2">￥3399.00<span>&nbsp;省 36.00元</span></p>
          	</div>
            <div class="col-md-1"></div>
          	<div class="col-md-4 tz sj">
          		<p class="p1">仅手机</p>
          		<p class="p2">￥2999.00</p>
          	</div>
          </div>

          <!-- 选择保障服务 -->
          <div class="col-md-12 ys">
         	4、选择保障服务(可选)
         	<a href="#">了解"nubia保障服务"</a>
          </div>
          <div class="col-md-12 lb">
          	<div class="col-md-10 fw fws">
          		<p>Z17S (6GB+64GB) 屏碎宝 (1年内保修一次)&nbsp;&nbsp;&nbsp; ￥129.00</p>
          	</div>
          </div>
          <div class="col-md-12 lb">
          	<div class="col-md-10 fw">
          		<p>Z17S (6GB+64GB) 意外宝 (1年内保修一次)&nbsp;&nbsp;&nbsp; ￥179.00</p>
          	</div>
          </div>
          <div class="col-md-12 lb">
          	<div class="col-md-8 fw">
          		<p>Z17S (6GB+64GB) 意外宝&nbsp;&nbsp;&nbsp; ￥249.00</p>
          	</div>
          </div>

          

            <!-- 支持花呗分期 -->
          <div class="col-md-12 zc">

            <div class="col-md-12 hb">
              <p>支持花呗分期 :</p>
            </div>
            <div class="col-md-12 fq">
              <div class="col-md-4 fq1">
                <p class="p1">￥1022.66*3</p>
                <p>(含￥69.98手续费)</p>
              </div>
              <div class="col-md-4 fq1 fq2">
                <p class="p1">￥499.83*6</p>
                <p>(含￥0.00手续费)</p>
              </div>
              <div class="col-md-4 fq1 fq2">
                <p class="p1">￥268.66*12</p>
                <p>(含￥224.93手续费)</p>
              </div>
            </div>
          </div>
          <!-- 您选择的商品 -->
          <div class="col-md-12 xz">
            <form class="add-to-cart" action="/cart" method="post">
             <div class="col-md-12 sl">
                <h4 style="float: left;margin-left: -10px;">数量:</h4>
                <input type="text" placeholder="" name="num" value="1" style="float: left;width: 50px;height: 35px;text-align: center;">
                <div class="clearfix"></div>
                <input type="hidden" name="goods_id" value="{{$goods->id}}">
            
            </div>

              <div class="col-md-12 xzsp">
              	<p class="xz1">您选择的商品:</p>
              	<p class="p1">
              		{!!$goods->title!!}
              	</p>
              </div>
              
              <!-- 分享 -->
              <div class="col-md-12" style="margin-top: 20px;margin-left: -15px;margin-bottom: 10px;">
                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                
              </div>
              <hr>

            	<div class="col-md-8 tj">
            		<button class="btn btn-primary tj1">
            			立即购买
            		</button>
            	</div>
              
              </form>
          </div>
	   </div>	
	</div>
   </div>
   <!-- 商品介绍end -->
	<!-- 商品stop -->
	<div class="clearfix"></div>
   <!-- 身体start -->
   <section>
   	 <div class="container-fluid pp">
   	 	<div class="big">
   	 		<div class="top">
   	 			<ul class="list-unstyled list-inline">
   	 				<li class="active">商品详情</li>
   	 				<li>|</li>
   	 				<li>规格参数</li>
   	 			</ul>
   	 		</div>
   	 		<div class="content">
   	 			<div class="active tab spxq">
            @foreach($goods_pic as $k=>$v)
   	 		    	<img src="{{$v->pic}}" style="width: 100%;height: 400px;">
            @endforeach
   	 		    	<!-- <img src="holder.js/100px300?bg=#ade&text=111">
   	 		    	<img src="holder.js/100px300?bg=#abe&text=111"> -->
   	 			</div>
   	 			<div class="tab active cs"></div>
   	 			<div class="tab active cs jb">
   	 				<!-- 第一个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx">
   	 		    		<p class="p1">基本信息</p>
   	 		    		<div class="js">
   	 		    			<img src="holder.js/100px295">
   	 		    			<span>
   	 		    				机身颜色
   	 		    			</span>
   	 		    			<ul class="list-unstyled list-inline">
   	 		    				<li>
   	 		    					<i></i>
   	 		    				  <a href="#">黑金</a>
   	 		    			   </li>
   	 		    				<li>
   	 		    					<i class="a1"></i>
   	 		    				<a href="#">极光蓝</a>
   	 		    			   </li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	   <div class="xx">
                	     <p>高度<span>147.46mm</span></p>
                	     <p>高度<span>147.46mm</span></p>
                	     <p>高度<span>147.46mm</span></p>
                	     <p>高度<span>147.46mm</span></p>
                	     <p>高度<span>147.46mm</span></p>
                	     <p>高度<span>147.46mm</span></p>
                	     <p>高度<span>147.46mm</span></p>
                       </div>
   	 		    	</div>
   	 		    	
   	 		    	<!-- 第一个end -->
                    
                    <!-- 第二个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx xj">
   	 		    		<p class="p1">相机像素</p>
   	 		    		<div class="sxt">
   	 		    			<span>后置主摄像头</span>
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">{!!$goods->content!!}</li>
   	 		    				
   	 		    			</ul>
   	 		    		</div>
   	 		    	   <div class="xx1">
                	     <span>前置摄像头</span>
                	     <ul class="list-unstyled">
                	     	<li class="li1">500万像素+500万像素</li>
                	     	<li>500万像素+500万像素</li>
                	     	<li>500万像素+500万像素</li>
                	     	<li>500万像素+500万像素</li>
                	     	<li>500万像素+500万像素</li>
                	     	<li>500万像素+500万像素</li>
                	     </ul>
                       </div>
   	 		    	</div>
   	 		    	
   	 		    	<!-- 第二个end -->

   	 		    	 <!-- 第三个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx pm">
   	 		    		<p class="p1">屏幕</p>
   	 		    		<div class="cc">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">尺寸</li>
   	 		    				<li>尺寸</li>
   	 		    				<li>尺寸</li>
   	 		    				<li>尺寸</li>
   	 		    				<li>尺寸</li>
   	 		    				<li>尺寸</li>
   	 		    				<li>尺寸</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	   <div class="xx2">
                	     <ul class="list-unstyled">
                	     	<li class="li1">5.73英寸</li>
                	     	<li>5.73英寸</li>
                	     	<li>5.73英寸</li>
                	     	<li>5.73英寸</li>
                	     	<li>5.73英寸</li>
                	     	<li>5.73英寸</li>
                	     	<li>5.73英寸</li>
                	     </ul>
                       </div>
   	 		    	</div>
   	 		    	<!-- 第三个end -->

   	 		    	<!-- 第四个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx clq">
   	 		    		<p class="p1">处理器</p>
   	 		    		<div class="cc">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">骁龙835处理器 (MSM8998)</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第四个end -->

   	 		    	<!-- 第五个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx nc">
   	 		    		<p class="p1">内存与存储</p>
   	 		    		<div class="sc">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li class="li2">骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    		<div class="kzk">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">拓展卡</li>
   	 		    				<li>拓展卡</li>
   	 		    				<li class="li3">拓展卡</li>
   	 		    				<li>拓展卡</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第五个end -->

   	 		    	<!-- 第六个start -->
   	 		        <div class="col-md-8 col-md-offset-2 jbxx tx">
   	 		    		<p class="p1">内存与存储</p>
   	 		    		<div class="qwt">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">全网通版7模24频</li>
   	 		    				<li>
   	 		    					<div class="col-md-12 qwt1">
   	 		    						<div class="col-md-2 gsm gsm1">
   	 		    							<p class="p2">GSM</p>
   	 		    							<p class="p3">850/900/</p>
   	 		    						</div>
   	 		    						<div class="col-md-2 gsm">
   	 		    							<p class="p2">GSM</p>
   	 		    							<p class="p3">850/900/</p>
   	 		    						</div>
   	 		    						<div class="col-md-2 gsm">
   	 		    							<p class="p2">GSM</p>
   	 		    							<p class="p3">850/900/</p>
   	 		    						</div>
   	 		    						<div class="col-md-2 gsm">
   	 		    							<p class="p2">GSM</p>
   	 		    							<p class="p3">850/900/</p>
   	 		    						</div>
   	 		    						<div class="col-md-2 gsm">
   	 		    							<p class="p2">GSM</p>
   	 		    							<p class="p3">850/900/</p>
   	 		    						</div>
   	 		    						<div class="col-md-2 gsm">
   	 		    							<p class="p2">GSM</p>
   	 		    							<p class="p3">850/900/</p>
   	 		    						</div>
   	 		    					</div>
   	 		    				</li>
   	 		    				<li class="clearfix"></li>
   	 		    				<li class="li1 li2">全网通3.0</li>
   	 		    				<li>
   	 		    					<ol class="list-unstyled">
   	 		    						<li>(1)双Nano SIM卡槽,任意卡槽均可设置为上网卡</li>
   	 		    						<li>(1)双Nano SIM卡槽,任意卡槽均可设置为上网卡</li>
   	 		    						<li>(1)双Nano SIM卡槽,任意卡槽均可设置为上网卡</li>
   	 		    						<li>(1)双Nano SIM卡槽,任意卡槽均可设置为上网卡</li>
   	 		    					</ol>
   	 		    				</li>
   	 		    				<li class="li3">
   	 		    					<span>WLAN功能</span>
   	 		    					<span class="span1">蓝牙</span>
   	 		    				</li>
   	 		    				<li>
   	 		    					<ol class="list-unstyled list-inline">
   	 		    						<li>无线网络</li>
   	 		    						<li class="li3">bluetooth</li>
   	 		    					</ol>
   	 		    				</li>
   	 		    				<li style="margin-top: -2px;">
   	 		    					<ol class="list-unstyled list-inline">
   	 		    						<li>无线网络</li>
   	 		    						<li class="li3">bluetooth</li>
   	 		    					</ol>
   	 		    				</li>
   	 		    			</ul>
   	 		    		</div>
   	 			</div>
               <!-- 第六个end --> 

               <!-- 第七个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx dh">
   	 		    		<p class="p1">传感器</p>
   	 		    		<div class="sc">
   	 		    			<ul class="list-unstyled list-inline">
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第七个end -->

   	 		    	<!-- 第八个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx dh">
   	 		    		<p class="p1">导航定位</p>
   	 		    		<div class="sc" style="margin-left: 65px;">
   	 		    			<ul class="list-unstyled list-inline">
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第八个end -->

   	 		    	<!-- 第九个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx dh">
   	 		    		<p class="p1">系统与应用</p>
   	 		    		<div class="sc" style="margin-left: 38px;">
   	 		    			<ul class="list-unstyled list-inline">
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    				<li>电子罗盘</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第九个end -->

   	 		    	<!-- 第十个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx nc">
   	 		    		<p class="p1">内存与存储</p>
   	 		    		<div class="sc">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li class="li2">骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li class="li2">骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    				<li class="li2">骁龙835处理器</li>
   	 		    				<li>骁龙835处理器</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第十个end -->

   	 		    	<!-- 第十一个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx aj">
   	 		    		<p class="p1">按键与接口</p>
   	 		    		<img src="holder.js/318x344" style="margin-left: 52px;">
   	 		    		<img src="holder.js/318x344" style="margin-left: 14px;">
   	 		    	</div>
   	 		    	<!-- 第十一个end -->

   	 		    	<!-- 第十二个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx clq">
   	 		    		<p class="p1">电池</p>
   	 		    		<div class="cc">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">骁龙835处理器 (MSM8998)</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第十二个end -->

   	 		    	<!-- 第十三个start -->
   	 		    	<div class="col-md-8 col-md-offset-2 jbxx clq bz">
   	 		    		<p class="p1">包装</p>
   	 		    		<div class="cc">
   	 		    			<ul class="list-unstyled">
   	 		    				<li class="li1">骁龙835处理器 (MSM8998)</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    				<li>骁龙835处理器 (MSM8998</li>
   	 		    			</ul>
   	 		    		</div>
   	 		    	</div>
   	 		    	<!-- 第十三个end -->
   	 		</div>
   	 	</div>
   	 </div>
   </section>

   <!-- 身体end -->
   <div class="clearfix"></div>
   
   <!-- 上边导航start -->
   <div class="sbdh">
   	  <div class="fk" style="float: right;">
   	  	<p>{{$goods->title}} ￥{{$goods->price}}</p>
   	  	<button class="btn btn-lg">立即购买</button>
   	  </div>
   </div>
   <!-- 上边导航end -->
@stop

