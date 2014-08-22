<?php
/**
 * @package Make
 */

$bg_img = get_post_meta( get_the_ID(),'background_image',true );
$title_main = get_the_title();
$title = get_post_meta( get_the_ID(),'page_custom_title',true );
$title_icon = get_post_meta( get_the_ID(),'title_icon',true );
$title_color = get_post_meta( get_the_ID(),'title_color',true );
$background_color = get_post_meta( get_the_ID(),'background_color',true );
$bg_type =  get_post_meta( get_the_ID(),'background_type',true );
$title_underline_color =  get_post_meta( get_the_ID(),'title_underline_color',true );
$container_width =  get_post_meta( get_the_ID(),'container_width',true );
$parallax =  get_post_meta( get_the_ID(),'background_parallax',true );

 ?>

<div id="<?php echo sanitize_title($title_main); ?>" style="<?php  
if($bg_type == 'image')
echo (!empty($bg_img))?'background-image:url('.$bg_img.');background-attachment:fixed;':'' ;
elseif($bg_type == 'color') 
echo (!empty($background_color))?'background-color:'.$background_color.'':'' ;

?>" class="img_size clearfix text-edit slide-menu<?php if($bg_type == 'image'){ if($parallax == 1){ echo ' parallax-'.get_the_ID();}}?>">
			<?php if($container_width == "default"): ?>
			<div class="container">
				<div class="row sections-content">
			<?php endif; ?>	
					<?php if(!empty($title)): ?>
						<div class="title" <?php  echo (!empty($title_color))?'style="color:'.$title_color.';"':''; ?>>
							<?php
							if(!empty($title_icon)){
								echo '<h2><span class="fs1" data-icon="&#'.substr($title_icon,-5).';"></span>';   
							}
							if(empty($title_icon)){
								echo '<h2>'.$title.'</h2>';
							}
							else {
								echo $title.'</h2>';
							}
							?>
							<div class="head-line" <?php  echo (!empty($title_underline_color))?'style="background-color:'.$title_underline_color .';"':'' ;?>></div>
						</div>
					<?php endif;?>
					
						<?php the_content();?>
			<?php if($container_width == 'default'): ?>		 
				</div>
			</div>
			<?php endif; ?>
		</div>