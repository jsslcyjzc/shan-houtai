
//导航选项卡
$(function(){
	$(".nav >.container > .dh > ul > li").mouseover(function(){
		$(this).addClass("action").siblings("li").removeClass("action");
	});
})

// 身体选项卡
$(function(){
	$(".big > .top > ul > li").click(function(){
		$(this).addClass("active").siblings("li").removeClass("active");
		$(".big > .content > div").eq($(this).index()).show().siblings("div").hide();
		
	});
})

//上导航
$(function(){
	$(window).scroll(function(){
		// alert(111);
		// alert($(this).scrollTop());
		if ($(this).scrollTop()>300) {
			$(".sbdh").slideDown();
		}else{
			$(".sbdh").slideUp();
		}
	})
})