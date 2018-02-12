<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kenaz</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(array('kenaz-body')); ?>>

    <div class="nav-container">
        <div class="row main-nav">
                <div class="col-md-3 logo"></div>
                <div class="col-md-3 brand"></div>
                <div class="col-md-6 pages">
                <?php wp_nav_menu(array(
                    'theme_location'=>'main',
                    'container_class'=>'main-navigation',
                    'menu_class'=> 'nav nav-main'
                )); ?>
                </div>

        </div>

        <div class="row secondary-nav">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <?php wp_nav_menu(array(
                    'theme_location'=>'secondary',
                    'container_class'=>'secondary-navigation',
                    'menu_class'=> 'nav nav-secondary'
                )); ?>
                </div>
        </div>
    </ div>