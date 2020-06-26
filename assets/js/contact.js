$( document ).ready(function() {

	// FAQ
	$(".faq .line").click(function() {
		$(this).toggleClass('active');
		$(this).siblings('.content').slideToggle();
	});

});