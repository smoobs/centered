<?php
/*
 * Plugin Name: FancyBox Gallery
 * Plugin URI: http://dougal.gunters.org/plugins/fancybox-gallery
 * Description: Integrates the FancyBox jQuery plugin to generate pop-up image overlays for WordPress galleries.
 * Author: Dougal Campbell
 * Author URI: http://dougal.gunters.org/
 * Version: 0.3.2
 * Min WP Version: 2.8
 */
 
class WPFancyBox {
  // Constructor
  function WPFancyBox() {
    $urlpath = WP_PLUGIN_URL . '/' . basename(dirname(__FILE__));

    wp_enqueue_script('fancybox', $urlpath . '/fancybox/jquery.fancybox-1.2.1.js', array('jquery'), '1.2.1');
    wp_enqueue_script('easing', $urlpath . '/fancybox/jquery.easing.1.3.js', array('jquery'), '1.3');
    wp_enqueue_script('fb-init', $urlpath . '/fbg-init.js', array('fancybox'), '1.0.0', true);
    wp_enqueue_style('fancybox', $urlpath . '/fancybox/jquery.fancybox.css');
    wp_enqueue_style('fancybox-override', $urlpath . '/fbg-override.css');

    add_filter('wp_get_attachment_link', array(&$this,'add_rel'));
  }
  
  /* 
   * Add rel="gallery-$id" to attachment links
   */
  function add_rel($link) {
    global $post;
    // a mild cheat. group by post id. the gallery_shortcode() $instance 
    // static var would be better, but we can't get to it.
    $id = $post->ID; 

    // First, see if there's already a 'rel' attribute in the link:
    $atag = preg_match('#<a\s+(.*?)(rel=([\'"])(.*?)\3)(.*?)>(.*)#i', $link, $matches);
    if ($atag) {
      // Match found. Let's put Humpty Dumpty back together again:
      $quot = $matches[3];
      $relval = $quot . $matches[4] . " gallery-{$id}" . $quot;
      $before = $matches[1];
      $after = $matches[5];
      $rest = $matches[6];
      $link = "<a {$before}rel={$relval}{$after}>{$rest}";
    } else {
      $atag = preg_match('#<a\s+(.*?)>(.*)#i', $link, $matches);
      if ($atag) {
        // This is a much simpler reassembly
        $innards = $matches[1];
        $rest = $matches[2];
        $relval = "gallery-{$id}";
        $link = "<a {$innards} rel='{$relval}'>{$rest}";
      }
    }
    return $link;
  }
}

function wpfb_init() {
  //global $wpfb;
  
  $wpfb = new WPFancyBox();
}

add_action('init', 'wpfb_init');
?>