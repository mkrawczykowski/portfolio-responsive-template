<?php

function custom_enqueue(){
    wp_enqueue_style('themestyle', get_stylesheet_uri(), array(), '1.0.0', 'all' );
    wp_enqueue_style('mainstyles', get_template_directory_uri() . '/dist/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/dist/app.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'custom_enqueue');


function wpdocs_selectively_enqueue_admin_script( $hook ) {
    if ( 'post.php' != $hook ) {
        return;
    }
    wp_enqueue_script( 'mainstyles-admin', get_template_directory_uri() . '/dist/main.css', array(), '1.0.0', false );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );


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

// add_action('acf/init', 'my_acf_init_block_types');
// function my_acf_init_block_types() {

//     // Check function exists.
//     if( function_exists('acf_register_block_type') ) {

//         // register a testimonial block.
//         acf_register_block_type(array(
//             'name'              => 'logos-list',
//             'title'             => __('Logos list'),
//             'description'       => __('Block with list of logos'),
//             'render_template'   => 'blocks/logos-list/logos-list.php',
//             'category'          => 'formatting',
//             'icon'              => 'admin-comments',
//             'keywords'          => array( 'testimonial', 'quote' ),
//         ));
//     }
// }