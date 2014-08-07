<?php
/**
 * @package Make
 */
?>

<div id="category-<?php the_ID(); ?>" <?php post_class( 'post-blog'); ?>>
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
			 echo '<a href="'.get_permalink().'">';
			 the_post_thumbnail( 'post-thumb', array('class' => 'img-responsive post-thumb') );
			 echo '</a>';
			}
		
		} 
		elseif($images && has_post_format( 'gallery' )){
			echo '<ul class="rslides rslides-blog">';
			foreach($images as $image){ 
				echo '<li>';
				echo '<a href="'.get_permalink().'">';
				echo wp_get_attachment_image($image->ID, 'post-thumb'); 
				echo '</a></li>';
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
	?>
	<div class="post-content">
		<div class="style-icon-3 general_bg post-icon">
			<i class="<?php echo $icon; ?>"></i>
		</div>
		<h3><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php
		if ( function_exists( 'ot_get_option' ) ) {
			if(ot_get_option('enable_author_info')){
				echo '<span class="post-date">Posted by '. get_the_author_link();
			}
			if(ot_get_option('enable_create_data')){
				if(ot_get_option('enable_author_info')){
					echo ' / ';
					}
				the_time('F jS, Y');
			}
			if(ot_get_option('enable_comments_info')){
				if(ot_get_option('enable_author_info') || ot_get_option('enable_create_data')){
					echo ' / ';
				}	
				echo  '<a href="'.get_comments_link().'" class="general_color">';
				comments_number( 'No responses', '1 Response', '% Responses' );
				echo '</a></span> ';
			}
		}
		
		
		
		?>
		
		<?php the_excerpt(); ?> 
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
</div>