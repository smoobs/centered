<?php 
add_action( 'init', 'team_posttype_init' );
if ( !function_exists( 'team_posttype_init' ) ) :
function team_posttype_init() {

	$team_labels = array(
		'name' => _x('Member', 'post type general name','make'),
		'singular_name' => _x('Member', 'post type singular name','make'),
		'add_new' => _x('Add New', 'Portfolio','make'),
		'add_new_item' => __('Add New Member','make'),
		'edit_item' => __('Edit Member','make'),
		'new_item' => __('New Member','make'),
		'all_items' => __('All Members','make'), 
		'view_item' => __('View Member','make'),
		'search_items' => __('Search Member','make'),
		'not_found' =>  __('No Member found','make'),
		'not_found_in_trash' => __('No Members found in Trash','make'), 
		'parent_item_colon' => '',
		'menu_name' => __('Team','make')

	);
	$team_args = array(
		'labels' => $team_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'exclude_from_search' => true,
		'menu_position' => 4,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-team.png', 
		'supports' => array( 'title' )
	); 
	register_post_type( 'team', $team_args );

 }
	

endif;


add_action( 'init', 'clients_posttype_init' );
if ( !function_exists( 'clients_posttype_init' ) ) :
function clients_posttype_init() {

	$client_labels = array(
		'name' => _x('Client', 'post type general name','make'),
		'singular_name' => _x('Clients', 'post type singular name','make'),
		'add_new' => _x('Add New', 'Portfolio','make'),
		'add_new_item' => __('Add New Client','make'),
		'edit_item' => __('Edit Client','make'),
		'new_item' => __('New Client','make'),
		'all_items' => __('All Clients','make'), 
		'view_item' => __('View Client','make'),
		'search_items' => __('Search Client','make'),
		'not_found' =>  __('No Client found','make'),
		'not_found_in_trash' => __('No Clients found in Trash','make'), 
		'parent_item_colon' => '',
		'menu_name' => __('Clients','make')

	);
	$team_args = array(
		'labels' => $client_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'exclude_from_search' => true,
		'menu_position' => 6,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-clients.png', 
		'supports' => array( 'title' )
	); 
	register_post_type( 'clients', $team_args );

 }
endif;



/*-----------------------------------------------------------------------------------*/
/*	Register Project post format.
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'portfolio_posttype_init' );
if ( !function_exists( 'portfolio_posttype_init' ) ) :
function portfolio_posttype_init() {

	$portfolio_labels = array(
		'name' => _x('Portfolio', 'post type general name','make'),
		'singular_name' => _x('Portfolio', 'post type singular name','make'),
		'add_new' => _x('Add New', 'Portfolio','make'),
		'add_new_item' => __('Add New Portfolio','make'),
		'edit_item' => __('Edit Portfolio','make'),
		'new_item' => __('New Portfolio','make'),
		'all_items' => __('All Portfolio','make'),
		'view_item' => __('View Portfolio','make'),
		'search_items' => __('Search Portfolio','make'),
		'not_found' =>  __('No Portfolio found','make'),
		'not_found_in_trash' => __('No Portfolios found in Trash','make'), 
		'parent_item_colon' => '',
		'menu_name' => __('Portfolio','make')

	);
	$portfolio_args = array(
		'labels' => $portfolio_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 10,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-portfolio.png',
		'supports' => array( 'title','thumbnail','video','gallery' ) 
	); 
	register_post_type( 'portfolio', $portfolio_args );

 }
	

endif;

/*-----------------------------------------------------------------------------------*/
/*	Portfolio custom taxonomies.
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'portfolio_taxonomies_innit', 0 );
if ( !function_exists( 'portfolio_taxonomies_innit' ) ) :
function portfolio_taxonomies_innit() {
	// portfolio Category
	$labels = array(
		'name' => _x( 'Categories', 'taxonomy general name' ,'make'),
		'singular_name' => _x( 'Category', 'taxonomy singular name','make' ),
		'search_items' =>  __( 'Search Categories','make' ),
		'all_items' => __( 'All Categories' ,'make'),
		'parent_item' => __( 'Parent Category' ,'make'),
		'parent_item_colon' => __( 'Parent Category:' ,'make'),
		'edit_item' => __( 'Edit Category' ,'make'), 
		'update_item' => __( 'Update Category' ,'make'),
		'add_new_item' => __( 'Add New Category' ,'make'),
		'new_item_name' => __( 'New Category Name' ,'make'),
		'menu_name' => __( 'Category','make' ),
	); 	
	
	register_taxonomy('portfolio-category',array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-category' ),
	));
}


endif; 

/*-----------------------------------------------------------------------------------*/
/*	OnePage custom taxonomies.
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'onepage_posttype_init' );
if ( !function_exists( 'onepage_posttype_init' ) ) :
function onepage_posttype_init() {

	$onepage_labels = array(
		'name' => _x('OnePage Section', 'post type general name','make'),
		'singular_name' => _x('OnePage', 'post type singular name','make'),
		'add_new' => _x('Add New Section', 'Section','make'),
		'add_new_item' => __('Add New Section','make'),
		'edit_item' => __('Edit Section','make'),
		'new_item' => __('New Section','make'),
		'all_items' => __('All Sections','make'), 
		'view_item' => __('View Section','make'),
		'search_items' => __('Search Section','make'),
		'not_found' =>  __('No Section found','make'),
		'not_found_in_trash' => __('No Sections found in Trash','make'), 
		'parent_item_colon' => '',
		'menu_name' => __('OnePage Section','make')

	);
	$onepage_args = array(
		'labels' => $onepage_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,  
		'show_in_menu' => true, 
		'query_var' => false,
		'rewrite' => false,
		'capability_type' => 'page',
		'has_archive' => false, 
		'hierarchical' => false,
		'exclude_from_search' => true,
		'menu_position' => 6,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-onepage.png', 
		'supports' => array( 'title','editor','revisions','page-attributes' ) 
	); 
	register_post_type( 'onepage', $onepage_args );

 }
endif;


