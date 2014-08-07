<?php
/*
Plugin Name: ZillaShortcodes
Plugin URI: http://www.themezilla.com/plugins/zillashortcodes
Description: A simple shortcode generator. Add buttons, columns, tabs, toggles and alerts to your theme.
Version: 1.1
Author: ThemeZilla
Author URI: http://www.themezilla.com
*/

class ZillaShortcodes {

    function __construct() 
    {	
    	require_once( get_template_directory()  .'/assets/php/shortcodes/settings_shortcodes.php' );
    	define('ZILLA_TINYMCE_URI',  get_template_directory_uri() .'/assets/php/shortcodes/tinymce');
		define('ZILLA_TINYMCE_DIR',  get_template_directory_uri() .'/assets/php/shortcodes/tinymce');
		
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));
	}
	
	/**
	 * Registers TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function init()
	{		
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true' )
		{
			add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );
			add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );
		}
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Defins TinyMCE rich editor js plugin
	 *
	 * @return	void
	 */		function add_rich_plugins( $plugin_array )	{		if ( floatval(get_bloginfo('version')) >= 3.9) {			$plugin_array['zillaShortcodes'] =  ZILLA_TINYMCE_URI . '/plugin.js';		}		else {			$plugin_array['zillaShortcodes'] =  ZILLA_TINYMCE_URI . '/plugin.old.js';		}		return $plugin_array;	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Adds TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function register_rich_buttons( $buttons )
	{
		array_push( $buttons, "|", 'zilla_button' );
		return $buttons;
	}
	
	/**
	 * Enqueue Scripts and Styles
	 *
	 * @return	void
	 */
	function admin_init()
	{
		// css
		wp_enqueue_style( 'zilla-popup', ZILLA_TINYMCE_URI . '/css/popup.css', false, '1.0', 'all' );
		
		// js
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-livequery', ZILLA_TINYMCE_URI . '/js/jquery.livequery.js', false, '1.1.1', false );
		wp_enqueue_script( 'jquery-appendo', ZILLA_TINYMCE_URI . '/js/jquery.appendo.js', false, '1.0', false );
		wp_enqueue_script( 'base64', ZILLA_TINYMCE_URI . '/js/base64.js', false, '1.0', false );
		if ( floatval(get_bloginfo('version')) >= 3.9){			wp_enqueue_script( 'zilla-popup', ZILLA_TINYMCE_URI . '/js/popup.js', false, '1.0', false );		}		else {			wp_enqueue_script( 'zilla-popup', ZILLA_TINYMCE_URI . '/js/popup.old.js', false, '1.0', false );		}
		wp_enqueue_script( 'zilla-media', ZILLA_TINYMCE_URI . '/js/media.js', false, '1.0', false );
		wp_localize_script( 'jquery', 'ZillaShortcodes', array('plugin_folder' => get_template_directory_uri() .'/assets/php/shortcodes') );
	}
    
}
$zilla_shortcodes = new ZillaShortcodes();

?>