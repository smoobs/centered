<?php


add_shortcode("layerslider","layerslider_init");

function layerslider_init($atts) {

	// ID check
	if(!isset($atts['id']) || empty($atts['id'])) {
		return '[LayerSliderWP] '.__('Invalid shortcode', 'LayerSlider').'';
	}

	global $LSC;

	// Get slider ID
	$id = $atts['id'];

	// Get slider
	$slider = lsSliderById($id);

	// Result check
	if($slider == null) {
		return '[LayerSliderWP] '.__('Slider not found', 'LayerSlider').'';
	}

	// Decode data
	$slides = $slider['data'];

	// Returned data
	$data = '';

	// Include slider file
	if(is_array($slides)) {

		// Get phpQuery
		if(!class_exists('phpQuery')) {
			include LS_ROOT_PATH.'/helpers/phpQuery.php'; }

		include LS_ROOT_PATH.'/config/defaults.php';
		include LS_ROOT_PATH.'/includes/slider_markup_init.php';
		include LS_ROOT_PATH.'/includes/slider_markup_html.php';
		$data = implode('', $data);
	}

	// Return data
	if(get_option('ls_concatenate_output', true)) {
		$data = trim(preg_replace('/\s+/', ' ', $data));
	}

	return $data;
}

?>
