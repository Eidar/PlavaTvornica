<?php

$settings = array(
    'post_type' => 'Business',
    'posts_per_page' => 4
);

$loop = new WP_Query( $settings );
if( $loop->have_posts() ): ?>

    <div class="business-title">
        <h1 class="archive-title"><?php single_cat_title('', false); ?></h1>
    </div>
    <?php
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div id="post">
            <div class="row thumbnail-img"><?php the_post_thumbnail('image-small'); ?></div>
            <div class="row info">
                <div class="col-md-12 post-info">
                    <small class="col-md-6 post-date">
                        <?php the_time( 'F j, Y' ); ?>
                    </small>
                    <small class="col-md-6 post-comments">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/comment.png"/>
                        <?php get_comments_number() ?>
                    </small>
                    <h2 class="post-title"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
<?php
endwhile;
endif;
wp_reset_postdata();
?>