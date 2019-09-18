<?php
get_header();
?>
<section class="blog-page-header" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/commitees70.jpg);">
    <div>OUR BLOG</div>
    <hr>
</section>
<section class="section blog-section">
    <div class="back-to-blog-posts"><a href="<?php echo esc_url(get_permalink(get_page_by_title('blog'))); ?>">
            < Back to All Blog Posts</a> </div> <?php
                                                /* Start the Loop */
                                                while (have_posts()) : the_post();
                                                    echo "<div class='individual-blog-post-title'>" . get_the_title() . "</div>";
                                                    echo "<div class='blog-time-author-details'>POSTED ON " . get_the_date('m/d/Y') . " BY: " . get_author_name() . "</div>";
                                                endwhile;
                                                ?> <div class="blog-content">
                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();
                    if (get_the_post_thumbnail_url()) {
                        echo "<div class='blog-image-float'><img src='" . get_the_post_thumbnail_url() . "' alt='placeholder' /></div>";
                    }
                    echo the_content();
                endwhile;
                ?>
    </div>
    <?php
    /* Start the Loop */
    while (have_posts()) : the_post();
        echo "<div class='blog-comment-count'>" . get_comments_number() . " Comment(s)</div>";

    endwhile;
    ?>
    <hr>
    <div class="comments-section">
        <div class="comments-submission-container">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/person-placeholder.svg" alt="placeholder" />
            <?php
            if (comments_open()) :
                ?>
                <div class="comment-form-flex">
                    <?php twentynineteen_comment_form('asc'); ?>
                    <h2 class="comments-title" aria-hidden="true"><?php _e('Leave a comment', 'twentynineteen'); ?></h2>
                </div>
            <?php
            endif;

            // If comments are closed and there are comments, let's leave a little note, shall we?
            if (!comments_open()) :
                ?>
                <p class="no-comments">
                    <?php _e('Comments are closed.', 'twentynineteen'); ?>
                </p>
            <?php
            endif;

            ?>
            <!-- <input type="text" class="comment-input" placeholder="Join the discussion...." /> -->
        </div>
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open()) {
            comments_template();
        }
        ?>

    </div>

</section>
<?php
get_footer();
?>