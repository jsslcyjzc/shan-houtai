//nubia b2c
//Date:2015-04-15


var NUBIA_STORE_COMMON={
    init : function(){
      this.goodsHover();
        this.subNavHover();
		this.productNav("#product");
		this.productNav("#acc");
		this.productPlay();
    },
    subNavHover: function(){
        jQuery("ul.list-inline>li").find('.list').css({"display":"block","height":"0"});
        jQuery("ul.list-inline>li").mouseenter(function() {
            jQuery(this).find('.list').stop().animate({height:"240px"},300);
        }).mouseleave(function () {
            jQuery(this).find('.list').stop().animate({height:"0"},300);
        });
    },
        goodsHover : function(){
            var goodsBox=jQuery('li.goods-hover-shows'),
                    $price = goodsBox.find('.price'),
                    $btn = goodsBox.find('.nbc-pro-btn');



            goodsBox.each(function(i,j){
                var $goods  = jQuery(j),
                        $btn    = $goods.find('div.nbc-pro-btn'),
                        $price  = $goods.find('div.price'),
                        pfigure = $goods.find('div.nbc-pro-cont');

                $goods.hover(function(){
                    $btn.toggle()
                    $price.toggle()
                });
                /*
                 j.on({
                 mouseenter : function(){
                 $btn.clearQueue().animate({left:0+'%'},600,'easeInOutQuad');
                 pfigure.clearQueue().animate({left:-15+'px'},450,'easeInOutQuad');
                 $price.clearQueue().animate({left:-100+'%'},400,'easeInOutQuad');
                 },
                 mouseleave : function(){
                 $btn.css({right:0}).clearQueue().animate({left:100+'%'},600,'easeInOutQuad');
                 pfigure.clearQueue().animate({left:0+'%'},450,'easeInOutQuad');
                 $price.clearQueue().animate({left:0+'%'},400,'easeInOutQuad');
                 }
                 })
                 */
            });
        },
    productNav: function(elem){
        var $elem = jQuery(elem); 
        var $ul = $elem.find('ul'), $li = $elem.find('li'),
            moving = false, $width = $li.length * $li.width() - 1,
            offset = $elem.find(".container").width(),
            num    = Math.floor($width / offset),
            distace = -offset * num;
            
        
        var $right = $elem.find(".arrow-right"),
            $left  = $elem.find(".arrow-left");

        $right.click(function(e) {
            e.preventDefault();
            if(moving) return;
            moving = true;
            var temp = parseInt($ul.css("left"));
           

            if(temp > distace) {
                $ul.animate({ left: temp - offset }, "slow", stop_moving);
            } else {
                $ul.animate({ left: temp - 10 }, "fast");
                $ul.animate({ left: temp }, "fast", stop_moving);
            }
        });
        $left.click(function(e) {
            e.preventDefault();
            if(moving) return;
            moving = true;
            var temp = parseInt($ul.css("left"));
            //console.log(temp)

            if(temp < 0) {
                $ul.animate({ left: temp + offset }, "slow", stop_moving);
            } else {
                $ul.animate({ left: temp + 10 }, "fast");
                $ul.animate({ left: temp }, "fast", stop_moving);
            }
        });
        var stop_moving = function() {
            moving = false
        };
    },
    productPlay: function(){
        // 视频播放
        var $btnplay=jQuery('.btnplay');
        $btnplay.on('click', function(){

            var url = jQuery(this).attr('videosrc'),
               so = new SWFObject("http://static.nubia.cn/js_new/CuPlayerMiniV3_Black_S.swf","CuPlayer","640","400","9","#000000");
               so.addParam("allowfullscreen","true");
               so.addParam("allowscriptaccess","always");
               so.addParam("wmode","opaque");
               so.addParam("quality","high");
               so.addParam("salign","lt");
               so.addVariable("CuPlayerFile", url);
               so.addVariable("CuPlayerShowImage","true");
               so.addVariable("CuPlayerWidth","640");
               so.addVariable("CuPlayerHeight","400");
               so.addVariable("CuPlayerAutoPlay","true");
               so.addVariable("CuPlayerAutoRepeat","false");
               so.addVariable("CuPlayerShowControl","true");
               so.addVariable("CuPlayerAutoHideControl","false");
               so.addVariable("CuPlayerAutoHideTime","6");
               so.addVariable("CuPlayerVolume","80");
               so.addVariable("CuPlayerGetNext","false");
               so.write("CuPlayer");
               
            jQuery("#btnplay-zz,#dialog").show(); 
        })
        jQuery('.closed').click(function(){
            jQuery("#btnplay-zz,#dialog").hide(); 
        })
    }
};
NUBIA_STORE_COMMON.init();

jQuery("#collapse_btn").on('touchstart, click', function(e) {
    jQuery(document.documentElement).toggleClass('no-scroll');
    jQuery('#navbar-collapse-main li').toggleClass('opacity')
});
