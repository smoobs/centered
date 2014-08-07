<?php
/**
 * @package Make
 */
 ?>
		<!-- FOOTER -->
		<?php if ( function_exists( 'ot_get_option' ) ):
				if(ot_get_option('enable_backtop')):?>
		<div id="backtop">
		<i class="icon-angle-up"></i>
		</div>
		<?php endif;endif;?>
		<footer id="footer" class="general_bg">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="copyright"><?php
						if ( function_exists( 'ot_get_option' ) ) {
							if(ot_get_option('copyright_text')){
								echo ot_get_option('copyright_text');
							}
						} else {
						echo 'All rights resevered.';
						} ?></p>
					</div>
					<div class="col-md-6 foot-social">
					<?php 
					if ( function_exists( 'ot_get_option' ) ) {
						if(ot_get_option('facebook_url')){
							echo '<a href="'.ot_get_option('facebook_url').'" class="social-icon fb-foot"><i class="icon-facebook"></i></a>';
						}
						if(ot_get_option('twitter_url')){
							echo '<a href="'.ot_get_option('twitter_url').'" class="social-icon twitter-foot"><i class="icon-twitter"></i></a>';
						}
						if(ot_get_option('dribbble_url')){
							echo '<a href="'.ot_get_option('dribbble_url').'" class="social-icon dribbble-foot"><i class="icon-dribbble"></i></a>';
						}
						if(ot_get_option('linkedin_url')){
							echo '<a href="'.ot_get_option('linkedin_url').'" class="social-icon linkedin-foot"><i class="icon-linkedin"></i></a>';
						}
						if(ot_get_option('google_plus_url')){
							echo '<a href="'.ot_get_option('google_plus_url').'" class="social-icon google-foot"><i class="icon-google-plus"></i></a>';
						}
					}
					?>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</footer>
		
		
		<?php
		if ( function_exists( 'ot_get_option' ) ) {
			echo ot_get_option('before_body');
		}
		
		wp_footer(); ?>
	</body>
</html>