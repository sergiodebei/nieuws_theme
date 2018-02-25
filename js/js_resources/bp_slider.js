$( document ).ready(function() {

	// slick settings
	$(".slider").slick({
	    autoplay: true,
	    autoplaySpeed: 4000,
	    draggable: true,
	    arrows: true,
	    dots: true,
	    fade: true,
	    speed: 700,
	    infinite: true,
	    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	    touchThreshold: 100,
	    // prevArrow: $('.prev'),
	    // nextArrow: $('.next')
	});

});
