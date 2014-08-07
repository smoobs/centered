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
					<h2><?php the_title(); ?></h2>
					<div class="head-line-dark"></div>
				</div>		
				<div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
					<div <?php post_class( 'text-edit');?> >
						<?php the_content(); ?> 
					</div>
				<?php endwhile; else: ?>
					<?php get_template_part( 'no-results', 'index' ); ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>