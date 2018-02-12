<?php get_template_part('view/header', 'header'); ?>
<div class="main-content">
    <div class="row">
    <div class="col-md-1 blank-left"></div>
    <div class="col-md-10 main-content">
    <!-- BANNER TOP -->
        <div class="row banner-top"></div>
    <!-- MAIN CAROUSEL -->
        <div class="row main-carousel">
            <?php get_template_part('controller/loop', 'carousel'); ?>
        </div>
    <!-- FIRST POST CATEGORY -->
        <div class="row first-category">
            <p>First</p>
            <?php get_template_part('controller/loop', 'news'); ?>
        </div>
    <!-- SECOND POST CATEGORY -->
        <div class="row second-category">
            <p>Second</p>
            <?php get_template_part('controller/loop', 'sport'); ?>
        </div>
    <!-- BANNER MIDDLE -->
        <div class="row banner-mid"></div>
    <!-- THIRD POST CATEGORY -->
        <div class="row third-category">
            <p>Third</p>
            <?php get_template_part('controller/loop', 'business'); ?>
        </div>
    <!-- CAROUSELS -->
        <p>Carousel</p>
        <div class="row carousel">
            <div class="row carousel-wide">
                <p>Carousel Wide</p>
                <?php get_template_part('controller/loop', 'carousel-wide'); ?>
            </div>
            <div class="row carousel-container">
                <div class="col-md-6 carousel-single">
                    <p>Carousel Small</p>
                    <?php get_template_part('controller/loop', 'carousel-small'); ?>
                </div>
                <div class="col-md-6 carousel-single">
                    <p>Carousel Small</p>
                    <?php get_template_part('controller/loop', 'carousel-small'); ?>
                </div>
            </div>
        </div>
    <!-- SIDEBAR -->
        <div class=sidebar-container">
            <?php get_template_part('controller/_sidebar', 'sidebar'); ?>
        </div>
        <div class="col-md-1 blank-right"></div>
    </div>
    </div>
</div>


<div class="row">
    <?php get_template_part('view/footer', 'footer'); ?>
</div>