$( document ).ready(function() {	

	// TOP SLIDER
	$('.top-slider').slick({
		autoplay: false,
		initialSlide: 0,
		adaptiveHeight: true,
		draggable: false,
		speed: 700,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		swipe: false,
		arrows: false,
		infinite: false,
		dots: false,
		swipeToSlide: false
	}); // END TOP SLIDER

	// MAIN SLIDER
	$('.main-slider').slick({
		autoplay: false,
		initialSlide: 0,
		adaptiveHeight: true,
		draggable: false,
		speed: 700,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		swipe: false,
		arrows: true,
		prevArrow: $('.slider-nav .back'),
		nextArrow: $('.slider-nav .next'),
		infinite: false,
		dots: false,
		swipeToSlide: false
	}); // END MAIN SLIDER

	// TIME / HOUR FADE
	$('#by-time').click(function() {
		$('.slide-01 .selects .by-hour').fadeOut("fast", function(){
			$('.slide-01 .selects .by-time').fadeIn();
		});
	});

	$('#by-hour').click(function() {
		$('.slide-01 .selects .by-time').fadeOut("fast", function(){
			$('.slide-01 .selects .by-hour').fadeIn();
		});
	});

	// DATEPICKER
	$("#datepicker").datepicker();

	// PREVENT DEFAULT ACTION ON NEXT / PREVIOUS BUTTONS
	$('.slider-nav .back, .slider-nav .purple-bt, #promo-code, .last-buttons button').click(function(e) {
		e.preventDefault();
	});

	// SHOW / GIDE INFOS ON THE TOP BOX
	$('#next-to-02').click(function() {
		$('#line-date').slideDown();
	});

	$('#back-to-01').click(function() {
		$('#line-date').slideUp();
	});

	$('#next-to-03').click(function() {
		$('#line-payment').slideDown();
	});

	$('#back-to-02').click(function() {
		$('#line-payment').slideUp();
	});

	// LOADING SEARCHING BOX
	$('[data-loader]').fancybox({
		toolbar: false,
		smallBtn: false,
		arrows: false,
		touch: false,
		buttons: [],
		animationEffect: "zoom-in-out",
		transitionEffect: "circular",
		clickSlide: false,
		clickOutside: false,
		afterShow: function( instance, current ) {
			setTimeout(function(){
				$.fancybox.close();
			}, 3000);

			setTimeout(function(){
				$('.main-slider').slick("slickNext");
			}, 3300);
		}
	}); // END FANCYBOX

	// HIRE A MENDER BUTTON
	$('#hire').click(function() {
		$('.main-slider').slick("slickNext");
		$('#before-hire').slideUp("fast", function(){
			$('#after-hire').slideDown();
		});
	});

	// RATING STARS
	$('#1-star').mousemove(function(){
		$(this).addClass('active');
		$('#2-star').removeClass('active');
		$('#3-star').removeClass('active');
		$('#4-star').removeClass('active');
		$('#5-star').removeClass('active');
	});

	$('#2-star').mousemove(function(){
		$('#1-star').addClass('active');
		$(this).addClass('active');
		$('#3-star').removeClass('active');
		$('#4-star').removeClass('active');
		$('#5-star').removeClass('active');
	});

	$('#3-star').mousemove(function(){
		$('#1-star').addClass('active');
		$('#2-star').addClass('active');
		$(this).addClass('active');
		$('#4-star').removeClass('active');
		$('#5-star').removeClass('active');
	});

	$('#4-star').mousemove(function(){
		$('#1-star').addClass('active');
		$('#2-star').addClass('active');
		$('#3-star').addClass('active');
		$(this).addClass('active');
		$('#5-star').removeClass('active');
	});

	$('#5-star').mousemove(function(){
		$('#1-star').addClass('active');
		$('#2-star').addClass('active');
		$('#3-star').addClass('active');
		$('#4-star').addClass('active');
		$(this).addClass('active');
	});

	$('.rating-line').mouseout(function(){
		$('#1-star').removeClass('active');
		$('#2-star').removeClass('active');
		$('#3-star').removeClass('active');
		$('#4-star').removeClass('active');
		$('#5-star').removeClass('active');
	});

	$('#1-star').click(function(){
		$(this).addClass('checked');
		$('#2-star').removeClass('checked');
		$('#3-star').removeClass('checked');
		$('#4-star').removeClass('checked');
		$('#5-star').removeClass('checked');
	});

	$('#2-star').click(function(){
		$('#1-star').addClass('checked');
		$(this).addClass('checked');
		$('#3-star').removeClass('checked');
		$('#4-star').removeClass('checked');
		$('#5-star').removeClass('checked');
	});

	$('#3-star').click(function(){
		$('#1-star').addClass('checked');
		$('#2-star').addClass('checked');
		$(this).addClass('checked');
		$('#4-star').removeClass('checked');
		$('#5-star').removeClass('checked');
	});

	$('#4-star').click(function(){
		$('#1-star').addClass('checked');
		$('#2-star').addClass('checked');
		$('#3-star').addClass('checked');
		$(this).addClass('checked');
		$('#5-star').removeClass('checked');
	});

	$('#5-star').click(function(){
		$('#1-star').addClass('checked');
		$('#2-star').addClass('checked');
		$('#3-star').addClass('checked');
		$('#4-star').addClass('checked');
		$(this).addClass('checked');
	});

});

// DATEPICKER
function show_dp(){
	$("#datepicker").datepicker('show');
};