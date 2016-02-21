<?php

    function style_resources() {

        wp_enqueue_style('style', get_stylesheet_uri());
        wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Lato:400,700');
        wp_enqueue_style( 'font-style');
    }

add_action('wp_enqueue_scripts', 'style_resources');

// Navigation menu

register_nav_menu(array(
    'primary' => __( 'Primary Menu'),
));

//add widget locations
function widgetLoc () {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar'
    ));
}
add_action('widgets_init', 'widgetLoc');