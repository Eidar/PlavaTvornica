<?php
$settings = array(
    'type' => 'post',
    'posts_per_page' => 3,
    'cat' => 4
);
$category = new WP_Query($settings);
if( $category->have_posts() ):
    while( $category->have_posts() ): $category->the_post(); ?>
        <section id="post">
            <section class="thumbnail"><?php the_post_thumbnail('image-normal'); ?></section>
            <section class="info">
                <section class="post-info">
                    <small class="col-md-6 post-date">
                        <?php the_time( 'F j, Y' ); ?>
                    </small>
                    <small class="col-md-6 post-comments">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/comment.png"/>
                        <?php get_comments_number() ?>
                    </small>
                </section>
                <section class="post-title"><h5><?php the_title(); ?></h5></section>
            </section>
        </section>
    <?php
    endwhile;
endif;
wp_reset_postdata();
?>

