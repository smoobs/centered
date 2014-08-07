jQuery(document).ready(function () {
    "use strict";
		if(jQuery(window).width() > 991) {
			jQuery("body").append('<div id="loaderMask" style="background-color: #fff !important"><div id="image-preloader"></div></div>');	
		}
	
		jQuery(window).load(function () {
		if(jQuery(window).width() > 991) {
			jQuery("#loaderMask #image").fadeOut();
			jQuery("#loaderMask").delay(350).fadeOut("slow");
		}
	});

});

	