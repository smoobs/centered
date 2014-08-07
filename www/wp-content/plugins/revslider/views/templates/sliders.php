<?php
	$exampleID = '"slider1"';
	if(!empty($arrSliders))
		$exampleID = '"'.$arrSliders[0]->getAlias().'"';
		
	$outputTemplates = false;
?>

	<div class='wrap'>
		<div class="clear_both"></div> 

	<div class="title_line">
		<div class="view_title">
			<?php _e("Revolution Sliders",REVSLIDER_TEXTDOMAIN)?>
		</div>
		
		<a href="<?php echo GlobalsRevSlider::LINK_HELP_SLIDERS?>" class="button-secondary float_right mtop_10 mleft_10" target="_blank"><?php _e("Help",REVSLIDER_TEXTDOMAIN)?></a>			
		
		<a id="button_general_settings" class="button-secondary float_right mtop_10"><?php _e("Global Settings",REVSLIDER_TEXTDOMAIN)?></a>
		
	</div>

	<?php if(empty($arrSliders)): ?>
		<?php _e("No Sliders Found",REVSLIDER_TEXTDOMAIN)?>
		<br>
	<?php else:
		 require self::getPathTemplate("sliders_list");	 		
	endif?>
	
	<p>			
		<a class='button-primary revblue' href='<?php echo $addNewLink?>'><?php _e("Create New Slider",REVSLIDER_TEXTDOMAIN)?> </a>
		<a id="button_import_slider" class='button-primary float_right revgreen' href='javascript:void(0)'><?php _e("Import Slider",REVSLIDER_TEXTDOMAIN)?> </a>		
	</p>

	
	<div class="title_line"><div class="view_title"><?php _e("Revolution Slider Templates",REVSLIDER_TEXTDOMAIN)?></div></div>
	<?php if(empty($arrSlidersTemplates)){ ?>
		<?php _e("No Template Sliders Found",REVSLIDER_TEXTDOMAIN)?>
		<br>
	<?php }else{
			$outputTemplates = true;
			require self::getPathTemplate("sliders_list");	 		
		}
		?>
	
	<br>
	<p><a class='button-primary revblue' href='<?php echo $addNewTemplateLink?>'><?php _e("Create New Template Slider",REVSLIDER_TEXTDOMAIN)?> </a></p>
	<br>
	<div>		
		<h3> <?php _e("How To Use",REVSLIDER_TEXTDOMAIN)?>:</h3>
		
		<ul>
			<li>
				<?php _e("* From the",REVSLIDER_TEXTDOMAIN)?> <b><?php _e("theme html",REVSLIDER_TEXTDOMAIN)?></b> <?php _e("use",REVSLIDER_TEXTDOMAIN)?>: <code>&lt?php putRevSlider( "alias" ) ?&gt</code> <?php _e("example",REVSLIDER_TEXTDOMAIN)?>: <code>&lt?php putRevSlider(<?echo $exampleID?>) ?&gt</code>
				<br>
				&nbsp;&nbsp; <?php _e("For show only on homepage use",REVSLIDER_TEXTDOMAIN)?>: <code>&lt?php putRevSlider(<?echo $exampleID?>,"homepage") ?&gt</code>
				<br>&nbsp;&nbsp; <?php _e("For show on certain pages use",REVSLIDER_TEXTDOMAIN)?>: <code>&lt?php putRevSlider(<?echo $exampleID?>,"2,10") ?&gt</code> 
			</li>
			<li><?php _e("* From the",REVSLIDER_TEXTDOMAIN)?> <b><?php _e("widgets panel",REVSLIDER_TEXTDOMAIN)?></b> <?php _e("drag the \"Revolution Slider\" widget to the desired sidebar",REVSLIDER_TEXTDOMAIN)?></li>
			<li><?php _e("* From the",REVSLIDER_TEXTDOMAIN)?> <b><?php _e("post editor",REVSLIDER_TEXTDOMAIN)?></b> <?php _e("insert the shortcode from the sliders table",REVSLIDER_TEXTDOMAIN)?></li>
		</ul>
		---------
		<p>
			<?php _e("If you have some support issue:",REVSLIDER_TEXTDOMAIN); ?><br />
			<?php _e("- In case the Slider came bundled with your theme, please contact your theme author",REVSLIDER_TEXTDOMAIN); ?><br />
			<?php _e("- If the Slider has been purchased at CodeCanyon, visit",REVSLIDER_TEXTDOMAIN); ?> <a href="http://www.themepunch.com/">Themepunch</a> or the <a href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/discussion/2751380?ref=themepunch">Slider Revolution</a> <?php _e("Discussion Page",REVSLIDER_TEXTDOMAIN);?>
		</p> 
	</div>
	
	<p></p>
	
	</div>
	
	<!-- Import slider dialog -->
	<div id="dialog_import_slider" title="<?php _e("Import Slider",REVSLIDER_TEXTDOMAIN)?>" class="dialog_import_slider" style="display:none">
		<form action="<?php echo UniteBaseClassRev::$url_ajax?>" enctype="multipart/form-data" method="post">
		    <br>
		    <input type="hidden" name="action" value="revslider_ajax_action">
		    <input type="hidden" name="client_action" value="import_slider_slidersview">
		    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce("revslider_actions"); ?>">
		    <?php _e("Choose the import file",REVSLIDER_TEXTDOMAIN)?>:   
		    <br>
			<input type="file" size="60" name="import_file" class="input_import_slider">
			<br><br>
			<span style="font-weight: 700;"><?php _e("Note: custom styles will be updated if they exist!",REVSLIDER_TEXTDOMAIN)?></span><br><br>
			<table>
				<tr>
					<td><?php _e("Custom Animations:",REVSLIDER_TEXTDOMAIN)?></td>
					<td><input type="radio" name="update_animations" value="true" checked="checked"> <?php _e("overwrite",REVSLIDER_TEXTDOMAIN)?></td>
					<td><input type="radio" name="update_animations" value="false"> <?php _e("append",REVSLIDER_TEXTDOMAIN)?></td>
				</tr>
				<tr>
					<td><?php _e("Static Styles:",REVSLIDER_TEXTDOMAIN)?></td>
					<td><input type="radio" name="update_static_captions" value="true" checked="checked"> <?php _e("overwrite",REVSLIDER_TEXTDOMAIN)?></td>
					<td><input type="radio" name="update_static_captions" value="false"> <?php _e("append",REVSLIDER_TEXTDOMAIN)?></td>
				</tr>
			</table>
			<br><br>
			<input type="submit" class='button-primary' value="<?php _e("Import Slider",REVSLIDER_TEXTDOMAIN)?>">
		</form>		
		
	</div>
	
	<script type="text/javascript">
		jQuery(document).ready(function(){
			RevSliderAdmin.initSlidersListView();
		});
	</script>
	