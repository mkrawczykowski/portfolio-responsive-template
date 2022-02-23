<?php

function custom_enqueue(){
    wp_enqueue_style('customstyle', get_stylesheet_uri(), array(), '1.0.0', 'all' );
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/dist/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_script('customjs', get_template_directory_uri() . '/dist/app.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'custom_enqueue');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

add_image_size( 'quotation-small', 48, 48);
add_image_size( 'header-mobile-2x', 658, 668);
add_image_size( 'header-mobile-1x', 329, 334);
add_image_size( 'header-desktop-2x', 1170, 1168);
add_image_size( 'header-desktop-1x', 585, 584);

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );