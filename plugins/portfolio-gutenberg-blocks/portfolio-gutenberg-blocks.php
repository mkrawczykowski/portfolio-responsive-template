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
        
        $blocks = array(
            //name, title, description, icon, array of keywords, 
            array('logos-list', 'Logos list', 'Block with list of logos', 'admin-comments', array( 'logos', 'list' ) ),
            array('image-headings-text-button', 'Two columns: image + contents', 'Two columns: with image and with headings + text + button', 'admin-comments', array( 'columns', 'image', 'headings', 'text', 'button' ) ),
            array('portfolio-filtering', 'Portfolio filtering', 'Portfolio items with categories filtering', 'admin-comments', array( 'portfolio', 'filtering' ) ),
        );

        foreach ($blocks as $block){
            acf_register_block_type(array(
                'name'              => $block[0],
                'title'             => __($block[1]),
                'description'       => __($block[2]),
                'render_template'   => plugin_dir_path(__FILE__) . 'blocks/' . $block[0] . '/' . $block[0] . '.php',
                'icon'              => $block[3],
                'keywords'          => $block[4],
                'enqueue_style'     => plugin_dir_url(__FILE__) .  '/blocks/'. $block[0] . '/dist/main.css',
                'enqueue_script'    => plugin_dir_url(__FILE__) .  '/blocks/'. $block[0] . '/dist/app.js',
            ));
        }
    }
}