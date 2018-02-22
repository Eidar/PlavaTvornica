<?php

/*
	*   ENQUEUE STYLE
*/
function enqueue_style() {
    
    wp_enqueue_style('kenaz', get_template_directory_uri() . '/css/kenaz.css', array(), '1.0.0', 'all');
    wp_enqueue_style('kenaz', get_template_directory_uri() . '/js/kenaz.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'enqueue_style');
/*
    *   THEME SETUP
*/
function kenaz_theme_setup() {

    register_nav_menu('main', 'Main navigation top');
    register_nav_menu('secondary', 'Secondary navigation top');

    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('image-extra-small', 70, 70);
    add_theme_support('image-small', 120, 90);
    add_theme_support('image-normal', 170, 30);
    add_theme_support('image-large', 230, 150);
    add_theme_support('image-wide', 260, 150);
    add_theme_support('image-extra-large', 940, 400);
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}
add_action('init', 'kenaz_theme_setup');
/*
    *   SIDEBAR
*/
function sidebar_setup() {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'main-sidebar',
		'class' => 'main',     //sidebar-main
		'description' => 'Main sidebar',
		'before-widget' => '<aside id="%1s" class="widget %2$s">',
		'after-widget' => '</aside>',
		'before-title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
}
add_action('widgets_init','sidebar_setup');
/*
	*   THEME SUPPORT
*/

/*
     *  CUSTOM POST TYPES
*/

function business_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Businesses', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Business', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Business', 'text_domain' ),
        'name_admin_bar'        => __( 'Business', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Business', 'text_domain' ),
        'description'           => __( 'Business', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Business' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'custom_business', $args );

}
add_action( 'init', 'business_custom_post_type', 0 );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
    $labels = array(
        'name'               => _x( 'Carousels', 'post type general name'),
        'singular_name'      => _x( 'Carousel', 'post type singular name'),
        'menu_name'          => _x( 'Bootstrap Carousel', 'admin menu'),
        'name_admin_bar'     => _x( 'Carousel', 'add new on admin bar'),
        'add_new'            => _x( 'Add New', 'Slide'),
        'add_new_item'       => __( 'Name'),
        'new_item'           => __( 'New Carousel'),
        'edit_item'          => __( 'Edit Carousel'),
        'view_item'          => __( 'View Carousel'),
        'all_items'          => __( 'All Carousels'),
        'featured_image'     => __( 'Featured Image', 'text_domain' ),
        'search_items'       => __( 'Search Carousels'),
        'parent_item_colon'  => __( 'Parent Slide:'),
        'not_found'          => __( 'No Carousels found.'),
        'not_found_in_trash' => __( 'No Carousels found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'menu_icon'	     => 'dashicons-star-half',
        'description'        => __( 'Description.'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail')
    );

    register_post_type( 'carousel', $args );
}
add_action( 'init', 'custom_bootstrap_slider' );
