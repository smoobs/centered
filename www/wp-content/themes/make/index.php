<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Make
 */
 get_header();
$header_menu = ot_get_option('nav_items',false);
 ?>

<?php get_template_part( 'assets/php/partials/nav', 'header' ); ?>
		
<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>Blog</h2>  
				<div class="head-line-dark"></div>
			</div>
			<!-- CONTENT COLUMN -->
			<div class="col-md-9">
			<!-- FIRST POST BLOG -->
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
						<aside class="col-md-3 ">
							<?php get_sidebar(); ?>
						</aside>
		</div>
	</div>
</div>


<?php get_footer(); ?>