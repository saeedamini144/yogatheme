<?php
get_header();
?>
<section class="header-banner">
    <div class="header-title ">
        <h2><?php the_archive_title() ?></h2>
        <!-- <p><?php the_time('F j, Y'); ?></p> -->
    </div>
</section>
<section class="bg-light p-5">
    <div class="container mt-5 textsection ">
        <div class="row">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    // the_content();
                    get_template_part('template-part/content', 'archive');
                }
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>