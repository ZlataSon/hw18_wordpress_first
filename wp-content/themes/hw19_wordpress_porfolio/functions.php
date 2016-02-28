<?php

    function style_resources() {

        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style( 'font-style');
    }

add_action('wp_enqueue_scripts', 'style_resources');

// Navigation menu

register_nav_menu(array(
    'primary' => __( 'Primary Menu'),
    'nav-link' => __('Footer nav link'),
    'footer-nav' => __('Footer nav')
));

// Add thumbnails
add_theme_support('post-thumbnails');
