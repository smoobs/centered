<?php

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text', 
			'label' => __('Button URL', 'textdomain'),
			'desc' => __('Add the button\'s url eg http://example.com', 'textdomain')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Button Style', 'textdomain'),
			'desc' => __('Select the button\'s style, ie the button\'s colour', 'textdomain'),
			'options' => array(
				'grey' => 'Grey',
				'black' => 'Black',
				'green' => 'Green',
				'light-blue' => 'Light Blue',
				'blue' => 'Blue',
				'red' => 'Red',
				'orange' => 'Orange',
				'purple' => 'Purple'
			)
		),
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'textdomain'),
			'desc' => __('Select the button\'s size', 'textdomain'),
			'options' => array(
				'small' => 'Small',
				'medium' => 'Medium',
				'large' => 'Large'
			)
		),
		'type' => array(
			'type' => 'select',
			'label' => __('Button Type', 'textdomain'),
			'desc' => __('Select the button\'s type', 'textdomain'),
			'options' => array(
				'round' => 'Round',
				'square' => 'Square'
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'textdomain'),
			'desc' => __('_self = open in same window. _blank = open in new window', 'textdomain'),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button\'s Text', 'textdomain'),
			'desc' => __('Add the button\'s text', 'textdomain'),
		)
	),
	'shortcode' => '[zilla_button url="{{url}}" style="{{style}}" size="{{size}}" type="{{type}}" target="{{target}}"] {{content}} [/zilla_button]',
	'popup_title' => __('Insert Button Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Alert Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['alert'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Alert Style', 'textdomain'),
			'desc' => __('Select the alert\'s style, ie the alert colour', 'textdomain'),
			'options' => array(
				'alert-1' => 'Yellow',
				'alert-3' => 'Red',
				'alert-4' => 'Blue',
				'alert-2' => 'Green'
			)
		),
		'content' => array(
			'std' => 'Your Alert!',
			'type' => 'textarea',
			'label' => __('Alert Text', 'textdomain'),
			'desc' => __('Add the alert\'s text', 'textdomain'),
		)
		
	),
	'shortcode' => '[alert style="{{style}}"] {{content}} [/alert]',
	'popup_title' => __('Insert Alert Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Toggle Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['toggle'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'type' => 'text',
			'label' => __('Toggle Content Title', 'textdomain'),
			'desc' => __('Add the title that will go above the toggle content', 'textdomain'),
			'std' => 'Title'
		),
		'content' => array(
			'std' => 'Content',
			'type' => 'textarea',
			'label' => __('Toggle Content', 'textdomain'),
			'desc' => __('Add the toggle content. Will accept HTML', 'textdomain'),
		),
		'state' => array(
			'type' => 'select',
			'label' => __('Toggle State', 'textdomain'),
			'desc' => __('Select the state of the toggle on page load', 'textdomain'),
			'options' => array(
				'open' => 'Open',
				'closed' => 'Closed'
			)
		),
		
	),
	'shortcode' => '[toggle title="{{title}}" state="{{state}}"] {{content}} [/toggle]',
	'popup_title' => __('Insert Toggle Content Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['tabs'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[tabs] {{child_shortcode}}  [/tabs]',
    'popup_title' => __('Insert Tab Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'textdomain'),
                'desc' => __('Title of the tab', 'textdomain'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'textdomain'),
                'desc' => __('Add the tabs content', 'textdomain')
            )
        ),
        'shortcode' => '[tab title="{{title}}"] {{content}} [/tab]',
        'clone_button' => __('Add Tab', 'textdomain')
    )
);
/*-----------------------------------------------------------------------------------*/
/*	Accordion Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['accordion'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[accordions] {{child_shortcode}}  [/accordions]',
    'popup_title' => __('Insert Accordion Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'textdomain'),
                'desc' => __('Title of the tab', 'textdomain'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'textdomain'),
                'desc' => __('Add the tabs content', 'textdomain')
            )
        ),
        'shortcode' => '[accordion title="{{title}}"] {{content}} [/accordion]',
        'clone_button' => __('Add Tab', 'textdomain')
    )
);
/*-----------------------------------------------------------------------------------*/
/*	Diagrams Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['diagrams'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[diagrams] {{child_shortcode}}  [/diagrams]',
    'popup_title' => __('Insert Bar Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Bar Title', 'textdomain'),
                'desc' => __('Title of the bar', 'textdomain'),
            ),
            'percent' => array(
                'std' => '50',
                'type' => 'text',
                'label' => __('Bar Percent', 'textdomain'),
                'desc' => __('Percent of the bar', 'textdomain')
            ),
			'text_color' => array(
				'type' => 'select',
				'label' => __('Text Color', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => array(
					'default' => 'Default',
					'white' => 'White' 
				)
			)
        ),
        'shortcode' => '[diagram title="{{title}}" percent="{{percent}}" text_color="{{text_color}}"]  ',
        'clone_button' => __('Add Bar', 'textdomain')
    )
);
/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'textdomain'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array( 
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'textdomain'),
				'desc' => __('Select the type, ie width of the column.', 'textdomain'),
				'options' => array(
					'one_first' => 'One First',
					'one_third' => 'One Third',
					'two_third' => 'Two Thirds',
					'one_half' => 'One Half',
					'one_fourth' => 'One Fourth',
					'three_fourth' => 'Three Fourth',
					'one_sixth' => 'One Sixth',
					'five_sixth' => 'Five Sixth',
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'textdomain'),
				'desc' => __('Add the column content.', 'textdomain'),
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Column', 'textdomain')
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Social Icons Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['social'] = array(
	'no_preview' => true,
		'params' => array(
			'icon' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Font Awesome Icon', 'textdomain'),
				'desc' => __('Add class icon (<a href="'.esc_url('http://fortawesome.github.io/Font-Awesome/3.2.1/icons/').'" target="_blank">Refer here </a>)', 'textdomain'),
			)
		),
		'shortcode' => '[social icon="{{icon}}"] ',
		'popup_title' => __('Social Icon', 'textdomain')
	
);


/*-----------------------------------------------------------------------------------*/
/*	Calloout BOx Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['callout_box'] = array(
	'no_preview' => true,
		'params' => array(
			'title' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Title', 'textdomain'),
				'desc' => __('Title of the Callout Box', 'textdomain'),
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Callout Box Content', 'textdomain'),
				'desc' => __('Add the callout box content.', 'textdomain'),
			),
			'button' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Button Text', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'button_link' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Button Link', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'text_color' => array(
				'type' => 'select',
				'label' => __('Text Color', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => array(
					'default' => 'Default',
					'white' => 'White'
				)
			)
		),
		'shortcode' => '[callout_box title="{{title}}" button="{{button}}" button_link="{{button_link}}" text_color="{{text_color}}"] {{content}} [/callout_box]',
		'popup_title' => __('Callout Box', 'textdomain') 
		
	
);

/*-----------------------------------------------------------------------------------*/
/*	Content Box Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['content_box'] = array(
	'no_preview' => true,
		'params' => array(
			'title' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Title', 'textdomain'),
				'desc' => __('Title of the Callout Box', 'textdomain'),
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Content', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'icon' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Linecons icon class', 'textdomain'),
				'desc' => __('If you do not use LineCons, leave this field empty <a href="'.esc_url('http://linecons.studio-themes.com/').'" target="_blank">Refer here </a>', 'textdomain'),
			),
			'icon2' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Awesome icon class', 'textdomain'),
				'desc' => __('Font Awesome is available if you do not use LineCons <a href="'.esc_url('http://fortawesome.github.io/Font-Awesome/3.2.1/icons/').'" target="_blank">Refer here </a>', 'textdomain'),
			),  
			'style' => array(
				'type' => 'select',
				'std' => 'style1',
				'label' => __('Select Style', 'textdomain'),
				'desc' => __('Select the style content box', 'textdomain'),
				'options' => array(
					'style1' => 'Style 1',
					'style2' => 'Style 2',
				)
				),
			'text_color' => array(
				'type' => 'select',
				'label' => __('Text Color', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => array(
					'default' => 'Default',
					'white' => 'White'
				)
			)

		),
		'shortcode' => '[content_box title="{{title}}" icon="{{icon}}" icon2="{{icon2}}" style="{{style}}" text_color="{{text_color}}"] {{content}} [/content_box]',	
		'popup_title' => __('Content Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Number Details Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['number_details'] = array(
	'no_preview' => true,
		'params' => array(
			'number' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Number', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'number_details' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Number Details', 'textdomain'),
				'desc' => __('', 'textdomain'),
			), 
			'text_color' => array(
				'type' => 'select',
				'label' => __('Text Color', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => array(
					'default' => 'Default',
					'white' => 'White',
				),
			),

		),
		'shortcode' => '[number_details number_details="{{number_details}}" number="{{number}}" text_color="{{text_color}}"]',
		'popup_title' => __('Number Details', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/

/*	Video Config

/*-----------------------------------------------------------------------------------*/



$zilla_shortcodes['video_player'] = array(

	'no_preview' => true,

	'params' => array(

            'video_type' => array(

			'type' => 'select',

			'label' => __('Video Type', 'textdomain'),

			'desc' => __('', 'textdomain'),

			'options' => array(

				'youtube' => 'Youtube',

				'vimeo' => 'Vimeo',

			),

		),

		'video_id' => array(

			'std' => '',

			'type' => 'text',

			'label' => __('Video ID', 'textdomain'),

			'desc' => __('Enter Youtube or Vimeo ID', 'textdomain')

		)

		

	),

	'shortcode' => '[video_player video_type="{{video_type}}" video_id="{{video_id}}"]',

	'popup_title' => __('Insert Video', 'textdomain')

);




/*-----------------------------------------------------------------------------------*/

/*	Google Map Config

/*-----------------------------------------------------------------------------------*/



$zilla_shortcodes['google_map'] = array(

	'no_preview' => true,

	'params' => array(


		'map_code' => array(

			'std' => '',

			'type' => 'text',

			'label' => __('Map SRC code', 'textdomain'),

			'desc' => __('Enter Google Map Url (src from IFRAME code!)', 'textdomain')

		)

		

	),

	'shortcode' => '[google_map map_code="{{map_code}}"]',

	'popup_title' => __('Insert Map', 'textdomain')

);


/*-----------------------------------------------------------------------------------*/
/*	Princing Tables Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['pricing_tables'] = array(
	'params' => array(
		'title' => array(
				'std' => 'Basic',
				'type' => 'text',
				'label' => __('Table Name', 'textdomain'),
				'desc' => __('You can enter a first name for table here.', 'textdomain'),
			),
		'price' => array(
				'std' => '99',
				'type' => 'text',
				'label' => __('Price', 'textdomain'),
				'desc' => __('You can enter a price for table here.', 'textdomain'),
			),
		'value' => array(
			'std' => '$',
			'type' => 'text',
			'label' => __('Value', 'textdomain'),
			'desc' => __('You can enter a value for table here.', 'textdomain'),
		),
		'subtitle_price' => array(
			'std' => 'per month',
			'type' => 'text',
			'label' => __('Subtitle Price', 'textdomain'),
			'desc' => __('You can enter a subtitle price for table here.', 'textdomain'),
		),
		'link' => array(
				'std' => 'http://',
				'type' => 'text',
				'label' => __('Button Link', 'textdomain'),
				'desc' => __('Enter a link for button here.', 'textdomain'),
			),
		'button_text' => array(
				'std' => 'Sign Up Now',
				'type' => 'text',
				'label' => __('Button Text', 'textdomain'),
				'desc' => __('What would you like button to say?', 'textdomain'),
			),
		),
	'shortcode' => '[pricing_table title="{{title}}" price="{{price}}"    value="{{value}}" subtitle_price="{{subtitle_price}}" link="{{link}}" featured="{{featured}}" button_text="{{button_text}}"]  {{child_shortcode}} [/pricing_table]', 
	'popup_title' => __('Pricing Tables Shortcode', 'textdomain'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'content' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Plan Option', 'textdomain'),
				'desc' => __('Enter plan option info', 'textdomain'),
			)
		),
		'shortcode' => '[price_option] {{content}} [/price_option]',
		'clone_button' => __('Add Plan Option', 'textdomain'),
		
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Testimonials Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['testimonials'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[testimonials] {{child_shortcode}}  [/testimonials]',
    'popup_title' => __('Insert Testimonial Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'author' => array(
                'std' => 'Author',
                'type' => 'text',
                'label' => __('Author', 'textdomain'),
                'desc' => __('', 'textdomain'),
            ),
	       'company' => array(
                'std' => 'Company',
                'type' => 'text',
                'label' => __('Company', 'textdomain'),
                'desc' => __('', 'textdomain')
            ),
            'content' => array(
                'std' => 'Content',
                'type' => 'textarea',
                'label' => __('Content', 'textdomain'),
                'desc' => __('', 'textdomain')
            ),
			'text_color' => array(
				'type' => 'select',
				'label' => __('Text Color', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => array(
					'default' => 'Default',
					'white' => 'White'
				)
			)
        ),
        'shortcode' => '[testimonial author="{{author}}"  text_color="{{text_color}}" company="{{company}}"] {{content}} [/testimonial]',
        'clone_button' => __('Add Testimonial', 'textdomain')
    )
);



/*-----------------------------------------------------------------------------------*/
/*	Contact Details Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['contact_details'] = array(
	'no_preview' => true,
		'params' => array(
			'adress' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Adress', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'phone' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Phone', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'fax' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Fax', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'mail' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Mail', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'text_color' => array(
				'type' => 'select',
				'label' => __('Text Color', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => array(
					'default' => 'Default',
					'white' => 'White'
				)
			)
		),
		'shortcode' => '[contact_details adress="{{adress}}" phone="{{phone}}" fax="{{fax}}" mail="{{mail}}" text_color="{{text_color}}"]',	
		'popup_title' => __('Contact Details', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	News Config
/*-----------------------------------------------------------------------------------*/

 $categories = get_categories();
 
   foreach($categories as $category) { 
  $array[$category->cat_ID] = $category->name;
  }
$zilla_shortcodes['news'] = array(
	'no_preview' => true,
		'params' => array(
			'number_posts' => array(
				'std' => '3',
				'type' => 'text',
				'label' => __('Number of posts', 'textdomain'),
				'desc' => __('', 'textdomain'),
			),
			'number_posts_row' => array(
				'std' => 3,
				'type' => 'select',
				'label' => __('Number of posts in row', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => array(
					1 => 1, 
					2 => 2,
					3 => 3,
					4 => 4
				),
			),
			'category' => array(
				'std' => '',
				'type' => 'select',
				'label' => __('Category', 'textdomain'),
				'desc' => __('', 'textdomain'),
				'options' => $array,
			),

		),
		'shortcode' => '[news  number_posts="{{number_posts}}" number_posts_row="{{number_posts_row}}" category="{{category}}"]',	'popup_title' => __('News', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Slogan Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['slogan'] = array(
	'no_preview' => true,
	'params' => array(
		'text_size' => array(
			'type' => 'select',
			'label' => __('Text Size', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'h1' => 'H1',
				'h2' => 'H2',
				'h3' => 'H3',
				'h4' => 'H4',
				'h5' => 'H5',
				'h6' => 'H6',
			),
		),
		'content' => array(
			'std' => 'Text',
			'type' => 'text',
			'label' => __('Text', 'textdomain'),
			'desc' => __('', 'textdomain'),
		),
		'text_color' => array(
			'type' => 'select',
			'label' => __('Text Color', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'default' => 'Default',
				'white' => 'White'
			)
		)
	),
	'shortcode' => '[slogan text_size="{{text_size}}" text_color="{{text_color}}"] {{content}} [/slogan]',
	'popup_title' => __('Slogan', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Title Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['title'] = array(
	'no_preview' => true,
	'params' => array(
		'text_size' => array(
			'type' => 'select',
			'label' => __('Text Size', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'h1' => 'H1',
				'h2' => 'H2',
				'h3' => 'H3',
				'h4' => 'H4',
				'h5' => 'H5',
				'h6' => 'H6',
			),
		),
		'content' => array(
			'std' => 'Text',
			'type' => 'text',
			'label' => __('Text', 'textdomain'),
			'desc' => __('', 'textdomain'),
		),
		'text_align'=> array(
			'type' => 'select',
			'label' => __('Text Align', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'center' => 'Center',
				'left' => 'Left',
				'right' => 'Right',
			)
		),
		
		'border' => array(
			'type' => 'select',
			'label' => __('Border Right', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'on' => 'On',
				'off-' => 'off',
			)
		),
		'text_color' => array(
			'type' => 'select',
			'label' => __('Text Color', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'default' => 'Default',
				'white' => 'White'
			)
		)
	),
	'shortcode' => '[title text_size="{{text_size}}" border="{{border}}" text_align="{{text_align}}"  text_color="{{text_color}}"] {{content}} [/title]',
	'popup_title' => __('Title', 'textdomain')
);
/*-----------------------------------------------------------------------------------*/
/*	Text Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['text'] = array(
	'no_preview' => true,
	'params' => array(
		'text_size' => array(
			'type' => 'select',
			'label' => __('Text SIze', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'h1' => 'H1',
				'h2' => 'H2',
				'h3' => 'H3',
				'h4' => 'H4',
				'h5' => 'H5',
				'h6' => 'H6',
			),
		),
		'content' => array(
			'std' => 'Text',
			'type' => 'textarea',
			'label' => __('Text', 'textdomain'),
			'desc' => __('', 'textdomain'),
		),
		'text_color' => array(
			'type' => 'select',
			'label' => __('Text Color', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'default' => 'Default',
				'white' => 'White'
			)
		)
	),
	'shortcode' => '[text text_size="{{text_size}}" text_color="{{text_color}}"] {{content}} [/text]',
	'popup_title' => __('Text', 'textdomain')
);
?>