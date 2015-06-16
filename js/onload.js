



jQuery(document).ready(function($){
	slidersize();
});
jQuery(window).resize(function(e) {
	slidersize();
});


function slidersize(){
		var screenW = jQuery('body').innerWidth();
		var screenH = jQuery('body').height();
		
		var hamburgermenuwidth = jQuery("#hamburgermenu").css('width');
		hamburgermenuwidth = parseInt(hamburgermenuwidth);
		hamburgerleft = (screenW / 2) - (hamburgermenuwidth / 2);
		jQuery("#hamburger-menu").css('left',hamburgerleft);
		//var imgHeight = jssorb21Width = jQuery(".slider-img").css('height');
		//imgHeight = parseInt(imgHeight);
		/*jQuery("#home-slider-wrap").css('width',screenW);
		jQuery("#home-slider-wrap").css('height',screenW * 0.3);
		jQuery("#slides-inside-wrapper").css('width',screenW);
		jQuery("#slides-inside-wrapper").css('height',screenW * 0.3);
		jQuery(".slider-div").css('width',screenW);
		jQuery(".slider-div").css('height',screenW * 0.3);
		jQuery(".slider-img").css('height',screenW * 0.3);
		jQuery(".jssora21").css('top','auto');
		jQuery(".jssora21l").css('top','auto');
		jQuery(".jssora21r").css('top','auto');

		jssorb21Width = jQuery(".jssorb21").css('width');
		jssorb21Width = parseInt(jssorb21Width);
		jssorb21Left = screenW / 2 - jssorb21Width / 2;
		
		
		jQuery("#jssorb21").css('left', '500px!important');
		jQuery("#jssorb21").css('bottom', '1%');
		jQuery(".jssora21l").css('left','1%');
		jQuery(".jssora21l").css('bottom','50%');
		jQuery(".jssora21r").css('right','1%');
		jQuery(".jssora21r").css('bottom','50%');
		//jQuery(".slider-img").css('width',screenW);
		//alert(screenW);*/
}
















