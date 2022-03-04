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



add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
	
add_theme_support( 'post-thumbnails' );

function portfolio_cpt() {

	$labels = array(
		'name'                  => 'Portfolio items',
		'singular_name'         => 'Portfolio item',
		'menu_name'             => 'Portfolio',
		'name_admin_bar'        => 'Portfolio',
		'archives'              => 'Portfolio Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Portfolio Item',
		'add_new'               => 'Add New Item',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Portfolio item',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_cpt', 0 );