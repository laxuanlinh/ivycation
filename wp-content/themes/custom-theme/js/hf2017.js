/*
Theme Name: hf2017
Theme URI: http://hiflyer.vn
Author: hiflyer.vn
Author URI: http://hiflyer.vn
Date start: 2016/08/25
Version: 1.1
*/

$(document).ready(function() {
	var ww = $(window).width();
	var wh = $(window).height();

	//---S: slider
	$("#hf-slider").css("height",wh-40);
	//---E: slider

	//---S: scroll
	$(window).scroll(function(){	
		var wh = $(window).height();
		var wp = $(window).scrollTop();		
		var visible = Math.round((wp/wh)*100);			
	    if(visible > 10){			    	
			$("#header").addClass('hf-static');							
	    }else{
	    	$("#header").removeClass('hf-static');	    	
	    }
	    if ($('#hfparallax').length) {		    				
		    aboutus = $('#hfparallax').offset().top; 
		    if (wp < aboutus) {
		    	$('.hf-runman').css('left', wp/aboutus * 38 + "%");	    	
		    }  	
	    }
	    if ($('#services').length) {
		    hfparallaxideas = $("#services").offset().top;
		    if (wp < hfparallaxideas){
				$(".hf-ideas2").css('left', 17 - (wp)/hfparallaxideas * 11 + "%");
				$(".hf-ideas2").css('background-position', '0px center');					
				$(".hf-ideas5").css('opacity', 0);
		    }else{
				$(".hf-ideas5").css('opacity', 1);
				$(".hf-ideas2").css('background-position', "-" + parseInt($(".hf-ideas2").width()) * (26 / 111) + "px center");	
		    }	
	    }	
	}).scroll();	
	//---E: scroll

	//Cache reference to window and animation items
	var $animation_elements = $('.group-tree');
	var $window = $(window);	
	$window.scroll(function(){
		check_if_in_view();
	}).scroll();	

	function check_if_in_view() {
	  var window_height = $window.height();
	  var window_top_position = $window.scrollTop();
	  var window_bottom_position = (window_top_position + window_height);

	  $.each($animation_elements, function() {
	    var $element = $(this);
	    var element_height = $element.outerHeight();
	    var element_top_position = $element.offset().top;
	    var element_bottom_position = (element_top_position + element_height);

	    //check to see if this current container is within viewport
	    if ((element_bottom_position >= window_top_position) &&
	        (element_top_position <= window_bottom_position)) {
	      $element.addClass('in-view');
	    } else {
	      $element.removeClass('in-view');
	    }
	  });
	}	

	//---S: closemenu
	$("#mainmenuonmobile").click(function(){
		$("body").toggleClass("menumobile-open");		
	});
	$(document).mouseup(function (e){
		var container = $('.hf-mainmenu');
		if (!container.is(e.target)&& container.has(e.target).length === 0){
			$("body").removeClass('menumobile-open');
		}
	});	
	$(document).on("mousedown touchstart",function(e){
	  var $info = $('.hf-mainmenu');
	  if (!$info.is(e.target) && $info.has(e.target).length === 0) {
	    $("body").removeClass('menumobile-open');
	  }
	});	

	$("ul.nav.menu > li.parent:eq(0)").click(function(){
		$(this).toggleClass("opensub");
	});
	//---E: closemenu
	
	//contact
	$('.selectpicker').selectpicker();
	
});

function menuAnimation() {
	if ($(".hf-mainmenu-container").hasClass("open")) {
		setTimeout(function() {
	        $(".hf-mainmenu-container").fadeIn();
	        var n = 0;
	        $(".hf-mainmenu-content > ul.nav.menu > li").each(function() {
	            var t = $(this);			            
	            setTimeout(function() {
	                t.css({
					  '-webkit-transform' : 'translate(0px,0px)',
					  '-moz-transform'    : 'translate(0px,0px)',
					  '-ms-transform'     : 'translate(0px,0px)',
					  '-o-transform'      : 'translate(0px,0px)',
					  'transform'         : 'translate(0px,0px)'
	                })
	            }, n);
	            n += 100
	        });		
	        setTimeout(function(){
		        $('#hfheaderlang').css({
					'-webkit-transform' : 'translate(0px,0px)',
					'-moz-transform'    : 'translate(0px,0px)',
					'-ms-transform'     : 'translate(0px,0px)',
					'-o-transform'      : 'translate(0px,0px)',
					'transform'         : 'translate(0px,0px)'			        	
		        });	 
		        $('#hfheadersocial').css({
					'-webkit-transform' : 'translate(0px,0px)',
					'-moz-transform'    : 'translate(0px,0px)',
					'-ms-transform'     : 'translate(0px,0px)',
					'-o-transform'      : 'translate(0px,0px)',
					'transform'         : 'translate(0px,0px)'			        	
		        });	 
	        },100 * $(".hf-mainmenu-content > ul.nav.menu > li").length);       
		}, 200);
	}else{
		setTimeout(function() {
	        var n = 30 * $(".hf-mainmenu-content > ul.nav.menu > li").length;
	        $(".hf-mainmenu-content > ul.nav.menu > li").each(function() {
	            var t = $(this);
	            setTimeout(function() {
	                t.css({
					  '-webkit-transform' : 'translate(0px,1000px)',
					  '-moz-transform'    : 'translate(0px,1000px)',
					  '-ms-transform'     : 'translate(0px,1000px)',
					  '-o-transform'      : 'translate(0px,1000px)',
					  'transform'         : 'translate(0px,1000px)'
	                })
	            }, n);
	            n -= 30
	        });	
	        setTimeout(function(){
		        $('#hfheaderlang').css({
					'-webkit-transform' : 'translate(1000px,0px)',
					'-moz-transform'    : 'translate(1000px,0px)',
					'-ms-transform'     : 'translate(1000px,0px)',
					'-o-transform'      : 'translate(1000px,0px)',
					'transform'         : 'translate(1000px,0px)'			        	
		        });	 
		        $('#hfheadersocial').css({
					'-webkit-transform' : 'translate(-1000px,0px)',
					'-moz-transform'    : 'translate(-1000px,0px)',
					'-ms-transform'     : 'translate(-1000px,0px)',
					'-o-transform'      : 'translate(-1000px,0px)',
					'transform'         : 'translate(-1000px,0px)'			        	
		        });	 
	        },60 * $(".hf-mainmenu-content > ul.nav.menu > li").length);  			 
	        $(".hf-mainmenu-container").fadeOut(400);
	    }, 300);
	}
}