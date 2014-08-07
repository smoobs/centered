<?php
/**
 * @package Make
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'post-blog'); ?>>
	<div class="media-post">
		<?php
		$args = array(  
		'numberposts' => -1, // Using -1 loads all posts  
		'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager  
		'order'=> 'ASC',  
		'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
		'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
		'post_status' => null, 
		'post_type' => 'attachment'  
		);  
	  
		$images = get_children( $args );
		
		if( !has_post_format( 'video' ) &&! has_post_format( 'gallery' )  ) {
			if ( has_post_thumbnail() ) { 
			 the_post_thumbnail( 'post-thumb', array('class' => 'img-responsive') ); 
			}
		
		} 
		elseif($images && has_post_format( 'gallery' )){
			echo '<ul class="rslides rslides-blog">';
			foreach($images as $image){ 
				echo '<li>';
				echo wp_get_attachment_image($image->ID, 'post-thumb'); 
				echo '</li>';
			}
			echo '</ul>';	
		
			
		
		}
		elseif( has_post_format( 'video' ) ) {
			$video = get_post_meta( $post->ID, '_format_video_embed', true );
			?>
			<?php
			$video = str_replace('<iframe', '<div class="media"><iframe', $video);
			$video = str_replace('</iframe>', '</iframe></div>', $video);
			 echo '<div>'.$video.'</div>';
		}
		?> 
		
		
		
	</div>
	<?php
		$icon = 'icon-pencil';
		if(has_post_format( 'video' )) {
			$icon = 'icon-play';
		}
		
		if(has_post_format( 'gallery' )) {
			$icon = 'icon-camera';
		}
		
		//if(has_post_format( 'video' )) {
		
		//}
	?>
	<div class="post-content text-edit">
		<div class="style-icon-3 general_bg post-icon">
			<i class="<?php echo $icon; ?>"></i>
		</div>
		<h3><?php the_title(); ?></h3>
		<span class="post-date">Posted by <?php the_author_posts_link(); ?> / <?php the_time('F jS, Y'); ?> / <a href="<?php  comments_link(); ?>" class="general_color"><?php comments_number( 'No responses', '1 Response', '% Responses' ); ?></a></span> 
		<?php the_content(); ?>
		<?php  wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'make' ), 'after' => '</div>' ) );?> 								
		<footer>
			<div class="post-tags">
					<?php
					$posttags = get_the_tags();
					if ($posttags) {
					  echo get_the_tag_list('<i class="icon-tags"></i>',' ' );
					}?> 
			</div>
			
		</footer>
	</div>
	<div class="divider-1"></div>
	<?php if(get_the_author_meta('description')):?>
	<div id="post-author">
		<h3 class="line-header general_border">About the Author</h3>
		<div>
			<?php echo get_avatar( get_the_author_meta('ID'), 80 ); ?>
			<?php echo get_the_author_meta('description'); ?>
		</div>
	</div>
	<?php endif;?>
	<?php comments_template(); ?>
 
</div>