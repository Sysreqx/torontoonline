$ = jQuery.noConflict();

$(document).ready(function(){

	$('.slick-slider').slick({
		arrows: false,
		dots: true,
		infinite: true,
		fade: true,
		speed: 500
	});

});