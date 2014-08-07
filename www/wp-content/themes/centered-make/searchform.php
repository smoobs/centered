<div class="search-field widget">
	<span data-icon="&#xe009" class="search-button"></span>
	<form action="<?php echo home_url(); ?>/" id="searchform" method="get">
		<input type="text" name="s" value="Search..." onfocus="if(this.value=='' || this.value == 'Search...') this.value=''" onblur="if(this.value == '') {this.value=this.defaultValue}" onkeyup="keyUp();" />
		<input type="submit" value="" />
	</form>
</div>