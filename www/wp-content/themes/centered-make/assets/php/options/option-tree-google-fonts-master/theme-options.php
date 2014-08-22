<?php
/* #################################################################################### */
/* Option Tree theme options file
 *
 * @author		Dennis Osterkamp aka "doitmax"
 * @copyright	Copyright (c) Dennis Osterkamp
 * @link		  http://www.doitmax.de
 *
 * @filedesc 	This file creates the teme options for the
 				      Option Tree plugin.
 *
/* #################################################################################### */

global $ot_sidebars;

/*-----------------------------------------------------------------------------------*/
/*  THE THEME OPTIONS
/*-----------------------------------------------------------------------------------*/
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

function custom_theme_options() {

  /**
   * Get a copy of the saved settings array.
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  $saved_options = get_option( 'option_tree' );

  // update option_tree options wiht social icon array
  update_option( 'option_tree', $saved_options );

  /**
   * Create your own custom array that will be passes to the
   * OptionTree Settings API Class.
   */
  $custom_settings = array(

	'sections' => array(

		// Fonts Tab
		array(
			'id'          => 'fonts',
			'title'       => __('Typography', MAX_SHORTNAME),
		),

		// Fonts Tab
		array(
			'id'          => 'expert',
			'title'       => __('Expert', MAX_SHORTNAME),
		)

	),

  'settings'        => array(

  	/* "Fonts" tab
   	================================================== */

  		array( // Google Font API
  			'id'          => 'google-font-api',
  			'label'       => __('Google Font API Key', MAX_SHORTNAME),
  			'desc'        => __('Enter your Google Font API Key to ensure updates of the google font library.', MAX_SHORTNAME),
  			'std'         => '',
  			'type'        => 'text',
  			'section'     => 'fonts',
  			'class'       => ''
  		),

  		array( // Body Font
  			'id'          => 'font-body',
  			'label'       => __('Body font-style', MAX_SHORTNAME),
  			'desc'        => __('Your main body font-style. If you don\'t want to use this font-style anymore, reset the styles to the default values. The styles from the main style.css file are used then.', MAX_SHORTNAME),
  			'std'         => '',
  			'type'        => 'typography',
  			'section'     => 'fonts',
  			'class'       => ''
  		),

  	/* "Expert" tab
   	================================================== */

  		array( // Custom CSS Code
  			'id'          => 'dynamic-css',
  			'label'       => 'Dynamic CSS Code',
  			'desc'        => __('Add dynamic CSS code with values from the theme options. <strong>Only edit if you know what to do!</strong> If you edit this without any knowledge on Option Tree dynamic css including it might break the theme!', MAX_SHORTNAME),
  			'type'        => 'css',
  			'section'     => 'expert',
  			'rows'		  => 12,
  			'std'		  => '/* Font-Styles - DO NOT EDIT OR REMOVE THIS VALUES */
  body { {{font-body}} }'
  		),

    ) // end of settings
  );

  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings );
  }

}

?>
