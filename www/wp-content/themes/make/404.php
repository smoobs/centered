<?php
/**
 * @package Make
*/

 get_header(); 
 get_template_part( 'assets/php/partials/nav', 'header' ); 
?>

<div id="error">
	<h1><?php
	if ( function_exists( 'ot_get_option' ) ) {
		if(ot_get_option('404_title_text')) {
			echo ot_get_option('404_title_text');
		}
	} else {
		echo 'ooops... error 404';
	}
	?></h1>
	<p class="error-text"><?php
	if ( function_exists( 'ot_get_option' ) ) {
		if(ot_get_option('404_text')) {
			echo ot_get_option('404_text');
		}
	} else {
		echo 'We`re sorry, but the page you are looking for doesn`t exist.';
	}
	?></p>
	<a href="<?php echo home_url(); ?>" class="button-style-3">Go to homepage</a>
	
</div>

<?php get_footer(); ?>