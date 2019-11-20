<?php

add_action('wp_enqueue_scripts', 'theme_style');
add_action('wp_footer', 'theme_script');
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu() {
    register_nav_menu('top', 'header menu');
    register_nav_menu('bottom', 'footer menu');
}

function theme_style() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('media', get_template_directory_uri() . '/assets/css/media-queries.css');
}
function theme_script() {
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js');
    // это неправильно - возможны конфликты с родным jQ и плагинами
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('doubletaptogo.js', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');

}

    // window.jQuery || document.write('<script src="/assets/js/jquery-1.10.2.min.js">)';
