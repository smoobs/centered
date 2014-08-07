<?php
/**
 * @package Make
 */

	get_header(); 
	get_template_part( 'assets/php/partials/nav', 'header' );
?>

<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>Search</h2>  
				<div class="head-line-dark"></div>
			</div>
			<?php if(function_exists( 'ot_get_option' )):
					if(ot_get_option('default_layout')=='left_sidebar'): ?>
						<aside class="col-md-3 ">
							<?php get_sidebar(); ?>
						</aside>
			<?php endif;endif;?>
			<!-- CONTENT COLUMN -->
			<div class="col-md-9">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'assets/php/partials/content', 'category' ); ?>
			<?php endwhile; else: ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif;?>
				<nav id="blog-navigation">
					<?php 
					if(function_exists( 'ot_get_option' )){
						if(ot_get_option('pagination_type')==2){ 
							posts_nav_link(' ', '<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>');}
						else {
							my_pagination();}
					}?>
				</nav>
			</div>
			<?php wp_reset_query(); ?>
			<!-- SIDEBAR -->
			<?php if(function_exists( 'ot_get_option' )):
					if(ot_get_option('default_layout')!='left_sidebar'): ?>
						<aside class="col-md-3 ">
							<?php get_sidebar(); ?>
						</aside>
			<?php endif;endif;?>
		</div>
	</div>
</div>

<?php get_footer(); ?>