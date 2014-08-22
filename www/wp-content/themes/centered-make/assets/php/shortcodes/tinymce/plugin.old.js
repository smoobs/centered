(function ()
{
	// create zillaShortcodes plugin
	tinymce.create("tinymce.plugins.zillaShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("zillaPopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert Zilla Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "zilla_button" )
			{	
				var a = this;
				
				var btn = e.createSplitButton('zilla_button', {
                    title: "Insert Zilla Shortcode",
					image: ZillaShortcodes.plugin_folder +"/tinymce/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{					
					a.addWithPopup( b, "Accordion", "accordion" );
					a.addWithPopup( b, "Alerts", "alert" );
					a.addWithPopup( b, "News", "news" ); 
					a.addWithPopup( b, "Columns", "columns" ); 
					a.addWithPopup( b, "Slogan", "slogan" ); 
					a.addWithPopup( b, "Text", "text" ); 
					a.addWithPopup( b, "Title", "title" ); 
					a.addImmediate( b, "Clients", "[clients]" );
					a.addWithPopup( b, "Content Box", "content_box" );
					a.addWithPopup( b, "Callout Box", "callout_box" );
					a.addWithPopup( b, "Contact Details", "contact_details" );
					a.addImmediate( b, "Contact Form", "[contact_form]" ); 
					a.addImmediate( b, "Clear Floats", "[clear]" ); 
					a.addWithPopup( b, "Diagrams", "diagrams" );
					a.addImmediate( b, "Divider", "[divider]" );
					a.addWithPopup( b, "Number Details", "number_details" );
					a.addImmediate( b, "Portfolio", "[portfolio]" );  
					a.addWithPopup( b, "Tabs", "tabs" );
					a.addImmediate( b, "Team", "[team]" );
					a.addWithPopup( b, "Testimonials", "testimonials" );
					a.addWithPopup( b, "Toggle", "toggle" );
					a.addWithPopup( b, "Social Icons", "social" );
					a.addWithPopup( b, "Video Player", "video_player" );
					a.addWithPopup( b, "Google Map", "google_map" );
					a.addWithPopup( b, "Pricing Tables", "pricing_tables" );
				}); 
                
                return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("zillaPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'Zilla Shortcodes',
				author: 'Orman Clark',
				authorurl: 'http://themeforest.net/user/ormanclark/',
				infourl: 'http://wiki.moxiecode.com/',
				version: "1.0"
			}
		}
	});
	
	// add zillaShortcodes plugin
	tinymce.PluginManager.add("zillaShortcodes", tinymce.plugins.zillaShortcodes);
})();