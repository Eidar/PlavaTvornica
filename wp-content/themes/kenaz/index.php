<?php get_template_part('view/header', 'header'); ?>
<main class="main-content">

    <!-- BANNER TOP -->
        <section class="banner-top"><img src="http://via.placeholder.com/940x120"></section>
    <!-- MAIN CAROUSEL -->
        <section class="main-carousel">
            <?php get_template_part('controller/loop', 'carousel'); ?>
        </section>
    <section class="container">
        <section class="article">
    <!-- FIRST POST CATEGORY -->
        <section class="category category-first">
            <?php get_template_part('controller/loop', 'news'); ?>
        </section>
    <!-- SECOND POST CATEGORY -->
        <section class="category category-second">
            <?php get_template_part('controller/loop', 'sport'); ?>
        </section>
    <!-- BANNER MIDDLE -->
        <section class="banner-mid"><img src="http://via.placeholder.com/620x120"></section>
    <!-- THIRD POST CATEGORY -->
        <section class="category category-third">
            <?php get_template_part('controller/loop', 'business'); ?>
        </section>
    <section class="banner-low"><img src="http://via.placeholder.com/620x120"></section>
    <!-- CAROUSELS -->
        <p>Carousel</p>
        <section class="carousel">
            <section class="carousel-wide">
                <p>Carousel Wide</p>
                <?php get_template_part('controller/loop', 'carousel-wide'); ?>
            </section>
            <section class="carousel-small">
                <div class="carousel-single">
                    <p>Carousel Small</p>
                    <?php get_template_part('controller/loop', 'carousel-small'); ?>
                </div>
                <div class="carousel-single">
                    <p>Carousel Small</p>
                    <?php get_template_part('controller/loop', 'carousel-small'); ?>
                </div>
            </section>
        </section>
    </section>
    <!-- SIDEBAR -->
        <aside class=sidebar-container">
            <section class="banner-sidebar"><img src="http://via.placeholder.com/300x120"></section>
            <?php get_template_part('controller/_sidebar', 'sidebar'); ?>
        </aside>
    </section>

</main>


<footer>
    <?php get_template_part('view/footer', 'footer'); ?>
</footer>