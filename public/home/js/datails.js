
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


//选择颜色点击事件
$(function(){
   $(".sp-r > .lb > .bk").click(function(){
        $(this).addClass("bks").siblings("div").removeClass("bks");
   });
})

$(function(){
   $(".sp-r > .lb > .tz").click(function(){
        $(this).addClass("tzs").siblings("div").removeClass("tzs");
   });
})

$(function(){
   $(".sp-r > .lb > .fw").click(function(){
        $(this).addClass("fws").siblings("div").removeClass("fws");
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

$(function(){
	$(window).scroll(function(){
		// alert(111);
		// alert($(this).scrollTop());
		if ($(this).scrollTop()>1100) {
			$(".sp > .sp1 > .sp-l").css("top","250px");
            $(".sp > .sp1 > .sp-l").hide();
		}else if ($(this).scrollTop()>100) {
			$(".sp > .sp1 > .sp-l").show();
            $(".sp > .sp1 > .sp-l").css("top","80px");
            
		}else{
			$(".sp > .sp1 > .sp-l").show();
			$(".sp > .sp1 > .sp-l").css("top","200px");

			
		}
	})
})


