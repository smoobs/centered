<?php
/**
 * @package Make
 */
?>

<?php 
    if ( ! comments_open() ) { // There are comments but comments are now closed
        echo '';
	}
	else {
		if (have_comments()) { ?>
<section id="comments" class="hover-head-color">
    <header><h3 class="head-more-info line-header"><?php comments_number('No Responses', 'One Response', '% Responses');?> <?php printf('to %s', the_title('', '', false)); ?></h3></header>
		<?php $comments = get_comments( array (
			'post_id' => $post->ID
			)
		); ?>
    <ul id="comments-list">
		<?php
     wp_list_comments(array(
      // see http://codex.wordpress.org/Function_Reference/wp_list_comments
      // 'login_text'        => 'Login to reply',
      // 'callback'          => null,
      // 'end-callback'      => null,
      // 'type'              => 'all',
      // 'reverse_top_level' => null,
	   'avatar_size'       => 60
      // 'reverse_children'  =>
      ));
      ?>
	</ul>
			<nav id="pagination">
				<?php paginate_comments_links(
						array('prev_text' => '<i class="icon-angle-left pagination-button"></i>', 'next_text' => '<i class="icon-angle-right pagination-button"></i>')
						);				 
				?>
				<div class="clear"></div>
			</nav>
</section>
<?php } ?>
<section id="post-comment-form">
		<?php	comment_form( array (
			'comment_notes_before' => '',
			'comment_notes_after' => '',
			'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="comment-form-author">' . '' . ( $req ? '' : '' ) . '<input id="author" name="author" type="text" value="Your name (required)" size="30" /></div>',
		'email' => '<div class="comment-form-email">' . ( $req ? '' : '' ) . '<input id="email" class="margin-input" name="email" type="text" value="Your email (required)"  size="30" /></div>',
		'url' => '<div class="comment-form-url">' . '<input id="url" name="url" type="text" onfocus="if(this.value==this.defaultValue)this.value="";" onblur="if(this.value=="")this.value=this.defaultValue;" value="Your website" size="30" /></div><div class="clear"></div>' )
			)
		)
		); ?>
</section>
<?php } ?>