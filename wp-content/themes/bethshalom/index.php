<?php
get_header();
?>
<section class="page-header">
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
