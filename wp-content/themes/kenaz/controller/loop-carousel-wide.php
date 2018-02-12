<div id="carousel-wide" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-wide" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-wide" data-slide-to="1"></li>
        <li data-target="#carousel-wide" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php $carousel = get_posts(array('post_type' => 'slider', 'posts_per_page' => 2)); ?>
        <?php $count = 0; ?>
        <?php foreach($carousel as $slide): ?>
            <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/>
                <div class="row info">
                    <div class="col-md-12 post-info">
                        <div class="col-md-6 post-date">
                            <small><?php the_time( 'F j, Y' ); ?></small>
                        </div>
                        <div class="col-md-6 post-comments">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/comment.png"/>
                            <small><?php get_comments_number() ?></small>
                        </div>
                        <h2 class="post-title"><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
            <?php $count++; ?>
        <?php endforeach; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-wide" role="button" data-slide="prev">
        <span class="arrow-left-big" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-wide" role="button" data-slide="next">
        <span class="arrow-right-big" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>