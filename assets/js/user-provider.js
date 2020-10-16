$( document ).ready(function() {

	$('#user-or-provider').change(function(){
		if($(this).val() == 'user-sign-in'){
			location.href = 'user-sign-in.php';

		} else if($(this).val() == 'provider-sign-in'){
			location.href = 'provider-sign-in.php';

		} else if($(this).val() == 'user-sign-up'){
			location.href = 'user-sign-up.php';

		} else if($(this).val() == 'provider-sign-up'){
			location.href = 'provider-sign-up.php';

		} else if($(this).val() == 'user-forgot'){
			location.href = 'user-forgot.php';

		} else if($(this).val() == 'provider-forgot'){
			location.href = 'provider-forgot.php';

		}
	});

});

// DROPZONE
Dropzone.autoDiscover = false;
var that = $("#upload-zone");
var myDropzone = new Dropzone('#upload-zone', {
	addRemoveLinks: true,
	uploadMultiple: false,
	autoProcessQueue: true,
	acceptedFiles: "image/*",
	init: function(){
		this.on("successmultiple", function(file, data) {
			$(that).addClass("dz-success");
		});
		this.on("reset", function(file) {
			$(that).removeClass("dz-success");
		});
	},
}); // END DROPZONE