<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" class="blog-post">
	<?php twentynineteen_post_thumbnail(); ?>

	<div class="blog-post-details">
		<?php
		if (is_singular()) :
			the_title('<div class="blog-title">', '</div>');
		else :
			the_title('<div class="blog-title">', '</div>');
			echo "<p class='blog-sample'>" . get_the_excerpt() . "</p>";
			echo "<p class='blog-link'><a href=" . esc_url(get_permalink()) . ">Read More...</a></p>";
		endif;
		?>
	</div>
</div>