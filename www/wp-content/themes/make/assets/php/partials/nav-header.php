<?php
/**
 * @package Make
 */
?>


<?php if ( function_exists( 'ot_get_option' ) ):
		if(ot_get_option('menu_position') == 1):?>
<!-- MAIN MENU -->
<nav id="main_menu" class="general_bg "> 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container_logo">
					<div class="logo">
						<?php if(ot_get_option('logo_image') == '') {
							?>
							<h2><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name');?></a></h2>
							<?php
						}
						else {
							?>
							<a href="<?php echo home_url(); ?>"><img alt="Logo" title="logo" src="	<?php echo ot_get_option('logo_image');?>" class="img-responsive"></a>
							<?php
						}
						?>
						
					</div>
				</div>
				<div class="container_menu visible-md visible-lg" id="desktop-menu">
						<?php wp_nav_menu(array('menu_id'=> 'nav','menu_class'=> 'menu scrolling-links',  'theme_location' => 'primary',)); ?>                 
				</div>
				<div class="container_menu hidden-md hidden-lg">
					<div class="menu-mobile-button general_color">
						<i class="icon-reorder"></i>
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>
		</div>
	</div>
	<!-- MOBILE MENU -->
		<div class="hidden-md hidden-lg">
			<div id="mobile-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php wp_nav_menu(array('menu_id'=> 'mobile_menu','menu_class'=> 'mobile',  'theme_location' => 'primary',)); ?>  <!-- Here menu mobile items -->
						</div> 
					</div>
				</div>
			</div>
		</div>
</nav>
<?php endif;endif;?>
<!-- HEADER -->
<?php if(ot_get_option('background_image') || ot_get_option('background_video_type_webm') || ot_get_option('background_video_type_mp4') || ot_get_option('revolution_slider') || ot_get_option('layer_slider')): ?>
<?php if(is_front_page() ):?>
<?php if(ot_get_option('type_home_section')==1):?>
		<header id="home" class="home_parallax slide-menu" <?php  
			if(function_exists( 'ot_get_option' )){
				if(ot_get_option('type_home_section')==1){
					if(ot_get_option('background_image')){
						echo 'style="background-image:url('.ot_get_option('background_image').') ;"'; 
					}
				}
			}
		?>>
<?php endif; ?>
<?php 
if(ot_get_option('type_home_section')==2): ?>
		<header id="home" class="home_parallax slide-menu" <?php if(ot_get_option('background_image')){
						echo 'style="background-image:url('.ot_get_option('background_image').') ;"'; 
					} ?>>
		<video id="video-background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
		<?php if(ot_get_option('background_video_type_webm')){
		echo '<source src="'.ot_get_option('background_video_type_webm').'" type="video/webm">';}
		if(ot_get_option('background_video_type_mp4')){
		echo '<source src="'.ot_get_option('background_video_type_mp4').'" type="video/mp4">';}  ?>
		</video>
<?php endif;?>
<?php if(ot_get_option('type_home_section')==2 || ot_get_option('type_home_section')==1): ?>
		<div class="home_text">
			<div class="hello">
				<?php
					if(function_exists( 'ot_get_option' )){
						if(ot_get_option('text_1')){
						echo '<img src=" '.get_template_directory_uri().'/assets/images/line.png" class="line-decorative" alt="" />
						<span>'.ot_get_option('text_1').'</span>
						<img src="'. get_template_directory_uri().'/assets/images/line.png" class="line-decorative" alt="" />';
						}
					}
				?>	
				
			</div>
			<div class="home_text_Q">
				<?php
					if(function_exists( 'ot_get_option' )){
						if(ot_get_option('text_2')){ echo '<p>'.ot_get_option('text_2').'</p>';
						}
					} else {
						echo 'IM MAKE'; 
					}
				?>	
			</div>
			<div class="home_text_W">
				<?php
					if(function_exists( 'ot_get_option' )){
						if(ot_get_option('text_3')){ echo '<p>'.ot_get_option('text_3').'</p>';
						}
					} else {
						echo 'RESPONSIVE PARALLAX ONEPAGE TEMPLATE';
					}
				?>	
			</div>
			<?php 
			
			if(function_exists( 'ot_get_option' )){
				if(ot_get_option('enable_down_arrow')==1){
					if(ot_get_option('menu_position')==2){
						echo '<div class="home_bottom_arrow arrow-link"><a href="#begin"><i class="icon-angle-down icon-3x"></i></a></div>';
					}
					else if(ot_get_option('menu_position')==1){
						if(ef1_first_class()){
						echo '<div class="home_bottom_arrow scrolling-links"><a href="#begin"><i class="icon-angle-down icon-3x"></i></a></div>'; }
						else{ echo '<div class="home_bottom_arrow scrolling-links"><a href="#begin"><i class="icon-angle-down icon-3x"></i></a></div>';} 
					}
				}
			} else {
					echo '<div class="home_bottom_arrow arrow-link"><a href=#"begin"><i class="icon-angle-down icon-3x"></i></a></div>';
			}?>
			
		</div>
</header>
<div id="begin"></div>
<?php endif;?>
<?php if(ot_get_option('type_home_section')==3):  ?>
	<header id="home" class="slide-menu">
		<?php putRevSlider(ot_get_option('revolution_slider')); ?> 
	</header>
<?php endif;?>
<?php if(ot_get_option('type_home_section')==4):  ?>
	<header id="home" class="slide-menu">
		<?php layerslider(ot_get_option('layer_slider')); ?> 
	</header>
<?php endif;?>
<?php endif;endif;?>

<?php if ( function_exists( 'ot_get_option' ) ):
		if(ot_get_option('menu_position') != 1):?>
<!-- MAIN MENU -->
<nav id="main_menu" class="general_bg "> 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container_logo">
					<div class="logo">
						<?php if(ot_get_option('logo_image') == '') {
							?>
							<h2><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name');?></a></h2>
							<?php
						}
						else {
							?>
							<a href="<?php echo home_url(); ?>"><img alt="Logo" title="logo" src="	<?php echo ot_get_option('logo_image');?>" class="img-responsive"></a>
							<?php
						}
						?>
					</div>
				</div>
				<div class="container_menu visible-md visible-lg" id="desktop-menu">
						<?php wp_nav_menu(array('menu_id'=> 'nav','menu_class'=> 'menu scrolling-links',  'theme_location' => 'primary',)); ?>               
				</div>
				<div class="container_menu hidden-md hidden-lg">
					<div class="menu-mobile-button general_color">
						<i class="icon-reorder"></i>
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>
		</div>
	</div>
	<!-- MOBILE MENU -->
		<div class="hidden-md hidden-lg">
			<div id="mobile-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php wp_nav_menu(array('menu_id'=> 'mobile_menu','menu_class'=> 'mobile',  'theme_location' => 'primary',)); ?>  <!-- Here menu mobile items -->
						</div> 
					</div>
				</div>
			</div>
		</div>
</nav>
<?php endif; endif;?>