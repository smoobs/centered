<?php 
/**
 *
 * @package Make
 */
?>

<?php 
if(have_posts()) :
			while (have_posts() ) : the_post();
				$skills =  get_post_meta( get_the_ID(),'skills',true );		
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				$release_date =  get_post_meta( get_the_ID(),'release_date',true );	
				$client =  get_post_meta( get_the_ID(),'client',true );	
				$copyright =  get_post_meta( get_the_ID(),'copyright',true );	
				$sample_meta =  get_post_meta( get_the_ID(),'sample_meta',true );
				$project_link =  get_post_meta( get_the_ID(),'project_link',true );
				$project_description =  get_post_meta( get_the_ID(),'project_description',true );
				$project_link_url =  get_post_meta( get_the_ID(),'project_link_url',true );
				?>
<div class="portfolio-border">
	<div class="col-md-8">
		<img src="<?php echo $url;?>" alt="" class="img-responsive" />
	</div>
	<div class="col-md-4">
	
		<h4>Project Details</h4>
	<?php if($skills):?>
		<div class="portfolio-detail">
			<span>Skills</span>: <?php echo $skills; ?>
		</div>
	<?php endif;?>
	<?php if($release_date):?>	
		<div class="portfolio-detail">
			<span>Release Date</span>: <?php echo $release_date; ?>
		</div>
	<?php endif;?>
	<?php if($client):?>	
		<div class="portfolio-detail">
			<span>Client</span>: <?php echo $client; ?>
		</div>
	<?php endif;?>
	<?php if($copyright):?>
		<div class="portfolio-detail">
			<span>Copyright</span>:<?php echo $copyright; ?>
		</div>
	<?php endif;?>
	<?php if($sample_meta):?>
		<div class="portfolio-detail">
			<span>Sample Meta</span>: <?php echo $sample_meta; ?>
		</div>
	<?php endif;?>
	<?php if($project_link):?>
		<div class="portfolio-detail">
			<span>Project's link</span>: <a href="<?php echo $project_link_url;?>" target="_blank" class="general_color"><?php echo $project_link;?></a>
		</div>
	<?php endif;?>
	<?php if($project_description):?>
		<h4 class="top-space">Project Description</h4>
		<p class="description-portfolio">
			<?php echo $project_description; ?>
		</p>
	<?php endif;?>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12">
		<div class="divider-1"></div>
	</div>
</div>

<?php endwhile;endif;?>