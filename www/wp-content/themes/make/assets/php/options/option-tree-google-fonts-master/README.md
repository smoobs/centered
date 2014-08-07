<h1>OTGoogleFont - Google Fonts Library for OptionTree</h1>
<p>OTGoogleFont is an Option-Tree addon to add Google Fonts to your OptionTree typography options. Option-Tree is a WordPress Plugin created by <a href="http://valendesigns.com/">Derek Herman (valendesign)</a></p>

<h2>Features</h2>
<ul>
	<li>Google Fonts loaded to OptionTree typography fields.</li>
	<li>Automatic update of Google Font library once a week (default).</li>
	<li>Live font preview in OptionTree options menu. No saving or reload needed.</li>
	<li>Enter any text you like in the textbox to see how your text looks like.</li>
	<li>Fallback for default fonts, if no Google Fonts are available.</li>
	<li>Google Fonts are automatically included in front-end, no need to code it in your Theme.</li>
</ul>


<h3>How to install?</h3>
<ol>
	<li>Download the package and make sure OptionTree is installed.(https://github.com/valendesigns/option-tree).</li>
	<li>Copy the content from functions.php to your WordPress theme functions.php file.</li>
	<li>Add your Google Font API key for the constant OT_FONT_API_KEY</li>
	<li>Upload /ot-google-fonts folder to your themes directory.</li>
	<li>Create a typography option at your option set and the addon automatically adds all those Google Font Options.</li>
	<li>Your done!</li>
</ol>

<h3>How to add thoses styles to a HTML element?</h3>
<p>In order to apply those styles to HTML elements, you have to use the dynamic.css function of Option-Tree.</p>
<p>For example if you have a typography field with the ID "font-body" you have to add something like this:</p>

<pre>
body { {{font-body}} }
</pre>

<p>This will add all styles to the body which are set for the font_body typography field within your Option-Tree options.</p>
<p>See the Option-Tree documentation for more information about dynamic.css styles.</p>

<h3>Styles are not applied?</h3>
<p>If your styles are not applied to your elements added in the dynamic.css please make sure the dynamic.css file from OptionTree is loaded after the main theme style.css file.</p>
<p>To load the dynamic.css file after the style.css you have to dequeue it and then enqueue it again after your main style.css file like this:</pre>

<pre>
	 wp_dequeue_style( 'ot-dynamic-dynamic-css' );
	 wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
	 wp_enqueue_style( 'ot-dynamic-dynamic-css' );
</pre>