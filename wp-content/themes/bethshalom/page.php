<?php get_header(); ?>
<?php
/* Start the Loop */
while (have_posts()) :
    the_post();
    the_content();

    get_template_part('template-parts/content/content', 'page');

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }

endwhile; // End of the loop.
?>
<?php get_footer(); ?>