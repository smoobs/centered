<?php

$root = dirname(dirname(dirname(dirname(__FILE__))));
require_once($root.'/wp-load.php');


function save_page_order_nested($pages_array, $parent_id = 0) {
	global $wpdb;	
	$current_menu_order = 0;		
	foreach ($pages_array as $index => $page) {

		$page_id = str_replace('listItem_', '', $wpdb->escape($page['id']));
		
    $query_ret = $wpdb->query( $wpdb->prepare( 
    	"UPDATE $wpdb->posts SET post_parent = '%d', menu_order = '%d' WHERE id ='%d'", 
    	$parent_id, 
    	$current_menu_order,
    	$page_id
    ) );
		
		if($query_ret === false) return false;
				
		$current_menu_order++;
		
		if (is_array($page['children'])) {
			save_page_order_nested($page['children'], $page_id);
		}
	}	
	return true;
}

function save_page_order_unnested($pages_array, $parent_id = 0) {
	global $wpdb;	
	$current_menu_order = 1;		
	foreach ($pages_array as $index => $page) {

		$page_id = str_replace('listItem_', '', $wpdb->escape($page));
				
    $query_ret = $wpdb->query( $wpdb->prepare( 
    	"UPDATE $wpdb->posts SET post_parent = '0', menu_order = '%d' WHERE id ='%d'", 
    	$current_menu_order,
    	$page_id
    ) );
		
		if($query_ret === false) return false;
				
		$current_menu_order++;
		
	}	
	return true;
}

if(current_user_can('edit_posts')) {
  if($_POST['order-posts-list']) {	
  	$pageOrder =  $_POST['order-posts-list'];
  	save_page_order_unnested($pageOrder);	
  } else {
  	$pageOrder =  $_POST['order-posts-list-nested'];	
  	save_page_order_nested($pageOrder);	
  }
}

?>