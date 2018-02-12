<div id="carousel-top" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-top" data-slide-to="1"></li>
        <li data-target="#carousel-top" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php $carousel = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); ?>
        <?php $count = 0; ?>
        <?php foreach($carousel as $slide): ?>
            <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/>
            </div>
            <?php $count++; ?>
        <?php endforeach; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-top" role="button" data-slide="prev">
        <span class="arrow-left-big" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-top" role="button" data-slide="next">
        <span class="arrow-right-big" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>