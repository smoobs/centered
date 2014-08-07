<?php

add_action('init', 'ls_register_form_actions');
function ls_register_form_actions() {
	if(current_user_can(get_option('layerslider_custom_capability', 'manage_options'))) {

		// Remove slider
		if(isset($_GET['page']) && $_GET['page'] == 'layerslider' && isset($_GET['action']) && $_GET['action'] == 'remove') {
			if(check_admin_referer('remove_'.$_GET['id'])) {
				add_action('admin_init', 'layerslider_removeslider');
			}
		}

		// Restore slider
		if(isset($_GET['page']) && $_GET['page'] == 'layerslider' && isset($_GET['action']) && $_GET['action'] == 'restore') {
			if(check_admin_referer('restore_'.$_GET['id'])) {
				LS_Sliders::restore( (int) $_GET['id'] );
				header('Location: admin.php?page=layerslider'); die();
			}
		}

		// Duplicate slider
		if(isset($_GET['page']) && $_GET['page'] == 'layerslider' && isset($_GET['action']) && $_GET['action'] == 'duplicate') {
			if(check_admin_referer('duplicate_'.$_GET['id'])) {
				add_action('admin_init', 'layerslider_duplicateslider');
			}
		}

		// Import sample sliders
		if(isset($_GET['page']) && $_GET['page'] == 'layerslider' && isset($_GET['action']) && $_GET['action'] == 'import_sample') {
			if(check_admin_referer('import-sample-sliders')) {
				add_action('admin_init', 'layerslider_import_sample_slider');
			}
		}

		// Slider list bulk actions
		if(isset($_POST['ls-bulk-action'])) {
			if(check_admin_referer('bulk-action')) {
				add_action('admin_init', 'ls_sliders_bulk_action');
			}
		}

		// Add new slider
		if(isset($_POST['ls-add-new-slider'])) {
			if(check_admin_referer('add-slider')) {
				add_action('admin_init', 'ls_add_new_slider');
			}
		}

		// Google Fonts
		if(isset($_POST['ls-save-google-fonts'])) {
			if(check_admin_referer('save-google-fonts')) {
				add_action('admin_init', 'ls_save_google_fonts');
			}
		}

		// Advanced settings
		if(isset($_POST['ls-save-advanced-settings'])) {
			if(check_admin_referer('save-advanced-settings')) {
				add_action('admin_init', 'ls_save_advanced_settings');
			}
		}

		// Access permission
		if(isset($_POST['ls-access-permission'])) {
			if(check_admin_referer('save-access-permissions')) {
				add_action('admin_init', 'ls_save_access_permissions');
			}
		}

		// Import sliders
		if(isset($_POST['ls-import'])) {
			if(check_admin_referer('import-sliders')) {
				add_action('admin_init', 'ls_import_sliders');
			}
		}

		// Export sliders
		if(isset($_POST['ls-export'])) {
			if(check_admin_referer('export-sliders')) {
				add_action('admin_init', 'ls_export_sliders');
			}
		}

		// Custom CSS editor
		if(isset($_POST['ls-user-css'])) {
			if(check_admin_referer('save-user-css')) {
				add_action('admin_init', 'ls_save_user_css');
			}
		}

		// Skin editor
		if(isset($_POST['ls-user-skins'])) {
			if(check_admin_referer('save-user-skin')) {
				add_action('admin_init', 'ls_save_user_skin');
			}
		}

		// Transition builder
		if(isset($_POST['ls-user-transitions'])) {
			if(check_admin_referer('save-user-transitions')) {
				add_action('admin_init', 'ls_save_user_transitions');
			}
		}


		// AJAX functions
		add_action('wp_ajax_ls_save_slider', 'ls_save_slider');
		add_action('wp_ajax_ls_save_screen_options', 'ls_save_screen_options');
		add_action('wp_ajax_ls_get_mce_sliders', 'ls_get_mce_sliders');
		add_action('wp_ajax_ls_update_box_toggles', 'ls_update_box_toggles');
		add_action('wp_ajax_ls_get_post_details', 'ls_get_post_details');
		add_action('wp_ajax_ls_get_taxonomies', 'ls_get_taxonomies');
	}
}


function ls_add_new_slider() {
	$id = LS_Sliders::add($_POST['title']);
	header('Location: admin.php?page=layerslider&action=edit&id='.$id.'&showsettings=1');
	die();
}

function ls_sliders_bulk_action() {

	// Remove
	if($_POST['action'] === 'remove') {
		if(is_array($_POST['sliders']) && !empty($_POST['sliders'])) {
			foreach($_POST['sliders'] as $item) { layerslider_removeslider($item); }
		}

		header('Location: admin.php?page=layerslider&message=removeSuccess'); die();
	}

	// Delete
	if($_POST['action'] === 'delete') {
		if(is_array($_POST['sliders']) && !empty($_POST['sliders'])) {
			foreach($_POST['sliders'] as $item) { LS_Sliders::delete($item); }
		}

		header('Location: admin.php?page=layerslider&message=removeSuccess'); die();
	}


	// Restore
	if($_POST['action'] === 'restore') {
		if(is_array($_POST['sliders']) && !empty($_POST['sliders'])) {
			foreach($_POST['sliders'] as $item) { LS_Sliders::restore($item); }
		}

		header('Location: admin.php?page=layerslider&message=removeSuccess'); die();
	}



	// Merge
	if($_POST['action'] === 'merge') {

		// Error check
		if(!isset($_POST['sliders'][1]) || !is_array($_POST['sliders'])) {
			header('Location: admin.php?page=layerslider&error=1&message=mergeSelectError');
			die();
		}

		// Vars
		global $wpdb;
		$ids = array();
		$slider = array();

		// Iterate over the sliders
		foreach($_POST['sliders'] as $key => $item) {
			$ids[] = '#'.$item;
			$data = lsSliderById($item);

			if($key === 0) {
				$slider = $data['data'];
			} else {
				$slider['layers'] = array_merge($slider['layers'], $data['data']['layers']);
			}
		}

		// DB data
		$name = esc_sql($slider['properties']['title'] = 'Merged sliders of ' . implode(', ', $ids));
		$data = esc_sql(json_encode($slider));

		// Save as new slider
		$table_name = $wpdb->prefix.LS_DB_TABLE;
		$wpdb->query("INSERT INTO $table_name (name, data, date_c, date_m) VALUES ('$name', '$data', '".time()."', '".time()."')");

		header('Location: admin.php?page=layerslider&message=mergeSuccess');
		die();
	}
}

function ls_save_google_fonts() {

	// Build object to save
	$fonts = array();
	if(isset($_POST['urlParams'])) {
		foreach($_POST['urlParams'] as $key => $val) {
			if(!empty($val)) {
				$fonts[] = array(
					'param' => $val,
					'admin' => isset($_POST['onlyOnAdmin'][$key]) ? true : false
				);
			}
		}
	}


	// Save & redirect back
	update_option('ls-google-fonts', $fonts);
	header('Location: admin.php?page=layerslider&message=googleFontsUpdated');
}


function ls_save_advanced_settings() {

	$options = array('use_custom_jquery', 'include_at_footer', 'conditional_script_loading', 'concatenate_output', 'put_js_to_body');
	foreach($options as $item) {
		update_option('ls_'.$item, array_key_exists($item, $_POST));
	}

	header('Location: admin.php?page=layerslider&message=generalUpdated');
	die();
}


function ls_save_screen_options() {
	$_POST['options'] = !empty($_POST['options']) ? $_POST['options'] : array();
	update_option('ls-screen-options', $_POST['options']);
	die();
}

function ls_get_mce_sliders() {

	$sliders = lsSliders(50, true, true);
	foreach($sliders as $key => $item) {
		$sliders[$key]['preview'] = apply_filters('ls_get_preview_for_slider', $item );
	}

	die(json_encode($sliders));
}

function ls_update_box_toggles() {

	// Get toggle settings
	$toggles = get_option('ls-collapsed-boxes', false);
	$toggles = !is_array($toggles) ? array() : $toggles;

	// Get new setting
	$key = $_POST['key'];
	$collapsed = $_POST['collapsed'];

	// Update & Save
	$toggles[$key] = ($collapsed == 'true') ? true : false;
	update_option('ls-collapsed-boxes', $toggles);
}

function ls_save_slider() {

	// DB stuff
	global $wpdb;
	$table_name = $wpdb->prefix.LS_DB_TABLE;

	// Get slider ID if any
	$id = !empty($_POST['slider_id']) ? (int) $_POST['slider_id'] : '';

	// Get slider data unless when we need to reset
	if($_POST['layerkey'] == 0 && !empty($id)) {
		$data = array();
	} else {
		$slider = lsSliderById( $id );
		$id = $slider['id'];
		$data = $slider['data'];
	}

	// Add modifications
	if(isset($_POST['layerslider-slides']['properties']['relativeurls'])) {
		$data['properties'] = $_POST['layerslider-slides']['properties'];
		$data['layers'][ $_POST['layerkey'] ] = layerslider_convert_urls($_POST['layerslider-slides']['layers'][$_POST['layerkey']]);
	} else {
		$data['properties'] = $_POST['layerslider-slides']['properties'];
		$data['layers'][ $_POST['layerkey'] ] = $_POST['layerslider-slides']['layers'][$_POST['layerkey']];
	}

	// WPML
	if(function_exists('icl_register_string')) {
		layerslider_register_wpml_strings($id, $data);
	}

	// Save slider
	$name = esc_sql($data['properties']['title']);
	$data = esc_sql(json_encode($data));
	$wpdb->query("INSERT INTO $table_name (id, name, data, date_c, date_m) VALUES ('$id', '$name', '{}', '".time()."', '".time()."')
							ON DUPLICATE KEY UPDATE name = '$name', data = '$data', date_m = '".time()."'");

	// Return the slider ID
	echo $wpdb->insert_id ? $wpdb->insert_id : $id;
	die();
}


/********************************************************/
/*               Action to duplicate slider             */
/********************************************************/
function layerslider_duplicateslider() {

	// Check and get the ID
	$id = (int) $_GET['id'];
	if(!isset($_GET['id'])) {
		return;
	}

	// Get the original slider
	global $wpdb;
	$table_name = $wpdb->prefix . "layerslider";
	$slider = $wpdb->get_row("SELECT * FROM $table_name WHERE id = ".(int)$id." ORDER BY date_c DESC LIMIT 1" , ARRAY_A);
	$slider = json_decode($slider['data'], true);

	// Name check
	if(empty($slider['properties']['title'])) {
		$slider['properties']['title'] = 'Unnamed';
	}

	// Insert the duplicate
	$slider['properties']['title'] .= ' copy';
	$wpdb->query(
		$wpdb->prepare("INSERT INTO $table_name (name, data, date_c, date_m)
						VALUES (%s, %s, %d, %d)",
						$slider['properties']['title'],
						json_encode($slider),
						time(),
						time()
		)
	);

	// Success
	header('Location: admin.php?page=layerslider');
	die();
}


/********************************************************/
/*                Action to remove slider               */
/********************************************************/
function layerslider_removeslider($sid = 0) {

	// Check ID
	$id = !empty($sid) ? (int) $sid : (int) $_GET['id'];
	if(empty($id)) {
		return;
	}

	// Remove the slider
	global $wpdb;
	$table_name = $wpdb->prefix . "layerslider";
	$wpdb->query("UPDATE $table_name SET flag_deleted = '1' WHERE id = '$id' LIMIT 1");

	// Success
	if(empty($sid)) {
		header('Location: admin.php?page=layerslider');
		die();
	}
}

/********************************************************/
/*            Action to import sample slider            */
/********************************************************/
function layerslider_import_sample_slider() {

	// Base64 encoded, serialized slider export code
	$sample_slider = json_decode(base64_decode(file_get_contents(LS_ROOT_PATH.'/sampleslider/sample_sliders.txt')), true);

	// Iterate over the sliders
	foreach($sample_slider as $sliderkey => $slider) {

		// Iterate over the layers
		foreach($sample_slider[$sliderkey]['layers'] as $layerkey => $layer) {

			// Change background images if any
			$sample_slider[$sliderkey]['layers'][$layerkey]['properties']['backgroundId'] = ''; 
			if(!empty($sample_slider[$sliderkey]['layers'][$layerkey]['properties']['background'])) {
				$sample_slider[$sliderkey]['layers'][$layerkey]['properties']['background'] = LS_ROOT_URL.'/sampleslider/'.basename($layer['properties']['background']);
			}

			// Change thumbnail images if any
			$sample_slider[$sliderkey]['layers'][$layerkey]['properties']['thumbnailId'] = '';
			if(!empty($sample_slider[$sliderkey]['layers'][$layerkey]['properties']['thumbnail'])) {
				$sample_slider[$sliderkey]['layers'][$layerkey]['properties']['thumbnail'] = LS_ROOT_URL.'/sampleslider/'.basename($layer['properties']['thumbnail']);
			}

			// Iterate over the sublayers
			if(isset($layer['sublayers']) && !empty($layer['sublayers'])) {
				foreach($layer['sublayers'] as $sublayerkey => $sublayer) {

					// Only IMG sublayers
					$sample_slider[$sliderkey]['layers'][$layerkey]['sublayers'][$sublayerkey]['imageId'] = '';
					if($sublayer['type'] == 'img' || ( isset($sublayer['media']) && $sublayer['media'] == 'img')) {
						$sample_slider[$sliderkey]['layers'][$layerkey]['sublayers'][$sublayerkey]['image'] = LS_ROOT_URL.'/sampleslider/'.basename($sublayer['image']);
					}
				}
			}
		}
	}

	// Get WPDB Object
	global $wpdb;
	$table_name = $wpdb->prefix . "layerslider";

	// Append duplicate
	foreach($sample_slider as $key => $val) {
		$wpdb->query(
			$wpdb->prepare("INSERT INTO $table_name (name, data, date_c, date_m)
							VALUES (%s, %s, %d, %d)",
							$val['properties']['title'],
							json_encode($val),
							time(),
							time()
			)
		);
	}

	// Success
	header('Location: admin.php?page=layerslider');
	die();
}




// PLUGIN USER PERMISSIONS
//-------------------------------------------------------
function ls_save_access_permissions() {

	// Get capability
	$capability = ($_POST['custom_role'] == 'custom') ? $_POST['custom_capability'] : $_POST['custom_role'];

	// Test value
	if(empty($capability) || !current_user_can($capability)) {
		header('Location: admin.php?page=layerslider&error=1&message=permissionError');
		die();
	} else {
		update_option('layerslider_custom_capability', $capability);
		header('Location: admin.php?page=layerslider&message=permissionSuccess');
		die();
	}
}




// IMPORT SLIDERS
//-------------------------------------------------------
function ls_import_sliders() {

	// Check export file if any
	if(!is_uploaded_file($_FILES['import_file']['tmp_name'])) {
		header('Location: '.$_SERVER['REQUEST_URI'].'&error=1&message=importSelectError');
		die('No data received.');
	}

	// Get decoded file data
	$data = base64_decode(file_get_contents($_FILES['import_file']['tmp_name']));

	// Parsing JSON or PHP object
	if(!$parsed = json_decode($data, true)) {
		$parsed = unserialize($data);
	}

	// Iterate over imported sliders
	if(is_array($parsed)) {

		//  DB stuff
		global $wpdb;
		$table_name = $wpdb->prefix . "layerslider";

		// Import sliders
		foreach($parsed as $item) {

			// Fix for export issue in v4.6.4
			if(is_string($item)) { $item = json_decode($item, true); }

			// Add to DB
			$wpdb->query(
				$wpdb->prepare("INSERT INTO $table_name (name, data, date_c, date_m)
								VALUES (%s, %s, %d, %d)",
				$item['properties']['title'], json_encode($item), time(), time()
				)
			);
		}

		// Success
		header('Location: '.menu_page_url('layerslider', 0).'&message=importSuccess');

	// Fail
	} else {
		header('Location: '.menu_page_url('layerslider', 0).'&error=1&message=importFailed');
	}

	die();
}




// EXPORT SLIDERS
//-------------------------------------------------------
function ls_export_sliders() {
	$data = array();

	// All sliders
	if($_POST['sliders'] == -1) {
		$sliders = lsSliders(200, false, true);
		foreach($sliders as $item) {
			$data[] = $item['data'];
		}
	// Specific slider
	} elseif(!empty($_POST['sliders']) && is_numeric($_POST['sliders'])) {
		$sliders = lsSliderById( (int) $_POST['sliders']);
		$data[] = $sliders['data'];

	} else {
		die('Invalid data received.');
	}

	// Slider name
	$name = 'LayerSlider Export '.date('Y-m-d').' at '.date('H.i.s').'.json';

    // Send output and force download
    header('Content-type: application/force-download');
    header('Content-Disposition: attachment; filename="'.str_replace(' ', '_', $name).'"');
	die(base64_encode(json_encode($data)));
}




// TRANSITION BUILDER
//-------------------------------------------------------
function ls_save_user_css() {

	// Get target file and content
	$upload_dir = wp_upload_dir();
	$file = $upload_dir['basedir'].'/layerslider.custom.css';
	$content = stripslashes($_POST['contents']);

	// Attempt to save changes
	if(is_writable($upload_dir['basedir'])) {
		file_put_contents($file, $content);
		header('Location: admin.php?page=ls-style-editor&edited=1');
		die();

	// File isn't writable
	} else {
		wp_die(__("It looks like your files isn't writable, so PHP couldn't make any changes (CHMOD).", "LayerSlider"), __('Cannot write to file', 'LayerSlider'), array('back_link' => true) );
	}
}





// SKIN EDITOR
//-------------------------------------------------------
function ls_save_user_skin() {

	// Error checking
	if(empty($_POST['skin'])) {
		wp_die(__("It looks like you haven't selected any skin to edit.", "LayerSlider"), __('No skin selected.', 'LayerSlider'), array('back_link' => true) );
	}

	// Get skin file and contents
	$skin = $_POST['skin'];
	$folder = $file = LS_ROOT_PATH.'/static/skins/'.$skin;
	$file = LS_ROOT_PATH.'/static/skins/'.$skin.'/skin.css';
	$content = $_POST['contents'];

	// Attempt to write the file
	if(is_writable($folder)) {
		file_put_contents($file, $content);
		header('Location: admin.php?page=ls-skin-editor&skin='.$skin.'&edited=1');
	} else {
		wp_die(__("It looks like your files isn't writable, so PHP couldn't make any changes (CHMOD).", "LayerSlider"), __('Cannot write to file', 'LayerSlider'), array('back_link' => true) );
	}
}




// TRANSITION BUILDER
//-------------------------------------------------------
function ls_save_user_transitions() {

	// Array to hold transitions
	$transitions = array();

	// Get transitions
	$transitions['t2d'] = isset($_POST['t2d']) ? $_POST['t2d'] : array();
	$transitions['t3d'] = isset($_POST['t3d']) ? $_POST['t3d'] : array();

	array_walk_recursive($transitions['t2d'], 'layerslider_builder_convert_numbers');
	array_walk_recursive($transitions['t3d'], 'layerslider_builder_convert_numbers');

	// Iterate over the sections
	foreach($transitions['t3d'] as $key => $val) {

		// Rows
		if(strstr($val['rows'], ',')) { $tmp = explode(',', $val['rows']); $tmp[0] = (int) trim($tmp[0]); $tmp[1] = (int) trim($tmp[1]); $transitions['t3d'][$key]['rows'] = $tmp; }
			else { $transitions['t3d'][$key]['rows'] = (int) $val['rows']; }

		// Cols
		if(strstr($val['cols'], ',')) { $tmp = explode(',', $val['cols']); $tmp[0] = (int) trim($tmp[0]); $tmp[1] = (int) trim($tmp[1]); $transitions['t3d'][$key]['cols'] = $tmp; }
			else { $transitions['t3d'][$key]['cols'] = (int) $val['cols']; }

		// Depth
		if(isset($val['tile']['depth'])) {
			$transitions['t3d'][$key]['tile']['depth'] = 'large'; }

		// Before
		if(!isset($val['before']['enabled'])) {
			unset($transitions['t3d'][$key]['before']['transition']); }

		// After
		if(!isset($val['after']['enabled'])) {
			unset($transitions['t3d'][$key]['after']['transition']); }
	}

	// Iterate over the sections
	foreach($transitions['t2d'] as $key => $val) {

		if(strstr($val['rows'], ',')) { $tmp = explode(',', $val['rows']); $tmp[0] = (int) trim($tmp[0]); $tmp[1] = (int) trim($tmp[1]); $transitions['t2d'][$key]['rows'] = $tmp; }
			else { $transitions['t2d'][$key]['rows'] = (int) $val['rows']; }

		if(strstr($val['cols'], ',')) { $tmp = explode(',', $val['cols']); $tmp[0] = (int) trim($tmp[0]); $tmp[1] = (int) trim($tmp[1]); $transitions['t2d'][$key]['cols'] = $tmp; }
			else { $transitions['t2d'][$key]['cols'] = (int) $val['cols']; }

		if(empty($val['transition']['rotateX'])) {
			unset($transitions['t2d'][$key]['transition']['rotateX']); }

		if(empty($val['transition']['rotateY'])) {
			unset($transitions['t2d'][$key]['transition']['rotateY']); }

		if(empty($val['transition']['rotate'])) {
			unset($transitions['t2d'][$key]['transition']['rotate']); }

		if(empty($val['transition']['scale']) || $val['transition']['scale'] == '1.0' || $val['transition']['scale'] == '1') {
			unset($transitions['t2d'][$key]['transition']['scale']); }

	}

	// Save transitions
	$upload_dir = wp_upload_dir();
	$custom_trs = $upload_dir['basedir'] . '/layerslider.custom.transitions.js';
	$data = 'var layerSliderCustomTransitions = '.json_encode($transitions).';';
	file_put_contents($custom_trs, $data);
	die('SUCCESS');
}


// --
function ls_get_post_details() {

	$params = $_POST['params'];

	global $LSC;
	$queryArgs = array(
		'post_status' => 'publish',
		'limit' => 30,
		'posts_per_page' => 30,
		'post_type' => $params['post_type']
	);

	if(!empty($params['post_orderby'])) {
		$queryArgs['orderby'] = $params['post_orderby']; }

	if(!empty($params['post_order'])) {
		$queryArgs['order'] = $params['post_order']; }

	if(!empty($params['post_categories'][0])) {
		$queryArgs['category__in'] = $params['post_categories']; }

	if(!empty($params['post_tags'][0])) {
		$queryArgs['tag__in'] = $params['post_tags']; }

	if(!empty($params['post_taxonomy']) && !empty($params['post_tax_terms'])) {
		$queryArgs['tax_query'][] = array(
			'taxonomy' => $params['post_taxonomy'],
			'field' => 'id',
			'terms' => $params['post_tax_terms']
		);
	}

	$posts = $LSC->posts->find($queryArgs)->getParsedObject();

	die(json_encode($posts));
}


function ls_get_taxonomies() {
	die(json_encode(array_values(get_terms($_POST['taxonomy']))));
}
