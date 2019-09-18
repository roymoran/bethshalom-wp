<?php
get_header();
?>
<section class="blog-page-header" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/commitees70.jpg);">
	<div>OUR BLOG</div>
	<hr>
</section>
<section class="section blog-section blog-list-padding">
	<?php
	if (have_posts()) {

		// Load posts loop.
		while (have_posts()) {
			the_post();
			get_template_part('template-parts/content/content');
		}
	} else {

		// If no content, include the "No posts found" template.
		get_template_part('template-parts/content/content', 'none');
	}
	?>

</section>

<?php
get_footer();
