<?php 
/**
* Make functions and definitions
*
* @package Make
*/
	 global $is_IE;  
// Title 
function ef1_title(){
 wp_reset_query(); 
	echo	'<title>';
	echo ot_get_option('site_name');
	$description  = ot_get_option('site_description'); 
	if(is_front_page() || is_home()){
					if(!empty($description))echo ' - '.$description ;
					} else { 
					echo ' -' ;wp_title('');
					}
	echo	"</title>\n";

}
add_action('wp_head', 'ef1_title');// Add <title></title> in head
// End Title

// google analytics
function ef1_register_tracking_code(){
		if ( function_exists( 'ot_get_option' ) ) {
			if(ot_get_option('tracking_code')){
				echo ot_get_option('tracking_code');
				} 
		} 
}
add_action( 'wp_head', 'ef1_register_tracking_code' ); 
// end google analytics


//Favicon
function ef1_favicon(){
	if ( function_exists( 'ot_get_option' ) ) {
			if(ot_get_option('favicon')){
				echo '<link rel="shortcut icon" href="'.ot_get_option('favicon').'" />'."\n";
			}
	}
}
add_action('wp_head', 'ef1_favicon');// Add favicon in head
//End Favicon


// add css and scripts
function ef1_make_scripts() {
		wp_dequeue_style( 'ot-dynamic-dynamic-css' );
			wp_register_style( 'ie-css', EF1_INDEX_CSS.'ie.css', false);
			$GLOBALS['wp_styles']->add_data( 'ie-css', 'conditional', 'lt IE 9' );
			wp_enqueue_style( 'ie-css' );
			wp_register_style( 'font-awesome-ie7', EF1_INDEX_CSS.'font-awesome-ie7.min.css', false);
			$GLOBALS['wp_styles']->add_data( 'font-awesome-ie7', 'conditional', 'IE 7' );
			wp_enqueue_style( 'font-awesome-ie7' );
			wp_enqueue_script( 'html5.', 'http://html5shim.googlecode.com/svn/trunk/html5.js' );
			wp_enqueue_script( 'respond.',EF1_INDEX_JS. 'respond.js');
		

			if ( function_exists( 'ot_get_option' ) ) {
				if(ot_get_option('enable_preloader')){ 
					wp_enqueue_script( 'loader', EF1_INDEX_JS.'jquery.loader.js', array('jquery'), '1.0.0', true);	
				}	
			}	
				
			
		
		wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css' );  
		wp_enqueue_style( 'bootstrap', EF1_INDEX_CSS. 'bootstrap.css',array('style') );
		wp_enqueue_style( 'font-awesome',get_template_directory_uri(). '/assets/css/font-awesome.css',array('style','bootstrap') );
		wp_enqueue_style( 'linecons', get_template_directory_uri(). '/assets/css/linecons.css',array('style','font-awesome')  );
		wp_enqueue_script( 'jquery', EF1_INDEX_JS.'jquery.min.js', array('jquery'), '1.0.0', true);	
		wp_enqueue_script( 'colors', EF1_INDEX_JS.'jquery.colors.js', array('jquery'), '1.0.0', true);	
		wp_enqueue_script( 'scripts', EF1_INDEX_JS.'scripts.js', array('jquery'), '1.0.0', true);
		if ( function_exists( 'ot_get_option' ) ) {
			if(ot_get_option('enable_sticky_menu') ) {
				wp_enqueue_script( 'sticky-run', EF1_INDEX_JS.'sticky-run.js', array('jquery'), '1.0.0', true); 
			} 
		}
		wp_enqueue_script( 'sticky', EF1_INDEX_JS.'jquery.sticky.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'timer', EF1_INDEX_JS.'jquery.timer.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'flexisel', EF1_INDEX_JS.'jquery.flexisel.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'fitvids', EF1_INDEX_JS.'jquery.fitvids.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'isotope', EF1_INDEX_JS.'jquery.isotope.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'responsive', EF1_INDEX_JS.'jquery.responsiveslides.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'appear', EF1_INDEX_JS.'jquery.appear.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'timeago', EF1_INDEX_JS.'jquery.timeago.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'parallax', EF1_INDEX_JS.'jquery.parallax-1.1.3.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script( 'scrollto', EF1_INDEX_JS.'jquery.scrollTo-1.4.3.1-min.js', array('jquery'), '1.4.3', true);
		wp_enqueue_script( 'localscroll', EF1_INDEX_JS.'jquery.localscroll-1.2.7-min.js', array('jquery'), '1.2.7', true);

		wp_enqueue_style( 'ot-dynamic-dynamic-css' );
}
add_action( 'wp_enqueue_scripts', 'ef1_make_scripts' );

//description
function ef1_description(){
	if ( function_exists( 'ot_get_option' ) ) {
		if(ot_get_option('meta_description')) 
			echo '<meta name="description" content="'.ot_get_option('meta_description').'"/>';
		}
	}
add_action( 'wp_head', 'ef1_description' );
//end description 

//meta_keywords
function ef1_meta_keywords(){
	if ( function_exists( 'ot_get_option' ) ) {
		if(ot_get_option('meta_keywords')) 
			echo '<meta name="keywords" content="'.ot_get_option('meta_keywords').'"/>';
		}
	}
add_action( 'wp_head', 'ef1_meta_keywords' ); 
//end meta_keywords 

// header size menu
function ef1_small_menu(){
	if ( function_exists( 'ot_get_option' ) ) {
		if(ot_get_option('header_size')== 2) 
			wp_enqueue_style( 'small_menu', get_template_directory_uri(). '/assets/css/menusmall.css' );
		}
	}
add_action( 'wp_head', 'ef1_small_menu' ); 
//end header size menu


/**
 * Enqueue the Open Sans font.
 */
function mytheme_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'Raleway', "$protocol://fonts.googleapis.com/css?family=Raleway:400,800,700,500,300,100" );
	wp_enqueue_style( 'ABeeZee', "$protocol://fonts.googleapis.com/css?family=ABeeZee" );}
add_action( 'wp_enqueue_scripts', 'mytheme_fonts' );