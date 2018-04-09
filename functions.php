<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_scripts' ) ):
    function chld_thm_cfg_parent_scripts() {
        wp_enqueue_style( 
            'chld_thm_cfg_parent', 
            trailingslashit( get_template_directory_uri() ) . 'style.css', 
            array( 'bootstrap','font-awesome','flexslider' ) 
        );
        
        wp_enqueue_style( 
            'custom_styles', 
            get_stylesheet_directory_uri() . '/public/style.css', 
            array(), 
            '1.0.0', 
            'all' 
        );
        
        wp_enqueue_script( 
            'custom_bundled_scripts', 
            get_stylesheet_directory_uri() . '/public/bundle.js', 
            array(), 
            '1.0.0', 
            true 
        );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_scripts', 10 );

// END ENQUEUE PARENT ACTION
