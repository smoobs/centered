<?php

/* =============================================================================
	Include the Option-Tree Google Fonts Plugin
	========================================================================== */

	// load the ot-google-fonts plugin if the loader class is available
	if( class_exists( 'OT_Loader' ) ):

	  global $ot_options;

	  $ot_options = get_option( 'option_tree' );

  	// default fonts used in this theme, even though there are no google fonts
  	$default_theme_fonts = array(
  			'arial' => 'Arial, Helvetica, sans-serif',
  			'helvetica' => 'Helvetica, Arial, sans-serif',
  			'georgia' => 'Georgia, "Times New Roman", Times, serif',
  			'tahoma' => 'Tahoma, Geneva, sans-serif',
  			'times' => '"Times New Roman", Times, serif',
  			'trebuchet' => '"Trebuchet MS", Arial, Helvetica, sans-serif',
  			'verdana' => 'Verdana, Geneva, sans-serif'
  	);

  	defined('OT_FONT_DEFAULTS') or define('OT_FONT_DEFAULTS', serialize($default_theme_fonts));
  	defined('OT_FONT_API_KEY') or define('OT_FONT_API_KEY', 'AIzaSyBmzfJsfXkXP9PUvwfq53jA1l1YJNxBT4g'); // enter your own Google Font API key here
  	defined('OT_FONT_CACHE_INTERVAL') or define('OT_FONT_CACHE_INTERVAL', 0); // Checking once a week for new Fonts. The time interval for the remote XML cache in the database (21600 seconds = 6 hours)

		// get the OT-Google-Font plugin file
		include_once( get_template_directory().'/assets/php/options/option-tree-google-fonts-master/ot-google-fonts.php' );

		// get the google font array - build in ot-google-fonts.php
		$google_font_array = ot_get_google_font(OT_FONT_API_KEY, OT_FONT_CACHE_INTERVAL);

		// Now apply the fonts to the font dropdowns in theme options with the build in OptionTree hook
		function ot_filter_recognized_font_families( $array, $field_id ) {

			global $google_font_array;

			// loop through the cached google font array if available and append to default fonts
			$font_array = array();
			if($google_font_array){
					foreach($google_font_array as $index => $value){
							$font_array[$index] = $value['family'];
					}
			}

			// put both arrays together
			$array = array_merge(unserialize(OT_FONT_DEFAULTS), $font_array);

			return $array;

		}
		add_filter( 'ot_recognized_font_families', 'ot_filter_recognized_font_families', 1, 2 );

	endif;

?>