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

	// INTRODUCTION
	$(".profile .introduction .top-part .edit").click(function(e) {
		e.preventDefault();
		$(".profile .introduction .introduction-text").prop('disabled', false);
		$(".profile .introduction .introduction-text").addClass('editable');
		$(".profile .introduction .introduction-text").focus();
		$.when($(this).fadeOut()).done(function() {
			$(".profile .introduction .top-part .save-cancel").fadeIn();
		});
	});

	$(".profile .introduction .top-part .save-cancel .save").click(function(e) {
		e.preventDefault();
		$(".profile .introduction .introduction-text").prop('disabled', true);
		$(".profile .introduction .introduction-text").removeClass('editable');
		$.when($(".profile .introduction .top-part .save-cancel").fadeOut()).done(function() {
			$(".profile .introduction .top-part .edit").fadeIn();
		});
	});

	$(".profile .introduction .top-part .save-cancel .cancel").click(function(e) {
		e.preventDefault();
		$(".profile .introduction .introduction-text").prop('disabled', true);
		$(".profile .introduction .introduction-text").removeClass('editable');
		$.when($(".profile .introduction .top-part .save-cancel").fadeOut()).done(function() {
			$(".profile .introduction .top-part .edit").fadeIn();
		});
	});

	// SERVICES BOXES
	$(".profile .services .boxes .box .title").click(function() {
		$(this).parent('.box').toggleClass('active');
	});

	// GALLERY BOXES - DELETE PHOTO
	$(".profile .gallery .boxes .box .delete").click(function(e) {
		e.preventDefault();
		$(this).parent('.box').addClass('active');
	});

	$(".profile .gallery .boxes .box .overlay .actions button").click(function(e) {
		e.preventDefault();
		$(this).parents('.box').removeClass('active');
	});

	$("#gallery-done").click(function(e) {
		e.preventDefault();
	});

	// FAQ
	$(".accordion .line").click(function() {
		$(this).toggleClass('active');
		$(this).siblings('.content').slideToggle();
	});
	
});

// DROPZONE
Dropzone.autoDiscover = false;
var that = $("#upload-zone");
var myDropzone = new Dropzone('#upload-zone', {
	addRemoveLinks: true,
	uploadMultiple: true,
	autoProcessQueue: true,
	acceptedFiles: "image/*, application/pdf",
	init: function(){
		this.on("successmultiple", function(file, data) {
			$(that).addClass("dz-success");
		});
		this.on("reset", function(file) {
			$(that).removeClass("dz-success");
		});
	},
}); // END DROPZONE