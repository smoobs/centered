<?php
/**
 * @package Make
*/
/*
Template Name: One Page Template
*/

get_header(); 
?> 
<?php get_template_part( 'assets/php/partials/nav', 'header' ); ?>
		<?php $the_query_onepage = new WP_Query( 'post_type=onepage&posts_per_page=50');?>
		<?php if ($the_query_onepage->have_posts() ) : ?>
			<?php while ($the_query_onepage->have_posts() ) : $the_query_onepage->the_post(); ?>
				<?php get_template_part('assets/php/partials/content', 'page'); ?>	
			<?php endwhile; wp_reset_query();?>
		<?php else : ?> 
			<?php get_template_part( 'no-results', 'index' ); ?>
		<?php endif; ?> 
<?php get_footer(); ?>