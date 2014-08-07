<?php

/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('one_first')) {
	function one_first( $atts, $content = null ) {
	   return '<div class="col-md-12 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_first', 'one_first');
}

if (!function_exists('one_third')) {
	function one_third( $atts, $content = null ) {
	   return '<div class="col-md-4 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third', 'one_third');
}


if (!function_exists('two_third')) {
	function two_third( $atts, $content = null ) {
	   return '<div class="col-md-8 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_third', 'two_third');
}


if (!function_exists('one_half')) {
	function one_half( $atts, $content = null ) {
	   return '<div class="col-md-6 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_half', 'one_half');
}


if (!function_exists('one_fourth')) {
	function one_fourth( $atts, $content = null ) {
	   return '<div class="col-md-3 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fourth', 'one_fourth');
}



if (!function_exists('three_fourth')) {
	function three_fourth( $atts, $content = null ) {
	   return '<div class="col-md-9 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fourth', 'three_fourth');
}




if (!function_exists('one_sixth')) {
	function one_sixth( $atts, $content = null ) {
	   return '<div class="col-md-2 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_sixth', 'one_sixth');
}


if (!function_exists('five_sixth')) {
	function five_sixth( $atts, $content = null ) {
	   return '<div class="col-md-10 column">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('five_sixth', 'five_sixth');
}




/*-----------------------------------------------------------------------------------*/
/*	Buttons
/*-----------------------------------------------------------------------------------*/

if (!function_exists('zilla_button')) {
	function zilla_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => '#',
			'target' => '_self',
			'style' => 'grey',
			'size' => 'small',
			'type' => 'round'
	    ), $atts));
		
	   return '<a target="'.$target.'" class="zilla-button '.$size.' '.$style.' '. $type .'" href="'.$url.'">' . do_shortcode($content) . '</a>';
	}
	add_shortcode('zilla_button', 'zilla_button');
}


/*-----------------------------------------------------------------------------------*/
/*	Alerts
/*-----------------------------------------------------------------------------------*/

if (!function_exists('alert')) {
	function alert( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'style'   => 'alert-1'
	    ), $atts));
		
	   return '<div class="alert '.$style.'">' . do_shortcode($content) . '<i class="icon-remove close-alert"></i></div>';
	}
	add_shortcode('alert', 'alert');
}


/*-----------------------------------------------------------------------------------*/
/*	Toggle Shortcodes
/*-----------------------------------------------------------------------------------*/
	
if (!function_exists('toggle')) {
	function toggle( $atts, $content = null ) {
	    extract(shortcode_atts(array(
			'title'    	 => 'Title goes here',
			'state'		 => 'open'
	    ), $atts));
	
		
			if($state == 'open') $state_return= 'style="overflow: hidden; display: block;"';
			elseif($state =="closed") $state_return= 'style="overflow: hidden; display: none;"';
		
		return '<div class="toggle"><div class="toggle-title"><div class="toggle-title-text hover-icon">'.$title .'</div><div class="toggle-arrow"><i class="icon-angle-right"></i></div></div>
		<div class="toggle-content"'.$state_return.' >'.do_shortcode($content) .	'		</div>
		</div>';
		

	}
	add_shortcode('toggle', 'toggle');
}


/*-----------------------------------------------------------------------------------*/
/*	Tabs Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('tabs')) {
	function tabs( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		
		STATIC $i = 0;
		$i++;
		
		// Extract the tab titles for use in the tab widget.
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';
		

		if( count($tab_titles) ){
		    $output .= '<div id="tabs-'. $i .'" class="tabs">';
			$output .= '<ul class="tabs-menu">';
			
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#tab-content-'.sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    
		    $output .= '</ul><div class="clearfix"></div>';
		    $output .= do_shortcode( $content );
		    $output .= '</div>';
		} else {
			$output .= do_shortcode( $content );
		}
		
		return $output;
	}
	add_shortcode( 'tabs', 'tabs' );
}

if (!function_exists('tab')) {
	function tab( $atts, $content = null ) {
		$defaults = array( 'title' => 'Tab' );
		extract( shortcode_atts( $defaults, $atts ) );
		
		return '<div id="tab-content-'. sanitize_title( $title ) .'" class="tab-content" >'. do_shortcode( $content ) .'</div>';
	}
	add_shortcode( 'tab', 'tab' );
}


/*-----------------------------------------------------------------------------------*/
/*	Accordions Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('accordions')) {
	function accordions( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		
		STATIC $i = 0;
		$i++;
		
		// Extract the tab titles for use in the tab widget.
		preg_match_all( '/accordion title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';
		

		if( count($tab_titles) ){
		    $output .= '<div id="tabs-'. $i .'" class="single-toggles">';
				$output .= do_shortcode( $content );
		    $output .= '</div>';
		} else {
			$output .= do_shortcode( $content );
		}
		
		return $output;
	}
	add_shortcode( 'accordions', 'accordions' );
}

if (!function_exists('accordion')) {
	function accordion( $atts, $content = null ) {
		$defaults = array( 'title' => 'Tab' );
		extract( shortcode_atts( $defaults, $atts ) );
		
		return '<div class="toggle">
								<div class="toggle-title">
									<div class="toggle-title-text hover-icon">'.
										$title .'
									</div>
									<div class="toggle-arrow">
										<i class="icon-angle-right"></i>
									</div>
								</div>
								<div class="toggle-content"  style="overflow:hidden; display:none;">
									'.do_shortcode( $content ).'
								</div>
							</div>';
							
	}
	add_shortcode( 'accordion', 'accordion' );
}

/*-----------------------------------------------------------------------------------*/
/*	Diagrams Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('diagrams')) {
	function diagrams( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		
		STATIC $i = 0;
		$i++;
		
		// Extract the tab titles for use in the tab widget.
		preg_match_all( '/diagram title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';
		

		if( count($tab_titles) ){
		    $output .= '<div id="diagram-'. $i .'" class="diagram">';
				$output .= do_shortcode( $content );
		    $output .= '</div>';
		} else {
			$output .= do_shortcode( $content );
		}
		
		return $output;
	}
	add_shortcode( 'diagrams', 'diagrams' );
}

if (!function_exists('diagram')) {
	function diagram( $atts, $content = null ) {
			    extract(shortcode_atts(array(
			'title'    	 => 'Title ',
			'percent'	 => 'percent',
			'text_color'  => 'default'
	    ), $atts));
		
		
		return '<div class="bar">
								<h6 class="'.$text_color.'">'.$title.'</h6>
								<div class="bar-graph">
									<div class="main-layer"></div>
									<div class="percent-layer general_bg percent-1" style="width: '.$percent .'%; overflow: hidden;"></div>
								</div>
							</div>';
							
	}
	add_shortcode( 'diagram', 'diagram' );
}
/*-----------------------------------------------------------------------------------*/
/*	Socian Icons Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('social')) {
	function social( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'icon'   => 'faceook'
	    ), $atts));
		
	   return '<div class="style-icon-1 general_bg social_icon">
							<i class="'.$icon.'"></i>
						</div>';
	}
	add_shortcode('social', 'social');
}

/*-----------------------------------------------------------------------------------*/
/* Callout Box Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('callout_box')) {
	function callout_box( $atts, $content = null ) {
		ob_start();
		extract(shortcode_atts(array(
			'title'   => 'Title',
			'button_link' => '#',
			'button' => 'Purchase',
			'text_color' => 'default'
	    ), $atts));
		
	   return '<div class="callout-box '.$text_color.'">
							<a href="'. $button_link .'" class="callout-box-button button-desktop '.$text_color.'">'. $button .'</a>
							<h3>'. $title .'</h3>
							<p>'.do_shortcode( $content ).'</p>
							<a href="'. $button_link .'" class="callout-box-button button-mobile '.$text_color.'">'. $button .'</a>
						</div>';
						$tmp = ob_get_clean();
						return $tmp;
	}
	add_shortcode('callout_box', 'callout_box');
}

/*-----------------------------------------------------------------------------------*/
/* Content Box Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('content_box')) {
	function content_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title'   => 'Title',
			'icon' => '',
			'icon2' => '',
			'style' => '',
			'text_color'=>''
	    ), $atts));
		
		$icon_code = '';
		
		if($style =='style1'){
		if(!empty($icon)) $icon_code = '<div class="general_color" data-icon="&#'.substr($icon,-5).';"></div>';
		elseif(!empty($icon2)) $icon_code = '<i class="'.$icon2.' general_color aw-icon1"></i>';}
		elseif($style =='style2'){
		if(!empty($icon)) $icon_code = '<div class="services-icon general_color" data-icon="&#'.substr($icon,-5).';"></div>';
		elseif(!empty($icon2)) $icon_code = '<i class="'.$icon2.' general_color aw-icon2 services-icon"></i>';}
		
		
	   if($style =='style1'){ return '<div class="info-box '.$text_color.'">'.$icon_code.'
	   <h3>'. $title .'</h3>
	   <p>'.do_shortcode( $content ).'</p></div>';}
	   elseif($style =='style2'){ return '<div class="services-box '.$text_color.'">
								'.$icon_code.'
								<h4>'. $title .'</h4>
								<p>'.do_shortcode( $content ).'
								</p>
							</div>';}
	}
	add_shortcode('content_box', 'content_box');
}

/*-----------------------------------------------------------------------------------*/
/* Number Details Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('number_details')) {
	function number_details( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'number'   => '100',
			'number_details' => '',
			'text_color' => 'default'
	    ), $atts));
		
	   return '<div class="number_container" data-perc="'.$number.'">
								<div class="number general_color">'.$number.'</div>
								<h3 class="number_details '.$text_color.'">'.$number_details.'</h3>
							</div>';
	}
	add_shortcode('number_details', 'number_details');
}

/*-----------------------------------------------------------------------------------*/
/* Clear Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('clear')) {
	function clear( $atts, $content = null ) {
		extract(shortcode_atts(array(
				
	    ), $atts));
		
	   return '<div class="clearfix"></div>';
	}
	add_shortcode('clear', 'clear');
}

/*-----------------------------------------------------------------------------------*/
/* Divider Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('divider')) {
	function divider( $atts, $content = null ) {
		extract(shortcode_atts(array(
				
	    ), $atts));
		
	   return '<div class="divider-1"></div>';
	}
	add_shortcode('divider', 'divider');
}

/*-----------------------------------------------------------------------------------*/
/* Video Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('video_player')) {
    function video_player($atts) {
    $atts = extract(shortcode_atts(array(
            'video_id' => '',
            'video_type'=>''
            ),$atts));

            if(isset($video_id)){
              if( $video_type =='youtube'){
              $video_url = 'http://www.youtube.com/embed/'.$video_id;
              }elseif( $video_type == 'vimeo'){
              $video_url = 'http://player.vimeo.com/video/'.$video_id.'?title=0&amp;byline=0&amp;portrait=0';
              }
                    if(!empty($video_url)):
                    $video = '';
                    $video .= '<div class="fit">';
                            $video .= '<iframe src="'.$video_url.'"  width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
                            $video .= '</div>';

                    endif;
                    return $video;
            }
    }
    add_shortcode('video_player','video_player');
}


/*-----------------------------------------------------------------------------------*/
/* Google Map
/*-----------------------------------------------------------------------------------*/
if (!function_exists('google_map')) {
    function google_map($atts) {
    $atts = extract(shortcode_atts(array(
            'map_code' => '',
            ),$atts));

            if(isset($map_code)){
                $map_short .= '<div class="google-map"><iframe src="'.$map_code.'"></iframe></div>';

            return $map_short;
            }
    }
    add_shortcode('google_map','google_map');
}

/*-----------------------------------------------------------------------------------*/
/* Pricing Tables Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('pricing_table')) {
function pricing_table( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'title' => 'Basic',
	'price' => '99',
	'value' => '$',
	'subtitle_price'=>'per month',
	'link' => '#',
	'button_text' => 'Sign Up Now'
	),$atts));

		$table = '';

		$table .='';
		$table .='<ul class="pricing-table">';

		$table .='<li class="head-table general_bg"><h3>'.$title.'</h3>';
		$table .= '</li>';
		$table .='<li class="price-table">
								<span class="money">'.$value.'</span>
								<span class="count-price">'.$price.'</span>
								<p>'.$subtitle_price.'</p>
							</li>';
		$table .= do_shortcode($content);

		$table .= '<li class="button-style-1 general_border">';
		$table .= '<a href="'.$link.'" class="general_color" target="_blank">'.$button_text.'</a>';
		$table .= '</li>';

		$table .='</ul>';
		$table .='';

		return $table;

	}

function price_option( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'' => '',
	),$atts));


	return '<li>'.$content.'</li>';



	}
add_shortcode('pricing_table','pricing_table');
add_shortcode('price_option','price_option');
}

/*-----------------------------------------------------------------------------------*/
/* Team Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('team')) {
	function team( $atts, $content = null ) {
		ob_start();
		extract(shortcode_atts(array(
				
	    ), $atts));
		$the_query = new WP_Query(array('post_type'=>'team','posts_per_page' => -1,));
		if($the_query->have_posts()) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$photo = get_post_meta( get_the_ID(),'photo',true );
			$facebook = get_post_meta( get_the_ID(),'facebook',true );
			$twitter = get_post_meta( get_the_ID(),'twitter',true );
			$googleplus = get_post_meta( get_the_ID(),'googleplus',true );
			$linkedin = get_post_meta( get_the_ID(),'linkedin',true );	
			$dribble = get_post_meta( get_the_ID(),'dribble',true );
			$job = get_post_meta( get_the_ID(),'job',true );
			echo '<div class="col-md-3 team-member">
							<div class="team-social">
								<div class="team-icons">';
								if(!empty($facebook)):
									echo '<a href="'.$facebook.'" class="fb-bg social-icon"><i class="icon-facebook"></i></a>';
								endif;	
								if(!empty($twitter)):
									echo '<a href="'.$twitter.'" class="twitter-bg social-icon"><i class="icon-twitter"></i></a>';
								endif;
								if(!empty($dribble)):
									echo '<a href="'.$dribble.'" class="dribbble-bg social-icon"><i class="icon-dribbble"></i></a>';
								endif;
								if(!empty($linkedin)):
									echo '<a href="'.$linkedin.'" class="linkedin-bg social-icon"><i class="icon-linkedin"></i></a>';
								endif;	
								if(!empty($googleplus)):
									echo '<a href="'.$googleplus.'" class="plus-bg social-icon"><i class="icon-google-plus"></i></a>';
								endif;	
								echo '</div>
								<img src="'.$photo.'" alt="1" class="img-circle img-responsive">
								<div class="team-button"><i class="icon-user"></i></div>
							</div>
							<h3>'.get_the_title().'</h3>
							<p class="team-work">'.$job.'</p>
						</div>';
			endwhile;
		endif;
		$tmp = ob_get_clean();
		return $tmp;
	}
	add_shortcode('team', 'team');
}
/*-----------------------------------------------------------------------------------*/
/* Clients Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('clients')) {
	function clients( $atts, $content = null ) {
		ob_start();
		extract(shortcode_atts(array(
				
	    ), $atts));
		$the_query = new WP_Query( 'post_type=clients&posts_per_page=50');
		
			echo '<ul class="client-carousel">';
			if($the_query->have_posts()) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$image = get_post_meta( get_the_ID(),'image',true );
			$client_link = get_post_meta( get_the_ID(),'client_link',true );
			if($client_link != '') echo '<li><a href="'.$client_link.'" target="_blank"><img src="'.$image.'" class="img-responsive" alt="" /></a></li>';
			else echo '<li><img src="'.$image.'" class="img-responsive" alt="" /></li>';		
			endwhile;
		endif;
		echo '</ul>';
		wp_reset_query(); 
		$tmp = ob_get_clean();
		return $tmp;
	}
	add_shortcode('clients', 'clients');
}



/*-----------------------------------------------------------------------------------*/
/*	Testimonials Shortcodes 
/*-----------------------------------------------------------------------------------*/

if (!function_exists('testimonials')) {  
	function testimonials( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		
		STATIC $i = 0;
		$i++;
		
		preg_match_all( '/testimonial title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';
		

		
		    $output .= '<div id="testimonials-'. $i .'"  class="testimonial"><ul class="rslides-testimonials rslides">';
				$output .= do_shortcode( $content );
		    $output .= '</ul><nav class="rslides-navi testimonials-navi"></nav></div>	';
		
		
		return $output;
	}
	add_shortcode( 'testimonials', 'testimonials' );
}

if (!function_exists('testimonial')) {
	function testimonial( $atts, $content = null ) {
		$defaults = array( 'author' => 'author',
							'company' => 'company');
		extract( shortcode_atts( $defaults, $atts ) );
	
					
				return '<li>
							<blockquote>
								'.do_shortcode( $content ).' 
							</blockquote>
							<span>'.$author.', '.$company.'</span>
						</li>';					
	}
	add_shortcode( 'testimonial', 'testimonial' );
}

/*-----------------------------------------------------------------------------------*/
/* Portfolio Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('portfolio')) {
	function portfolio( $atts, $content = null ) {
		ob_start();
		extract(shortcode_atts(array(
				
	    ), $atts));
		wp_reset_query();
		$the_query_portfolio = new WP_Query( 'post_type=portfolio&posts_per_page=50');
			echo '
			<div class="container">
				<div class="portfolio-view">
					<div class="ajax-portfolio-loader"><img src="'.get_template_directory_uri().'/assets/images/loader.gif" alt ="Loading" /></div>
					<div class="close-button">
							<i class="icon-remove"></i>
						</div>
					<div class="row"> 
						
					</div>
				</div>
			</div>
			<div class="portfolio-works">
				<div class="container">
					<nav class="portfolio-categories">
						<ul>
							<li><a href="#" data-filter="*" class="current" >All</a></li>
							';
							 $terms = get_terms('portfolio-category','hide_empty=0');
							 $count = count($terms);
							 if ( $count > 0 ){
								
								 foreach ( $terms as $term ) {
								   echo '<li><a href="#" data-filter=".'.$term->slug.'">' . $term->name . '</a></li>';
									
								 }
							
							 }
						echo '</ul>
					</nav>
				</div>
			</div>';
			
			echo '<div class="portfolio-container">';
			if($the_query_portfolio->have_posts()) :
			while ($the_query_portfolio->have_posts() ) : $the_query_portfolio->the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
			 
			$term_list = wp_get_post_terms(get_the_ID(), 'portfolio-category', array("fields" => "slugs"));
						echo '<div class="';
							foreach ($term_list as  $terms   ){
								echo $terms.' ';   
							
							}
						
						echo '">';
						echo '<a href="'.get_permalink().'" class="portfolio-box">
											<img src="'.$url.'" class="img-responsive" alt="" /> 
											<div>
												<div class="portfolio-info">
													<i class="icon-picture"></i>
													<p>'.get_the_title().'</p>'; 
													$term_list_name = wp_get_post_terms(get_the_ID(), 'portfolio-category', array("fields" => "names"));
													echo '<span>';
													$i =0;
														foreach ($term_list_name as  $terms   ){
															echo $terms; 
															if($i < count($term_list_name)-1){
															echo ' / ';
															}
															$i++;
														};
							echo'						</span>
												</div>
											</div>
										</a>
								</div>';
			endwhile;
		endif;
		echo '</div>';
		$tmp = ob_get_clean();
		return $tmp;
	}
	add_shortcode('portfolio', 'portfolio');
}

/*-----------------------------------------------------------------------------------*/
/*	Contact Form Shortcodes
/*-----------------------------------------------------------------------------------*/
 
if (!function_exists('contact_form')) {
	function contact_form( $atts, $content = null ) {
		ob_start();
		extract(shortcode_atts(array(
	    ), $atts));
		
	   return '<div class="contact-form">
					<script>
						var url_js = "'.get_template_directory_uri().'/assets/php/contact-form.php";
					</script>
					<form method="post" id="form-ajax">
						<div class="row">
							<div class="col-md-6">
								<textarea name="message" onfocus="if(this.value==this.defaultValue)this.value=\'\';" onblur="if(this.value==\'\')this.value=this.defaultValue;" id="message-contact">Your message...</textarea>
							</div>
							<div class="col-md-6">
								<input type="text" name="personal" value="Your name (required)" onfocus="if(this.value==\'\' || this.value == \'Your name (required)\') this.value=\'\'" onblur="if(this.value == \'\') {this.value=this.defaultValue}" onkeyup="keyUp();" id="personal" />
								<input type="text" name="email" value="Your email (required)" onfocus="if(this.value==\'\' || this.value == \'Your email (required)\') this.value=\'\'" onblur="if(this.value == \'\') {this.value=this.defaultValue}" onkeyup="keyUp();" id="email" />
								<input type="text" name="website" value="Your website" onfocus="if(this.value==\'\' || this.value == \'Your website\') this.value=\'\'" onblur="if(this.value == \'\') {this.value=this.defaultValue}" onkeyup="keyUp();" id="website" />
								<input type="hidden" name="my_email" value="'.ot_get_option('contact_email').'" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-button general_bg">
									<i class="icon-envelope"></i>
									<input type="submit" name="send" value="&nbsp;" id="submit-contact" />
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="contact-success">
					<h2 class="contact-text">Thank you for your <span class="general_color">message</span>. We will try to answer as soon as possible</h2>
				</div>';
				$tmp = ob_get_clean();
				return $tmp;
	}
	add_shortcode('contact_form', 'contact_form');
}

/*-----------------------------------------------------------------------------------*/
/*	Contact Details Shortcodes
/*-----------------------------------------------------------------------------------*/
 
if (!function_exists('contact_details')) {
	function contact_details( $atts, $content = null ) {
		extract(shortcode_atts(array(
		'adress' => '',
		'phone' => '',
		'fax' => '',
		'mail'=>'',
		'text_color' => 'default'
	    ), $atts));
		
	   return '	<div class="contact-info '.$text_color.'">
					<div class="col-md-3 contact-content">
						<div class="style-icon-1 general_bg">
							<i class="icon-map-marker"></i>
						</div>
						<div class="contact-text-info">
							<span>Address:</span> '.$adress.'
						</div>
					</div>
					<div class="col-md-3 contact-content">
						<div class="style-icon-1 general_bg">
							<i class="icon-phone"></i>
						</div>
						<div class="contact-text-info">
							<span>Phone:</span> '.$phone.'
						</div>
					</div>
					<div class="col-md-3 contact-content">
						<div class="style-icon-1 general_bg">
							<i class="icon-print"></i>
						</div>
						<div class="contact-text-info">
							<span>Fax:</span> '.$fax.'
						</div>
					</div>
					<div class="col-md-3 contact-content">
						<div class="style-icon-1 general_bg">
							<i class="icon-envelope-alt"></i>
						</div>
						<div class="contact-text-info">
							<span>Mail:</span> '.$mail.'
						</div>
					</div>
					<div class="clearfix"></div>
				</div>';
	}
	add_shortcode('contact_details', 'contact_details');
}

/*-----------------------------------------------------------------------------------*/
/*	News Shortcodes
/*-----------------------------------------------------------------------------------*/
 
if (!function_exists('news')) {
	function news( $atts, $content = null ) {
	ob_start();
		extract(shortcode_atts(array(
		'number_posts' => '3',
		'number_posts_row' => '3',
		'category' => '',
	    ), $atts));
		$number_posts_row = 12/$number_posts_row;
		wp_reset_query();
		wp_reset_postdata();  
	   $args = array( 'posts_per_page' => $number_posts, 'category' => $category );
		global $post;
		$myposts = get_posts( $args );

		foreach ( $myposts as $post ) : setup_postdata( $post ); 
			 echo '<div class="col-md-'.$number_posts_row.'">  
						<div class="news">';
						if(get_the_post_thumbnail(get_the_ID())):
							echo '<div class="news-thumb">
								<div class="news-icon-thumb general_bg">
									<i class="icon-pencil"></i>
								</div>'.
								get_the_post_thumbnail(get_the_ID(),'news-image', array('class' => 'img-responsive') ).'
							</div>';
							endif;
							
						echo	'<div class="news-content">
								<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
								<p>'.get_the_excerpt() .'</p>
							</div>
							<footer>
								<div>
									<div class="news-border">
										<div class="info-about-news">
											<i class="icon-calendar"></i><span>'. get_the_time('j F Y').'</span>
											<i class="icon-comments"></i><span>'.get_comments_number( '0', '1', '%' ).'</span>
										</div>
										<div class="footer-plus-news">
											<a href="'.get_permalink().'" class="news-plus general_bg">
												<i class="icon-plus"></i>
											</a>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</footer>
						</div>
					</div>';
					
		endforeach; 

		wp_reset_postdata();
		wp_reset_query();
		$tmp = ob_get_clean();
		return $tmp;
	}
	add_shortcode('news', 'news');
}

/*-----------------------------------------------------------------------------------*/
/*	Slogan Shortcodes
/*-----------------------------------------------------------------------------------*/
 
if (!function_exists('slogan')) {
	function slogan( $atts, $content = null ) {
		extract(shortcode_atts(array(
		'text_size' => '',
		'text_color' => 'default'
	    ), $atts));
		

		return '<div class="slogan '.$text_color.'"><'.$text_size.'>'.do_shortcode( $content ).'</'.$text_size.'></div>';
		
	   
	}
	add_shortcode('slogan', 'slogan');  
}

/*-----------------------------------------------------------------------------------*/
/*	Text Shortcodes
/*-----------------------------------------------------------------------------------*/
 
if (!function_exists('text')) {
	function text( $atts, $content = null ) {
		extract(shortcode_atts(array(
		'text_size' => '',
		'text_color' => 'default'

	    ), $atts));
		
		return '<div class="text '.$text_color.'"><'.$text_size.'>'.do_shortcode( $content ).'</'.$text_size.'></div>';
	   
	}
	add_shortcode('text', 'text');
}


/*-----------------------------------------------------------------------------------*/
/*	Slogan Shortcodes
/*-----------------------------------------------------------------------------------*/
 
if (!function_exists('title')) {
	function title( $atts, $content = null ) {
		extract(shortcode_atts(array(
		'text_size' => '',
		'border' =>'on',
		'text_align' => 'center',
		'text_color' => 'default'
	    ), $atts));
		
		switch($text_align){
			case 'left':
				$text_align = 'textalignleft';
				break;
			case 'right':
				$text_align = 'textalignright';
				break;
			case 'center':
				$text_align = 'textaligncenter';
				break;
		};
		
		switch($border){
			case 'on':
				$border = 'line-header-border';
				break;
			case 'off':
				$border = '';
				break;
		};

		return '<'.$text_size.' class="line-header '.$text_color.' '.$text_align.' '.$border.'">'.do_shortcode( $content ).'</'.$text_size.'>';
		
	   
	}
	add_shortcode('title', 'title');  
}
?>