<?php

/**
 * Custom class for the WP 'body_class()' function
 * updated: 4/15/10
 */
function dbdb_body_classes($classes) {
    global $wp_query;
    
    // if there is no parent ID and it's not a single post page, category page, or 404 page, give it
    // a class of "parent-page"
    if( $wp_query->post->post_parent < 1  && !is_single() && !is_archive() && !is_404() ) {
        $classes[] = 'parent-page';
    };
    
    // if the page/post has a parent, it's a child, give it a class of its parent name
    if($wp_query->post->post_parent > 0 ) {
        $parent_title = get_the_title($wp_query->post->post_parent);
        $parent_title = preg_replace('#\s#','-', $parent_title);
        $parent_title = strtolower($parent_title);
        $classes[] = 'parent-pagename-'.$parent_title;
    };
    
    // add a class = to the name of post or page
    $classes[] = $wp_query->queried_object->post_name;
    
    return array_unique($classes);
};
add_filter('body_class','dbdb_body_classes');