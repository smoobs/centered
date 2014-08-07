<?php
/**
 * Make functions and definitions
 *
 * @package Make
 */

 global $wp_version;  

define('EF1_FUNCTIONS', get_template_directory()  . '/assets/php');
define('EF1_INDEX_JS', get_template_directory_uri()  . '/assets/js/');
define('EF1_INDEX_CSS', get_template_directory_uri()  . '/assets/css/');
//	Required: include OptionTree  ---------------------------------------------------------------
	include_once( 'assets/php/options/ot-loader.php' );
//	Options init  ---------------------------------------------------------------
	include_once( 'assets/php/options/theme-options.php' );
//	Shortcode  ---------------------------------------------------------------
	include( EF1_FUNCTIONS . '/shortcodes/shortcodes.php' );
	include( EF1_FUNCTIONS. '/shortcodes/settings_shortcodes.php' );
// Post Types Team ---------------------------------------------------------------
	require_once ('assets/php/post-types.php');
// Meta Boxes ---------------------------------------------------------------
	load_template( trailingslashit( get_template_directory() ) . 'assets/php/meta-boxes.php' );
// Optional: set 'ot_show_pages' filter to false. This will hide the settings & documentation pages.
	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' ); 
// Required: set 'ot_theme_mode' filter to true. -----------------------------
	add_filter( 'ot_theme_mode', '__return_true' ); 
// <head> options ---------------------------------------------------------------
	require_once ('assets/php/options-head.php');
// TGM Plugin ---------------------------------------------------------------
	require_once ('assets/php/tgm/tgm.php');	
// Pagination ---------------------------------------------------------------
	require_once ('assets/php/pagination.php');		
	
register_nav_menu( 'primary', 'Primary Menu' );



function ef1_first_class(){

 $args_onepage = array(
	'posts_per_page'   => 2,
	'offset'           => 0,
	'category'         => '',
	'orderby'          => 'none',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '', 
	'meta_value'       => '',
	'post_type'        => 'onepage',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true );
	
$posts_array = get_posts( $args_onepage );
$first_class = 0; 

$first_class  = '#'.sanitize_title($posts_array[0]->post_name ); 
	return $first_class;
}
add_theme_support('post-formats',array('gallery','video') );  
//add feed
add_theme_support( 'automatic-feed-links' ); 
//add thumb 
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'post-thumb', 800, 450, true );
add_image_size( 'portfolio-thumb', 690, 1000, true );
add_image_size( 'four-columns', 228, 160, true );
add_image_size( 'two-columns', 472, 295, true );
add_image_size( 'thumbnail-large', 75, 75, true ); // Large thumbnails
add_image_size( 'thumbnail-wide', 300, 100, true ); // Wide thumbnails
add_image_size( 'main-image', 285, 280, true ); // Main (latest) image
add_image_size( 'main-image-pictures', 290, 280, true ); // Main (pictures) image
add_image_size( 'lead-image', 690, 330, true ); // Post Page Main image
add_image_size( 'portfolio-image', 800, 450, true ); // Post Page Main image
add_image_size( 'news-image', 370, 208, true ); // News Shorcode
add_image_size( 'post-thumb-blogroll', 1100, 450, true );

function make_widgets_init() {
		register_sidebar( array(
		'name' => __( 'Sidebar', '' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', '' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<header><h3 class="widget-title line-header">',
		'after_title' => '</h3></header>',
	) );
}
add_action( 'widgets_init', 'make_widgets_init' );

if ( ! isset( $content_width ) ) $content_width = 900;

// excerpt lenght 
function ef1_custom_excerpt_length( $length ) {
	if(is_home() )return 25; 
	else return 50;
}
add_filter( 'excerpt_length', 'ef1_custom_excerpt_length', 999 );
// end excerpt lenght 

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
defined('OT_FONT_API_KEY') or define('OT_FONT_API_KEY', 'AIzaSyCYwvd21S7Fpsbds5_z8HGbzKKZPO3_uNI'); // enter your own Google Font API key here
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


//comments lvl
function ef1_change_level_comment($count) {
	if ( ! current_user_can( 'manage_network' ) ) {
       return 2; // or any number you want
   }
}
add_filter( 'thread_comments_depth_max', 'ef1_change_level_comment' ); 



add_filter( 'wp_nav_menu_objects', 'single_page_nav_links' );
function single_page_nav_links( $items ) {
	foreach ( $items as $item ) {
			if ('onepage' == $item->object) {
			$current_post = get_post($item->object_id);
			$menu_title = "#".sanitize_title($current_post->post_title);
			$item->url = home_url( '/' ).$menu_title; 
		} 
		elseif('custom' == $item->type) { if (1 === preg_match('/^#([^\/]+)$/', $item->url , $matches)) {
		$item->url = home_url( '/' ).$item->url; } } 
	}
	return $items; 
	}

 

function ef1_parallax(){

	$ef1_section_query = new WP_Query( array( 'post_type' => 'onepage', 'posts_per_page' => -1 )); 
	if($ef1_section_query->have_posts()):  

		$script_return = '';

			$script_return .= "\t".'jQuery(".home_parallax").parallax("50%", "0.4");'."\n";

		while($ef1_section_query->have_posts()) : $ef1_section_query->the_post();
		$parallax =  get_post_meta( get_the_ID(),'background_parallax',true );
		$bg_type =  get_post_meta( get_the_ID(),'background_type',true );
		
		if($bg_type == 'image'){
			if($parallax == true) {
				$script_return .= "\t".'jQuery(".parallax-'.get_the_ID().'").parallax("50%", "0.3");'."\n";
			}
		}

		endwhile;
		$script_out ='';
		$script_out .= '<script type="text/javascript">'."\n".'jQuery(window).load(function () {'."\n";
		$script_out .= $script_return;
		$script_out .= '});'."\n". "\n".'</script>'."\n";

		echo $script_out;

	endif;

}
add_action('wp_footer','ef1_parallax',100);

