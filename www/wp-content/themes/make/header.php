<?php
/**
 * @package Make
 */
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<!-- META DATA -->
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta charset="UTF-8">
		<meta name="author" content="Studio Themes"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php
		if ( function_exists( 'ot_get_option' ) ) {
			echo ot_get_option('before_head'); 
		} ?> 
		
		<?php wp_head(); ?> 
	</head>
	<body <?php body_class(); ?>>