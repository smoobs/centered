<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'header_settings',
        'title'       => 'General Options'
      ),
      array(
        'id'          => 'header',
        'title'       => 'Header'
      ),

      array(
        'id'          => 'home_section',
        'title'       => 'Home Section'
      ),
      array(
        'id'          => 'dynamic_css',
        'title'       => 'Dynamic Css'
      ),
      array(
        'id'          => '404_page',
        'title'       => '404 Page'
      ),
      array(
        'id'          => 'footer',
        'title'       => 'Footer'
      ),
      array(
        'id'          => 'blog',
        'title'       => 'Blog'
      ),
      array(
        'id'          => 'typography',
        'title'       => 'Typography'
      ),
      array(
        'id'          => 'contact_settings',
        'title'       => 'Contact'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'general_color',
        'label'       => 'General Color',
        'desc'        => '',
        'std'         => '#ffd400',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'site_name',
        'label'       => 'Site Name',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'site_description',
        'label'       => 'Site Description',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'meta_description',
        'label'       => 'Meta Description',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'meta_keywords',
        'label'       => 'Meta Keywords',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'favicon',
        'label'       => 'Custom Favicon',
        'desc'        => 'It\'s image represent your website favicon (16x16px)',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'logo_image',
        'label'       => 'Logo image',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'enable_sticky_menu',
        'label'       => 'Enable Sticky Menu',
        'desc'        => '',
        'std'         => '1',
        'type'        => 'select',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => '0',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_backtop',
        'label'       => 'Enable BackTop',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => '0',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_preloader',
        'label'       => 'Enable Preloader',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => '0',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'tracking_code',
        'label'       => 'Tracking Code',
        'desc'        => 'Paste your Google Analytics (or other) tracking code here. This will by added into the head template',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'before_head',
        'label'       => 'Space before head',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'before_body',
        'label'       => 'Space before body',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'header_size',
        'label'       => 'Header Size Menu',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Large',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Small',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'menu_position',
        'label'       => 'Menu Position',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Top',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'After Header',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'navigation_typography',
        'label'       => 'Navigation Typography',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
	  array(
        'id'          => 'mobile_menu_bg',
        'label'       => 'Mobile Menu Background',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
	  array(
        'id'          => 'mobile_menu_border',
        'label'       => 'Mobile Menu Border',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
	  array(
        'id'          => 'mobile_menu_typography',
        'label'       => 'Mobile Menu Typography',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'navigation_typography_hover',
        'label'       => 'Navigation Typography Hover',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'header_background_color',
        'label'       => 'Header Background Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'header_background_border_color',
        'label'       => 'Header Background Border Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'type_home_section',
        'label'       => 'Type Home Section',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Background Image',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Background Video',
            'src'         => ''
          ),
          array(
            'value'       => '3',
            'label'       => 'Revolution Slider',
            'src'         => ''
          ),
		  array(
            'value'       => '4',
            'label'       => 'Layer Slider',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'background_image',
        'label'       => 'Background Image (if you use video bg set background image for old or mobile devices)',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'background_video_type_webm',
        'label'       => 'Background Video type webm',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'background_video_type_mp4',
        'label'       => 'Background Video type mp4',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'revolution_slider',
        'label'       => 'Revolution Slider',
        'desc'        => 'Slider Alias',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
	  array(
        'id'          => 'layer_slider', 
        'label'       => 'Layer Slider',
        'desc'        => 'Slider ID',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'text_1',
        'label'       => 'Text 1',
        'desc'        => '',
        'std'         => 'HELLO',
        'type'        => 'text',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'text_2',
        'label'       => 'Text 2',
        'desc'        => '',
        'std'         => 'IM MAKE',
        'type'        => 'text',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'text_3',
        'label'       => 'Text 3',
        'desc'        => '',
        'std'         => 'RESPONSIVE PARALLAX ONEPAGE TEMPLATE',
        'type'        => 'text',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'enable_down_arrow',
        'label'       => 'Enable Down Arrow',
        'desc'        => '',
        'std'         => '1',
        'type'        => 'select',
        'section'     => 'home_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'dynamic_css',
        'label'       => 'Dynamic css',
        'desc'        => 'Add dynamic CSS code with values from the theme options. <strong>Only edit if you know what to do!</strong> If you edit this without any knowledge on Option Tree dynamic css including it might break the theme!',
        'std'         => '.general_color, .button-style-1 a, .news-content h1 a:hover, .news-content h2 a:hover, .news-content h3 a:hover, .news-content h4 a:hover, .news-content h5 a:hover, .news-content h6 a:hover, .widget ul li a:hover, .post-tags a:hover, .post-content h1 a:hover, .post-content h2 a:hover, .post-content h3 a:hover, .post-content h5 a:hover, .post-content h5 a:hover, .post-content h6 a:hover, .tagcloud a:hover, .post-date a, .comment-author a, .reply a, .comment-reply-title a  {
color:{{general_color}} !important;
}

.general_bg, .team-member .team-social:hover .team-button, .portfolio-categories ul li a:hover, .portfolio-categories ul li .current, #post-comment-form input[type="submit"], .callout-box, .media-post .rslides_nav:hover, .portfolio-media .rslides_nav:hover, .button-style-2:hover, #post-author:hover img, .post-list-comments li > div:hover > .author-comment-avatar, .callout-box-button:hover, .toggle-active, #backtop:hover, #blog-navigation a:hover, #blog-navigation .current, .button-style-3, #comments-list li > .comment-body:hover > .comment-author img, #nav .sub-menu li a:hover {
background-color:{{general_color}} !important;
}
.general_border, .text-edit blockquote, .tagcloud a:hover, #post-author:hover img, #comments-list li > .comment-body:hover > .comment-author img, .widget-title, .line-header, #reply-title{
border-color:{{general_color}} !important;
}

.active-tab a {
	border-top: 3px solid {{general_color}} !important;
}

body {
{{body_text_font}};
}

#desktop-menu .menu > li > a, .container_logo a {
{{navigation_typography}} !important;
}

#desktop-menu .menu > #current_menu_item > a, #desktop-menu .menu > .current-menu-item > a, #desktop-menu .menu > li:hover > a {
{{navigation_typography_hover}}
}

#main_menu {
border-color: {{header_background_border_color}} !important;
background-color: {{header_background_color}} !important;
}

#mobile-menu {
background-color: {{mobile_menu_bg}} !important;
}

#mobile-menu a {
{{mobile_menu_typography}}
}

#mobile-menu ul li a {
border-bottom-color: {{mobile_menu_border}} !important;
}

h1 {
{{h1}}
}

h2 {
{{h2}}
}

h3 {
{{h3}}
}

h4 {
{{h4}}
}

h5 {
{{h5}}
}

h6 {
{{h6}}
}

#footer {
background-color: {{footer_background_color}} !important;
}

.copyright {
{{copyright_text__typography}}
}',
        'type'        => 'css',
        'section'     => 'dynamic_css',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => '404_title_text',
        'label'       => '404 Title Text',
        'desc'        => '',
        'std'         => 'ooops... error 404',
        'type'        => 'text',
        'section'     => '404_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => '404_text',
        'label'       => '404 Text',
        'desc'        => '',
        'std'         => 'We`re sorry, but the page you are looking for doesn`t exist.',
        'type'        => 'text',
        'section'     => '404_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_background_color',
        'label'       => 'Footer Background Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'copyright_text__typography',
        'label'       => 'Copyright Text  Typography',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'copyright_text',
        'label'       => 'Copyright Text',
        'desc'        => '',
        'std'         => 'All rights resevered.',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'facebook_url',
        'label'       => 'Facebook URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitter_url',
        'label'       => 'Twitter URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'dribbble_url',
        'label'       => 'Dribbble URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkedin_url',
        'label'       => 'LinkedIn URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'google_plus_url',
        'label'       => 'Google Plus URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'default_layout',
        'label'       => 'Default Layout',
        'desc'        => '',
        'std'         => 'right_sidebar',
        'type'        => 'radio-image',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'left_sidebar',
            'label'       => 'Left Sidebar',
            'src'         => 'OT_URL . \'/assets/images/layout/left-sidebar.png\''
          ),
          array(
            'value'       => 'right_sidebar',
            'label'       => 'Right Sidebar',
            'src'         => 'OT_URL .\'/assets/images/layout/right-sidebar.png\''
          )
        ),
      ),
      array(
        'id'          => 'pagination_type',
        'label'       => 'Pagination Type',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Number',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Next & previous',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_author_info',
        'label'       => 'Enable Author Info',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Active',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_create_data',
        'label'       => 'Enable Create Data',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Active',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_comments_info',
        'label'       => 'Enable Comments Info',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Active',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'body_text_font',
        'label'       => 'Body Text Font',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h1',
        'label'       => 'H1',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h2',
        'label'       => 'H2',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h3',
        'label'       => 'H3',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h4',
        'label'       => 'H4',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h5',
        'label'       => 'H5',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h6',
        'label'       => 'H6',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_email',
        'label'       => 'Contact email',
        'desc'        => 'Email address that contact form will send message to',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '', 
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}