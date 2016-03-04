<?php

    function style_resources() {

        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style( 'font-style');
    }

add_action('wp_enqueue_scripts', 'style_resources');

// Navigation menu

function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu'),
            'nav-link' => __('Footer nav link'),
            'footer-nav' => __('Footer nav')
        )
    );
}
add_action( 'init', 'register_my_menus' );

// Add thumbnails
add_theme_support('post-thumbnails');
