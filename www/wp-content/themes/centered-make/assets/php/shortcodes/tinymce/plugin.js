(function($) {
"use strict";   
 

			
 			//Shortcodes
            tinymce.PluginManager.add( 'zillaShortcodes', function( editor, url ) {
				
				editor.addCommand("zillaPopup", function ( a, params )
				{
					var popup = params.identifier;
					tb_show("Insert Zilla Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
				});
     
                editor.addButton( 'zilla_button', {
                    type: 'splitbutton',
                    icon: false,
					title:  'Zilla Shortcodes',
					onclick : function(e) {},
					menu: [
										
					
					{text: 'Accordions',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Accordions',identifier: 'accordion'})
					}},
					
					{text: 'Alerts',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Alerts',identifier: 'alert'})
					}},
										
					
					{text: 'Columns',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Columns',identifier: 'columns'})
					}},
					
					{text: 'Clear Floats',onclick:function(){
					editor.execCommand("mceInsertContent", false, "[clear]")
					}},

					{text: 'Clients',onclick:function(){
					editor.execCommand("mceInsertContent", false, "[clients]")
					}},
					
					{text: 'Callout Box',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Callout Box',identifier: 'callout_box'})
					}},
					
					{text: 'Content Box',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Content Box',identifier: 'content_box'})
					}},
					
					{text: 'Contact Details',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Contact Details',identifier: 'contact_details'})
					}},
					
					{text: 'Contact Form',onclick:function(){
					editor.execCommand("mceInsertContent", false, "[contact_form]")
					}},
					
					{text: 'Diagrams',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Diagrams',identifier: 'diagrams'})
					}},
					
					{text: 'Divider',onclick:function(){
					editor.execCommand("mceInsertContent", false, "[divider]")
					}},
					
					{text: 'Google Map',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Google Map',identifier: 'google_map'})
					}},
					
					{text: 'News',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'News',identifier: 'news'})
					}},
					
					
					{text: 'Slogan',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Slogan',identifier: 'slogan'})
					}},
					
					
					{text: 'Text',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Text',identifier: 'text'})
					}},
					
					{text: 'Testimonials',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Testimonials',identifier: 'testimonials'})
					}},
					
					{text: 'Number Details',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Number Details',identifier: 'number_details'})
					}},
					
					{text: 'Portfolio',onclick:function(){
					editor.execCommand("mceInsertContent", false, "[portfolio]")
					}},
					
					{text: 'Pricing Tables',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Pricing Tables',identifier: 'pricing_tables'})
					}},
					
					{text: 'Social Icons',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Social Icons',identifier: 'social'})
					}},
					
					{text: 'Tabs',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Tabs',identifier: 'tabs'})
					}},
					
					
					{text: 'Title',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Title',identifier: 'title'})
					}},
					
					
					{text: 'Team',onclick:function(){
					editor.execCommand("mceInsertContent", false, "[team]")
					}},
					
					{text: 'Toggle',onclick:function(){ 
					editor.execCommand("zillaPopup", false, {title: 'Toggle',identifier: 'toggle'})
					}},					
					
					{text: 'Video Player',onclick:function(){
					editor.execCommand("zillaPopup", false, {title: 'Video Player',identifier: 'video_player'})
					}},
					

					

					]
					
                
        	  });
         
          });
         

 
})(jQuery);