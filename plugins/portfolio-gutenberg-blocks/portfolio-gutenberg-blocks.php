<?php
/**
 * @package Portfolio Gutenberg Blocks
 */
/*
 
Plugin Name: Portfolio Gutenberg Blocks
Text Domain: portfolio-gutenberg-blocks
 
*/

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'logos-list',
            'title'             => __('Logos list'),
            'description'       => __('Block with list of logos'),
            'render_template'   => plugin_dir_path(__FILE__) . 'blocks/logos-list/logos-list.php',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) .  '/blocks/logos-list/dist/main.css',
        ));
    }
}