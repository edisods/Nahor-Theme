<?php 

require(dirname(__FILE__) . '/includes/carbonfields.php' );

add_action( 'wp_enqueue_scripts', function() {
    // connecting styles and scripts
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), time() );
    wp_enqueue_script('jquery');
    wp_enqueue_script('scrollex', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('skel', get_stylesheet_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'), null, true);
    wp_enqueue_script('scroutilllex', get_stylesheet_directory_uri() . '/assets/js/skel.min.js', array('jquery'), null, true );
    wp_enqueue_script('util', get_stylesheet_directory_uri() . '/assets/js/util.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
});

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

register_nav_menus(
    array(
        'head_menu' => 'head menu',
    )
);


add_image_size('mainpostimage', 600, 300, true);