jQuery(document).ready(function($) {

	$(".zilla-tabs").tabs();
	
	$(".zilla-toggle").each( function () {
		if($(this).attr('data-id') == 'closed') {
			$(this).accordion({ header: '.zilla-toggle-title', collapsible: true, active: false  });
		} else {
			$(this).accordion({ header: '.zilla-toggle-title', collapsible: true});
		}
	});
	
	
});