<?php
    get_header();
?>
    <section class="header-banner">
        <div class="header-title ">
            <h2><?php the_title() ?></h2>
        </div>
    </section>
    <section class="container mt-5 textsection">
        <div class="row">
            <?php
                if (have_posts(  )){
                    while( have_posts(  )){
                        the_post(  );
                        the_content( );
                    }
                }
            ?>
        </div>    
    </section>
<?php
    get_footer();
?>