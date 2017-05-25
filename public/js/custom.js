$(document).ready(function() {

	$('#profile-image').on('click', function() {
        $('#profile-image-upload').click();
    });

    $('.datep').datepicker({
    	todayBtn : 1,
	});
    
	$("#addblock").click(function() {
	  $(".form-step2.hidden:first").removeClass("hidden");
	});

	$(".field, textarea").focus(function() {
        if(this.title==this.value) {
            this.value = '';
        }
    }).blur(function(){
        if(this.value=='') {
            this.value = this.title;
        }
    });

    $("input[type='image']").click(function() {
    	$("input[id='my_file']").click();
	});


    /*****************************************************************
	 * Add preview image before uploading
	 */
    previewImage = function(input) {
		var imagePreview, reader;
		imagePreview = $(input).nextAll('.' + $(input).data('image-preview'));
		if (input.files && input.files[0]) {
			reader = new FileReader();
			reader.onload = function(e) {
				imagePreview.attr('src', e.target.result);
				imagePreview.removeClass('hide');
			};
            
            $('.oldImage')
                .addClass('hide');
			reader.readAsDataURL(input.files[0]);
		} else {
			imagePreview.addClass('hide');
		}
	};

	/**
	 * New image preview
	 */
	$('.image-preview-option').on('change', function(){
		previewImage(this)
	});

});



/*****************************************************************
 * Add preview image before uploading
 */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.previewImage')
                .attr('src', e.target.result)
                .width(108)
                .height(160);

            $('.oldImage')
	    		.addClass('hide');
        };

        reader.readAsDataURL(input.files[0]);
    }else {
    	$('.previewImage')
    	.addClass('hide');
    }
};