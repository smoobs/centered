<?php
/**
 * @package Make
 */
?>

<div id="error">
	<h1>ooops...</h1>
	<p class="error-text">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'make' ), esc_url( admin_url( 'post-new.php' ) ) ); ?>

		<?php elseif ( is_search() ) : ?>

			<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'make' ); ?>

		<?php else : ?>

			<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'make' ); ?>

		<?php endif; ?>
	</p>	
</div>


		
