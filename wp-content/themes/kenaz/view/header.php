<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kenaz</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(array('kenaz-body')); ?>>

    <main class="main-nav">
        <nav class="nav-wrapper">
        <nav class="logo"><a href="<?php get_home_url(); ?>"> <img src="<?php echo get_bloginfo('template_url') ?>/assets/kenaz-brand.png"></a></nav>
        <nav class="brand"><h1>Kenaz</h1></nav>
        <nav class="search"><img src="<?php echo get_bloginfo('template_url') ?>/assets/search-small.png"></nav>
        <nav class="pages">
        <?php wp_nav_menu(array(
            'theme_location'=>'main',
            'container_class'=>'nav-wrapper-main', //div
            'menu_class'=> 'nav nav-main' //ul
        )); ?>
        </nav>
        </nav>
    </main>
    <main class="secondary-nav">
            <?php wp_nav_menu(array(
                'theme_location'=>'secondary',
                'container_class'=>'nav-wrapper',
                'menu_class'=> 'nav nav-secondary'
            )); ?>
    </main>
