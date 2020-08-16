$( document ).ready(function() {

	// MOBILE SIDEBAR
	$(".mobile-sidebar").click(function() {
		$("#main .left nav").slideToggle();
		$(this).toggleClass("active");
	});

	// EDIT CARD / PAYMENT METHOD PAGE
	$(".edit-card").click(function() {
		$("#edit-card").slideDown();
	});

	$("#edit-card .save").click(function() {
		$("#edit-card").slideUp();
	});

	// EDIT ADDRESS / ADDRESS PAGE
	$(".edit-address").click(function() {
		$("#edit-address").slideDown();
	});

	$("#edit-address .save").click(function() {
		$("#edit-address").slideUp();
	});
	
});