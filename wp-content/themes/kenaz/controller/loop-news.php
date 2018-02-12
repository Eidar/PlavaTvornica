<?php
$settings = array(
    'type' => 'post',
    'posts_per_page' => 3,
    'cat' => 4
);
$category = new WP_Query($settings);
if( $category->have_posts() ):
    while( $category->have_posts() ): $category->the_post(); ?>
        <div id="post">
            <div class="row thumbnail-img"><?php the_post_thumbnail(); ?></div>
            <div class="row info">
                <div class="col-md-4 post-info">
                    <small class="col-md-6 post-date">
                        <?php the_time( 'F j, Y' ); ?>
                    </small>
                    <small class="col-md-6 post-comments">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/comment.png"/>
                        <?php get_comments_number() ?>
                    </small>
                    <h5 class="post-title"><?php the_title(); ?></h5>
                </div>
            </div>
        </div>
    <?php
    endwhile;
endif;
wp_reset_postdata();
?>

