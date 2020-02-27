$( document ).ready(function() {

	// RELLAX
	var rellax = new Rellax('.rellax', {
		center: true,
		breakpoints: [768, 993, 1201]
	});

	// MARQUEE
	if ($(window).width() > 575 ) {
		$('.marquee').marquee({
			duplicated: true,
			duration: 12000
		});
	} else {
		$('.marquee').marquee({
			duplicated: true,
			duration: 5000
		});
	}

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
	
});