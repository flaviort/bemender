$( document ).ready(function() {

	// GALLERY SLIDER
	$('.gallery-slider').slick({
		autoplay: true,
		initialSlide: 0,
		adaptiveHeight: false,
		draggable: true,
		speed: 700,
		slidesToShow: 4,
		slidesToScroll: 1,
		fade: false,
		swipe: true,
		arrows: true,
		prevArrow: $('.gallery .arrow-left'),
		nextArrow: $('.gallery .arrow-right'),
		infinite: true,
		dots: false,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3
				}
			}, {
				breakpoint: 767,
				settings: {
					slidesToShow: 2
				}
			}
		]
	}); // END GALLERY SLIDER

});