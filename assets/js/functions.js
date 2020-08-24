$( document ).ready(function() {

	// SMOOTH SCROLL
	$(".sliding-link").click(function(e) {
		e.preventDefault();
		var aid = $(this).attr("href");
		$('html,body').animate({scrollTop: $(aid).offset().top},'slow');
	});

	// CHROME FOR MAC
	$(function () {
		if (navigator.userAgent.match(/Macintosh/) && navigator.userAgent.match(/Chrome/)) {
			$("body").addClass("chrome-for-mac");
		}
	});

	// IPAD
	if( /iPad/i.test(navigator.userAgent) ) {
		$("body").addClass("ipad");
	};

	// SAFARI
	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		$("body").addClass("safari");
	};

	// MOBILE
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$("body").addClass("mobile");
	};

	// FORCE MAX LENGTH
	$("input[maxlength]").bind('input propertychange', function() {  
		var maxLength = $(this).attr('maxlength');  
		if ($(this).val().length > maxLength) {  
			$(this).val($(this).val().substring(0, maxLength));  
		}
	});

	// WOW
	wow = new WOW({
		live: true,
	}).init();

	// REPLACE ALL SVG IMAGES WITH INLINE SVG
	jQuery('img.svg').each(function(){
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		jQuery.get(imgURL, function(data) {
			var $svg = jQuery(data).find('svg');
			if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}
			$svg = $svg.removeAttr('xmlns:a');
			$img.replaceWith($svg);
		}, 'xml');
	});

	// RENDER AGAIN SVGS THAT WERE INSERTED AFTER THE PAGE LOADED
	setTimeout(function(){
		jQuery('img.svg').each(function(){
			var $img = jQuery(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');
			jQuery.get(imgURL, function(data) {
				var $svg = jQuery(data).find('svg');
				if(typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				if(typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
				}
				$svg = $svg.removeAttr('xmlns:a');
				$img.replaceWith($svg);
			}, 'xml');
		});
	}, 200);

	// SUBSCRIBE TEXT
	if ($(window).width() > 575 ) {
		$("#subscribe input[type='email']").attr("placeholder","Subscribe your email and stay in touch!");
	} else {
		$("#subscribe input[type='email']").attr("placeholder","Type your email here");
	}

	// NEWSLETTER
	var $form = $('#mc-embedded-subscribe-form')
	if ($form.length > 0) {
		$('#subscribe form input[type="submit"]').bind('click', function (event) {
			if (event) {
				event.preventDefault();
				register($form);
			}
		})
	}

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

	// FANCYBOX
	$('[data-fancybox]').fancybox({
		toolbar : true,
		smallBtn : false,
		arrows: false,
		touch: false,
		buttons : [
			'close'
		],
		animationEffect : "zoom-in-out",
		transitionEffect : "circular",
	}); // END FANCYBOX

	/*------------------------------------------------------
	--------------------------------------------------------
		## FSMENU
	--------------------------------------------------------
	------------------------------------------------------*/

	// HAMBURGER MENU
	$("#menu-top #open-fs").click(function(){
		$("#menu-top").addClass('open');
		$("#fsmenu").addClass('opacity');
		$("body").addClass('no-scroll');
	});

	$("#close-fs").click(function(){
		$("#menu-top").removeClass('open');
		$("#fsmenu").removeClass('opacity');
		$("body").removeClass('no-scroll');
	});

});

// NEWSLETTER
function register($form) {
	$('#mc-embedded-subscribe-post').val('Sending...');
	$.ajax({
		type: $form.attr('method'),
		url: $form.attr('action'),
		data: $form.serialize(),
		cache: false,
		dataType: 'json',
		contentType: 'application/json; charset=utf-8',
		error: function (err) { alert('Could not connect to the registration server. Please try again later.') },
		success: function (data) {
			$('#mc-embedded-subscribe-post').val('SUBMIT')
			if (data.result === 'success') {
				$.fancybox.open({src:'#subs-success'});
				$('#mc-embedded-subscribe-form input[type="email"]').val('');
			}
			else {
				$.fancybox.open({src:'#subs-error'});
			}
		}
	});
};