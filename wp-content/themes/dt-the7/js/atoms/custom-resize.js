
	$window.on("debouncedresize", function( event ) {
		dtGlobals.resizeCounter++;

		//Photos widget
		if ( $.isFunction($.fn.calcPics) ) {
			$(".instagram-photos").calcPics();
		}
		//Filter responsiveness
		$.mobileHeader();
		$.headerBelowSlider();
		//set correct width for header in boxed layout
		if($page.hasClass('boxed')){
			var value = $page.css("maxWidth");
			var hasPx = value.indexOf('px') >= 0;
			var hasPct = value.indexOf('%') >= 0;
			if(hasPx) {
				$(".masthead").addClass("width-in-pixel");
			}
			if(hasPct){
				$(".masthead.full-width:not(.side-header)").css({
					width: $page.width()
				});
			}

		}

		/*Mobile header*/
		if(window.innerWidth >= dtLocal.themeSettings.mobileHeader.firstSwitchPoint){
			$page.removeClass("show-mobile-header");
			$page.addClass("closed-mobile-header");
			$body.removeClass("show-sticky-mobile-header");
			$body.removeClass("show-overlay-mobile-header").addClass("closed-overlay-mobile-header");
			$(".mobile-sticky-header-overlay").removeClass("active");
			$(".dt-mobile-menu-icon").removeClass("active");
			$html.removeClass("menu-open");
			if (!headerBelowSliderExists ) {
				if (!bodyTransparent) {
					$('.masthead:not(.mixed-header):not(#phantom):not(.side-header)')
					.velocity({
						translateY : "",
					}, 0);
				}
			}
		}

		if(window.innerWidth <= dtLocal.themeSettings.mobileHeader.firstSwitchPoint){

			//Add mobile class to header to avoid conflict with floating menu
			if(!$('.masthead').hasClass("masthead-mobile")){
				$('.masthead:not(.mixed-header):not(#phantom)').addClass("masthead-mobile");
			}
			//Add class to header after mobile switch
			if(!$('.masthead').hasClass("masthead-mobile-header")){
				$('.masthead:not(#phantom)').addClass("masthead-mobile-header");
			}
		}else{
			$('.masthead:not(.mixed-header):not(#phantom)').removeClass("masthead-mobile");
			$('.masthead:not(#phantom)').removeClass("masthead-mobile-header");
		}

		// if(window.innerWidth <= dtLocal.themeSettings.mobileHeader.firstSwitchPoint && window.innerWidth > dtLocal.themeSettings.mobileHeader.secondSwitchPoint){
		// 	//Check if top bar not empty on mobile
		// 	if($('.top-bar .left-widgets').find(".in-top-bar-left").length > 0 || $('.top-bar .right-widgets').find(".in-top-bar-right").length > 0){
		// 		$('.top-bar').removeClass('top-bar-empty');
		// 	}else{
		// 		$('.top-bar').addClass('top-bar-empty');
		// 	}
		// }else if(window.innerWidth <= dtLocal.themeSettings.mobileHeader.secondSwitchPoint) {
		// 	if($('.top-bar .left-widgets').find(".in-top-bar").length > 0){
		// 		$('.top-bar').removeClass('top-bar-empty');
		// 	}else{
		// 		$('.top-bar').addClass('top-bar-empty');
		// 	}
		// }else{
		// 	if(!$('.top-bar .mini-widgets').find(".show-on-desktop").length > 0){
		// 		$('.top-bar').addClass('top-bar-empty');
		// 	}else{
		// 		$('.top-bar').removeClass('top-bar-empty');
		// 	}
		// }
		
		//Custom select
		$('.mini-nav select').trigger('render');
		
		//Fancy headers
		$.fancyFeaderCalc();

		
		/*Detect first/last visible item microwidgets*/
		$(".mini-widgets, .mobile-mini-widgets").find(" > *").removeClass("first last");
		$(".mini-widgets, .mobile-mini-widgets").find(" > *:visible:first").addClass("first");
		$(".mini-widgets, .mobile-mini-widgets").find(" > *:visible:last").addClass("last");
	
		
		
		//Set full height stripe
		$(".dt-default").each(function(){
			var $_this = $(this),
				$_this_min_height = $_this.attr("data-min-height");
			if($.isNumeric($_this_min_height)){
				$_this.css({
					"minHeight": $_this_min_height + "px"
				});
			}else if(!$_this_min_height){
				$_this.css({
					"minHeight": 0
				});
			}else if($_this_min_height.search( '%' ) > 0){
				$_this.css({
					"minHeight": $window.height() * (parseInt($_this_min_height)/100) + "px"
				});
			}else{
				$_this.css({
					"minHeight": $_this_min_height
				});
			};
		});
		/*Floating content*/
		
		$parentHeight = $floatContent.siblings(".project-wide-col").height();
        $floatContentHeight = $floatContent.height();
        setFloatinProjectContent();

		/* Sticky footer */

		$(".mobile-false .footer-overlap .page-inner").css({
			'min-height': window.innerHeight - $(".footer").innerHeight(),
			'margin-bottom': $(".footer").innerHeight()
		});

	}).trigger( "debouncedresize" );