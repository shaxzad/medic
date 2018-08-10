// If JavaScript is enabled remove 'no-js' class and give 'js' class
jQuery('html').removeClass('no-js').addClass('js');


// When DOM is fully loaded



function slider_rs() {
	// body...
jQuery(document).ready(function($) {


	/* Detect Touch Device
	 ---------------------------------------------------------------------- */
	(function() {

		if (Modernizr.touch) {

			$('body').addClass('touch-device');

		}

	})();


	/* Revolution Slider
	 ---------------------------------------------------------------------- */
	(function() {
		$('.fullwidthbanner').revolution( {	
			delay: 3000,												
			startwidth: 940,
			startheight: 580,
			onHoverStop: 'on',						// Stop Banner Timet at Hover on Slide on/off
			thumbWidth: 100,						// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight: 50,
			thumbAmount: 4,
			hideThumbs: 200,
			navigationType: 'both',					// Bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
			navigationArrows: 'verticalcentered',	// Nexttobullets, verticalcentered, none
			navigationStyle: 'round',				// Round,square,navbar
			touchenabled: 'on',						// Enable Swipe Function : on/off
			navOffsetHorizontal: 0,
			navOffsetVertical: 20,
			fullWidth: 'on',
			shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
		});
		$('.fullwidthbanner1').revolution( {	
			delay: 3000,												
			startwidth: 940,
			startheight: 580,
			onHoverStop: 'on',						// Stop Banner Timet at Hover on Slide on/off
			thumbWidth: 100,						// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight: 50,
			thumbAmount: 4,
			hideThumbs: 200,
			navigationType: 'both',					// Bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
			navigationArrows: 'verticalcentered',	// Nexttobullets, verticalcentered, none
			navigationStyle: 'round',				// Round,square,navbar
			touchenabled: 'on',						// Enable Swipe Function : on/off
			navOffsetHorizontal: 0,
			navOffsetVertical: 20,
			fullWidth: 'on',
			shadow: 0,							//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
			
		});

		$('.fullwidthbanner2').revolution( {	
			delay: 9000,
			parallax:"mouse",												
			parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
			keyboardNavigation:"on",
			soloArrowLeftHalign:"left",
			startwidth: 940,
			startheight: 580,
			onHoverStop: 'on',						// Stop Banner Timet at Hover on Slide on/off
			thumbWidth: 100,						// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight: 50,
			thumbAmount: 4,
			hideThumbs: 200,
			navigationType: 'both',					// Bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
			navigationArrows: 'verticalcentered',	// Nexttobullets, verticalcentered, none
			navigationStyle: 'round',				// Round,square,navbar
			touchenabled: 'on',						// Enable Swipe Function : on/off
			navOffsetHorizontal: 0,
			navOffsetVertical: 20,
			fullWidth: 'on',
			shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
		});


		$('.halfwidthbanner').revolution( {	
			delay: 9000,												
			startwidth: 940,
			startheight: 380,
			onHoverStop: 'on',						// Stop Banner Timet at Hover on Slide on/off
			thumbWidth: 100,						// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight: 50,
			thumbAmount: 4,
			hideThumbs: 200,
			navigationType: 'both',					// Bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
			navigationArrows: 'verticalcentered',	// Nexttobullets, verticalcentered, none
			navigationStyle: 'round',				// Round,square,navbar
			touchenabled: 'on',						// Enable Swipe Function : on/off
			navOffsetHorizontal: 0,
			navOffsetVertical: 20,
			fullWidth: 'on',
			shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
		});	





	})();


});

}
