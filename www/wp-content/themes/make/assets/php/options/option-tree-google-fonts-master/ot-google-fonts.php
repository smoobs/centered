<?php

/**
 * Google Font Loading
 *
 * Returns an array of saved Google Fonts.
 * Updates Google Font database in interval given
 *
 *	@param  	string 	$key 		Google Font API key
 *	@param  	int		$key 		Google Font cache refresh interval in ms
 *
 * @return	array
 *
 */

if( !function_exists( 'ot_get_google_font' ) ) :

	function ot_get_google_font($key = false, $interval = 604800 ){

		// get the themes name
		$_theme = wp_get_theme();
		$_theme_name = strtolower(str_replace(' ', '_', $_theme->name));

		// get cached fields
		$db_cache_field               = 'googlefont-cache-'.$_theme_name;
		$db_cache_field_last_updated  = 'googlefont-cache-last-'.$_theme_name;
		$db_cache_field_themename     = 'googlefont-'.$_theme_name;

		$current_fonts = get_option( $db_cache_field ); // get current fonts
		$last 			   = get_option( $db_cache_field_last_updated ); // get the date for last update
		$theme 			   = get_option ( $db_cache_field_themename ); // get the theme name
		$now 			     = time(); // get current timestamp
		$api_key		   = $key ? $key : false;

		if($api_key){ // check if the api key is set

			if ( !$last || ( ($now - $last ) > $interval ) || !$theme || $current_fonts == "" || !$current_fonts ) {

				$fontsSeraliazed = 'https://www.googleapis.com/webfonts/v1/webfonts?key='.$api_key;

        // get the Google Fonts from remote URL
        $google_response = wp_remote_get ( $fontsSeraliazed, array ( 'sslverify' => false ) );

        // we have no errors, proceed
        if ( 200 == wp_remote_retrieve_response_code( $google_response ) ) {

  				// parse the result from Google Font API
  				$fontArray = json_decode($google_response['body'], true);

  				$googleFontArray = array();

  				// generate the array to store the fonts
  				foreach($fontArray['items'] as $index => $value){
  					$_family                               = strtolower( str_replace(' ','_',$value['family']) );
  					$googleFontArray[$_family]['family']   = $value['family'];
  					$googleFontArray[$_family]['variants'] = $value['variants'];
  					$googleFontArray[$_family]['subsets']  = $value['subsets'];
  				}

  				if ( is_array($googleFontArray) ) {

  					// we got good results, so update the existing fields
  					update_option( $db_cache_field, $googleFontArray );
  					update_option( $db_cache_field_last_updated, time() );
  					update_option( $db_cache_field_themename, $_theme_name );

  				} else {

  					// there are no fields, so add them to the database
  					add_option( $db_cache_field, $googleFontArray,'', 'no' );
  					add_option( $db_cache_field_last_updated, time(),'', 'no' );
  					add_option( $db_cache_field_themename, $_theme_name,'', 'no' );

  				}

  				// get the google font array from options DB
  				$db_font_array = get_option( $db_cache_field );

          function notice_new_fonts_added() {

        		// Display message
        		$html =  '<div class="updated"><p>';
        		$html .= "<strong>Connection to Google Font API successfull.</strong> You can now use the fonts within the theme options panel.";
        		$html .= '</p></div>';

        		echo $html;

          }

         // add_action( 'admin_notices', 'notice_new_fonts_added', 99); 


        } else {

          function notice_no_connection_possible() {

        		// Display message
        		$html =  '<div class="error"><p>';
        		$html .= "Connection to <strong>Google Fonts API</strong> failed. Please try it again later.";
        		$html .= '</p></div>';

        		echo $html;

          }

          //add_action( 'admin_notices', 'msg_no_connection_possible', 99);

          // we are using the already stored fonts
  				if( is_array($current_fonts) && count($current_fonts) ) {
  					$db_font_array = $current_fonts;
  				}

        }

			} else {

				// get the google font array from options DB
				if( is_array($current_fonts) && count($current_fonts) ) {
					$db_font_array = $current_fonts;
				}

			}

			return $db_font_array;

		}

		// no api key -> return false
		return false;

	}

	add_action( 'wp_enqueue_scripts', 'ot_get_google_font', 999 );

endif;


/**
 * Google Fonts Ajax Callback
 *
 * Returns a json string with all Google Fonts from DB
 *
 * @return string
 *
 */
	function ot_ajax_get_google_font(){

			// get the current themes name
			$_theme = wp_get_theme();
			$_theme_name = strtolower(str_replace(' ', '_', $_theme->name));

			$fonts = get_option('googlefont-cache-'.$_theme_name);

			die(json_encode($fonts));

	}
	// creating Ajax call for WordPress
	add_action( 'wp_ajax_nopriv_ot_ajax_get_google_font', 'ot_ajax_get_google_font' );
	add_action( 'wp_ajax_ot_ajax_get_google_font', 'ot_ajax_get_google_font' );

/**
 * Enqueue Styles and Scripts
 *
 * Enqueues scripts for the Google Font preview box.
 *
 * @param	string	$hook of the current themes page
 *
 * @uses		wp_enqueue_style(), wp_enqueue_script()
 *
 */
	function ot_action_enqueue_scripts($hook){

		if($hook == 'appearance_page_ot-theme-options'):

			// get plugin folder
			$path = '/assets/php/options/option-tree-google-fonts-master';

			// enqueue the css file
			wp_enqueue_style( 'ot-google-font-css', get_template_directory_uri().$path.'/css/style2.css', array(), '', 'all');

			// enqueue the js file
			wp_enqueue_script( 'ot-google-font-js', get_template_directory_uri().$path.'/js/scripts.js', array(), '', 'all');

		endif;

	}

	/* add scripts for metaboxes to post-new.php & post.php */
	if(is_admin()){
			add_action( 'admin_enqueue_scripts', 'ot_action_enqueue_scripts', 11 );
	}

/**
 * Get Google Font stylesheets
 *
 * Includes the Google Font stylesheets into the head section of the current page
 *
 * @param	array		$default_theme_fonts the default theme fonts set before
 *
 * @uses		wp_enqueue_style(), wp_enqueue_script()
 *
 */
	function ot_action_get_google_font_link(){

		if (!is_admin()) {

  		// get the themes name
  		$_theme = wp_get_theme();
  		$_theme_name = strtolower(str_replace(' ', '_', $_theme->name));

		  $_def_fonts = unserialize(OT_FONT_DEFAULTS);

			// lets get all the font options from the option tree settings
			$_ot_options = get_option( 'option_tree_settings' );

			$_font_array = array();
			foreach($_ot_options['settings'] as $index => $_setting){
				if($_setting['type'] == 'typography'){
					$_font_array[] = ot_get_option($_setting['id']);
				}
			}

			// array to store already used font-families and not load them double
			$_font_array_backup = array();

			// loop through fonts
			foreach( $_font_array as $index => $font ){

				$_output = "";

				if( !empty($font) && is_array($font) ) :

					// get the google font array from db cache
					$_db_font_cache = get_option( 'googlefont-cache-'.$_theme_name );

					if($_def_fonts):

            if( isset($_db_font_cache[$font['font-family']]['family']) ) {

					  	if( !array_key_exists($font['font-family'], $_def_fonts) ) {
						    $_output = $_db_font_cache[$font['font-family']]['family'];
              }

						}

					endif;

					// check if the font family allready exists
					if( array_key_exists($font['font-family'], $_db_font_cache) ) {
						$_font_array_backup[$font['font-family']] = $_db_font_cache[$font['font-family']];
					}

				endif;
			}

			// loop through the font array and enqueue the google font stylesheet if needed
			if( is_array($_font_array_backup) && !empty($_font_array_backup) ){

				foreach($_font_array_backup as $index => $_g_font_family){

				  if(!empty($_g_font_family)){

				     // build the font weight string
				     $_font_weight_array = array();
				     foreach($_font_array as $font => $value) {

               // check if font-weight exists for this font-family
  				     if(!empty($value['font-weight']) && $value['font-family'] == $index ) :

                  // check if font-weight already exists, if not, add it to the array
                  if(!in_array($value['font-weight'], $_font_weight_array)):

                    // replace font-weight keywords
                    if($value['font-weight'] == 'normal') $value['font-weight'] = 400;
                    if($value['font-weight'] == 'bold') $value['font-weight'] = 500;

                    $_font_weight_array[] = $value['font-weight'];

                  endif;

  				     endif;

				     }

             $_font_add_string = "";
             if(count($_g_font_family['variants'])) $_font_add_string .= ":". implode(',', $_g_font_family['variants']);

				     // build the font style string
				     $_font_style_array = array();
				     foreach($_font_array as $font => $value) {

               // check if font-style exists for this font-family
  				     if(!empty($value['font-style']) && $value['font-family'] == $index ) :

                  // check if font-style already exists, if not, add it to the array
                  if(!in_array($value['font-style'], $_font_style_array)):
                    $_font_style_array[] = $value['font-style'];
                  endif;

  				     endif;

				     }

             // check, if we already have some font-weights
             if(count($_font_style_array)) {
               if(empty($_font_add_string)) {
                  $_font_add_string .= ":". implode(',', $_font_style_array);
               }else{
                  $_font_add_string .= ",". implode(',', $_font_style_array);
               }
             }

					   wp_register_style( 'ot-google-font-' . $index, 'http://fonts.googleapis.com/css?family=' . $_g_font_family['family'] . $_font_add_string, array(), '', 'all');
					   wp_enqueue_style( 'ot-google-font-' . $index );
					}
				}
			}

		}

	}

	// Action to call the google font include on frontpage
	add_action('wp_enqueue_scripts', 'ot_action_get_google_font_link', 15);


?>