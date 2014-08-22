<?php 

//Add title attribute back to gallery images 
    function my_get_attachment_link_filter( $content,$id ) {
        $title = get_the_title($id);
        $new_content = str_replace('<a ', '<a title="' . esc_attr($title) . '" ', $content);
        return $new_content;
}
add_filter('wp_get_attachment_link', 'my_get_attachment_link_filter', 10, 4);