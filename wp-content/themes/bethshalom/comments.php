<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if (post_password_required()) {
	return;
}

$discussion = twentynineteen_get_discussion_data();
?>

<div id="comments" class="<?php echo comments_open() ? 'comments-container' : 'comments-container comments-closed'; ?>">
	<?php
	if (have_comments()) {
		wp_list_comments(
			array(
				'walker'      => new TwentyNineteen_Walker_Comment(),
				'avatar_size' => twentynineteen_get_avatar_size(),
				'short_ping'  => true,
				'style'       => 'div',
			)
		);
	}
	?>
</div><!-- #comments -->