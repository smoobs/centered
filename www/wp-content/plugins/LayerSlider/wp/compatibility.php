<?php


// Storage notice
if(get_option('layerslider-slides') !== false) {

    global $pagenow;
    if($pagenow == 'plugins.php' || $pagenow == 'index.php' || strstr($_SERVER['REQUEST_URI'], 'layerslider')) {
        add_action('admin_notices', 'layerslider_admin_notice');
    }
}

function layerslider_admin_notice() { ?>
    <div id="layerslider_notice" class="updated">
        <img src="<?php echo LS_ROOT_URL.'/static/img/ls_80x80.png' ?>" alt="WeatherSlider icon">
        <h1><?php _e('The new version of LayerSlider WP is almost ready!', 'LayerSlider') ?></h1>
        <p>
            <?php _e('For a faster and more reliable solution, LayerSlider WP needs to convert your data associated with the plugin. Your sliders and settings will remain still, and it only takes a click on this button.', 'LayerSlider') ?>

            <a href="admin.php?page=layerslider&action=convert"><?php _e('Convert Data', 'LayerSlider') ?></a>
        </p>
        <div class="clear"></div>
    </div>
<?php }


function layerslider_convert() {

	// Get old sliders if any
	$sliders = get_option('layerslider-slides', array());
	$sliders = is_array($sliders) ? $sliders : unserialize($sliders);
	if(empty($sliders)) {
		header('Location: admin.php?page=layerslider'); die();
	}

	// Create new storage in DB
	layerslider_create_db_table();

	// Iterate over them
	foreach($sliders as $key => $slider) {
		LS_Sliders::add($slider['properties']['title'], $slider);
	}

	// Remove old data and exit
	delete_option('layerslider-slides');
	header('Location: admin.php?page=layerslider');
	die();
}


function lsSliderById($id) {

	$args = is_numeric($id) ? (int) $id : array('limit' => 1);
	$slider = LS_Sliders::find($args);

	if($slider == null) {
		return false;
	}

	return $slider;
}

function lsSliders($limit = 50, $desc = true, $withData = false) {

	$args = array();
	$args['limit'] = $limit;
	$args['order'] = ($desc === true) ? 'DESC' : 'ASC';
	$args['data'] = ($withData === true) ? true : false;

	$sliders = LS_Sliders::find($args);

	// No results
	if($sliders == null) {
		return array();
	}

	return $sliders;
}

?>
