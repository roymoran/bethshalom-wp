<?php /* Template Name: NewPageTemplate */ ?>
<?php get_header(); ?>

<?php
if (have_posts()) {

    // Load posts loop.
    while (have_posts()) {
        the_post();
        ?>
        <section class="page-header" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/commitees70.jpg);">
            <div class="new-page-template-title"> <?php the_title() ?> </div>
            <hr>
        </section>
        <section class="section committee-section">
            <?php
                if (get_the_post_thumbnail_url()) {
                    echo "<img src='".get_the_post_thumbnail_url()."' alt='page-image' width='300px;' height='300px;' />";
                }
            ?>
            <div class="committee-info"><?php the_content() ?></div>
        </section>
<?php

    }
} else { }

?>
<?php get_footer(); ?>