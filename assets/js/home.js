$( document ).ready(function() {

	// PARALLAX ELEMENTS
	if ($(window).width() > 767 ) {
		window.setTimeout(function() {
			$("#banner").mousemove(function(e) {
				parallaxIt(e, $('#banner .anima .man'), -3);
				parallaxIt(e, $('#banner .anima .woman'), -4);
				parallaxIt(e, $('#banner .anima .trees'), -2);
				parallaxIt(e, $('#banner .anima .cloud-01'), -5);
				parallaxIt(e, $('#banner .anima .cloud-02'), -6);
				parallaxIt(e, $('#banner .anima .cloud-03'), -7);
				parallaxIt(e, $('#banner .anima .cloud-04'), -8);
				parallaxIt(e, $('#banner .phone'), -9);
			});
		}, 4000);

		function parallaxIt(e, target, movement) {
			var $this = $(".layer");
			var relX = e.pageX - $this.offset().left;
			var relY = e.pageY - $this.offset().top;

			TweenMax.to(target, 3, {
				x: (relX - $this.width() / 2) / $this.width() * movement,
				y: (relY - $this.height() / 1) / $this.height() * movement
			});
		}
	};

	// ANIMATIONS
	var man = bodymovin.loadAnimation({
		wrapper: document.getElementById('man'),
		animType: 'svg',
		loop: true,
		autoplay: true,
		path: 'assets/animations/man.json'
	});
	
	var woman = bodymovin.loadAnimation({
		wrapper: document.getElementById('woman'),
		animType: 'svg',
		loop: true,
		autoplay: true,
		path: 'assets/animations/woman.json'
	});

	var how01 = bodymovin.loadAnimation({
		wrapper: document.getElementById('how-01'),
		animType: 'svg',
		loop: true,
		autoplay: true,
		path: 'assets/animations/how-01.json'
	});

	var how02 = bodymovin.loadAnimation({
		wrapper: document.getElementById('how-02'),
		animType: 'svg',
		loop: true,
		autoplay: true,
		path: 'assets/animations/how-02.json'
	});

	var how03 = bodymovin.loadAnimation({
		wrapper: document.getElementById('how-03'),
		animType: 'svg',
		loop: true,
		autoplay: true,
		path: 'assets/animations/how-03.json'
	});

	$('#search-what').keypress(function(e) {
		e.preventDefault();
	});

	// SERVICES SLIDER
	$('.services-slider').slick({
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
	}); // END SERVICES SLIDER

	$("#service-01").click(function() {
		$('.services-slider').slick('slickGoTo', 1);
	});

	$("#service-02").click(function() {
		$('.services-slider').slick('slickGoTo', 2);
	});

	$("#service-03").click(function() {
		$('.services-slider').slick('slickGoTo', 3);
	});

	$("#service-04").click(function() {
		$('.services-slider').slick('slickGoTo', 4);
	});

	$("#service-05").click(function() {
		$('.services-slider').slick('slickGoTo', 5);
	});

	$("#service-06").click(function() {
		$('.services-slider').slick('slickGoTo', 6);
	});

	$("#service-07").click(function() {
		$('.services-slider').slick('slickGoTo', 7);
	});

	$("#service-08").click(function() {
		$('.services-slider').slick('slickGoTo', 8);
	});

	$("#service-09").click(function() {
		$('.services-slider').slick('slickGoTo', 9);
	});

	$(".back-button").click(function() {
		$('.services-slider').slick('slickGoTo', 0);
	});

	$("#search-what").click(function() {
		$("#banner .hidden-form").addClass("active");
	});

	$("#banner .hidden-form .close-services, #banner .hidden-form .close-services-inside").click(function() {
		$("#banner .hidden-form").removeClass("active");
	});

	$("#banner .hidden-form .select-service").click(function() {
		$("#banner .hidden-form").removeClass("active");
		$("#search-zipcode").focus();
		$('.services-slider').slick('slickGoTo', 0);
	});
	
});