 var $ = jQuery.noConflict();

 var Theme = {

 	init: function () {
 		this.mobileMenu();
 		this.share();

 		if ($(window).width() > 768) {
 			var height = 0;
 			$('.products .product').each( function(index) {
 				var ph = $(this).height();
 				if (ph > height) height = ph;
 			});
 			$('.products .product').css('min-height', height);
 		}
 	},

 	mobileMenu: function() {
    	// show mobile menu
    	$('#show-menu').click(function(e) {
    		e.preventDefault;
    		$('.main-menu').slideToggle('fast');
    	});

		// inject toggle
		$( "<a href=\"#\" id=\"toggle\" class=\"icon-down-open-big\"></a>" ).insertAfter( ".menu-item-has-children > a" );

		// sub-menu toggle
		$('.menu-item-has-children > #toggle').click(function(e) {
			e.preventDefault;
			$(this).nextAll('.sub-menu:first').slideToggle('fast');
			$(this).toggleClass('icon-down-open-big').toggleClass('icon-up-open-big');
		});
	},

	share: function() {
		$('.post-share a').share({
			threshold: 0,
			abbreviate: true,
			counts: true
		})
	}
};

jQuery(document).ready(function($) {

	Theme.init();

});
