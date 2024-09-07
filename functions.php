<?php
// Funkce pro nastavení šablony
function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    
    // Registrace menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gym-tabletka'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

function nase_enqueue_styles() {
    wp_enqueue_style( 'tailwind-css', get_template_directory_uri() . '/tailwind-output.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'nase_enqueue_styles' );

