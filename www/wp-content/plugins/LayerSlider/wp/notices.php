<?php

// Update notice
if(strstr($_SERVER['REQUEST_URI'], '?page=layerslider') !== false) {
	add_action('admin_notices', 'layerslider_update_notice');
}

function layerslider_update_notice() {

	// Get plugin updates
	$updates = get_plugin_updates();

	// Check for update
	if(isset($updates[LS_PLUGIN_BASE]) && isset($updates[LS_PLUGIN_BASE]->update)) {
		$update = $updates[LS_PLUGIN_BASE];
		add_thickbox();
		?>
	    <div id="layerslider_notice">
	        <img src="<?php echo LS_ROOT_URL.'/static/img/ls_80x80.png' ?>" alt="WeatherSlider icon">
	        <h1><?php _e('Update available for LayerSlider WP!', 'LayerSlider') ?></h1>
	        <p>
	            <?php echo sprintf(__('You have version %1$s. Update to version %2$s.', 'LayerSlider'), $update->Version, $update->update->new_version); ?><br>
	            <i><?php echo $update->update->upgrade_notice ?></i>
	            <a href="plugin-install.php?tab=plugin-information&plugin=LayerSlider&section=changelog&TB_iframe=true&width=640&height=747" class="thickbox">
	            	<?php _e('Review changes & Install', 'LayerSlider') ?>
	            </a>
	        </p>
	        <div class="clear"></div>
	    </div>
	    <?php
	}
}

?>
