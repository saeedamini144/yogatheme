<!-- <div class="col-md-2 col-lg-4">
    <div class="card">
        <img class="card-img" src="<?php the_post_thumbnail(array(500, 9999)); ?>">
        <div class="card-img-overlay">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Show More &rarr;</a>
        </div>
    </div>
</div> -->

<div class="col-md-2 col-lg-4">
    <div class="card">
        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
        <div class="card-body">
            <p class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Show More &rarr;</a>
        </div>
    </div>
</div>