<?php

include get_template_directory() . '/mp_menu_post_type.php';
include get_template_directory() . '/menu_items.php';

function hm_enqueue_styles(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, '1.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'hm_enqueue_styles' );

function mp_enqueue_scripts() {
    if( is_product() ){
        wp_enqueue_style( 'mp_boot_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
        wp_enqueue_script( 'mp_boot_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery' ), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'mp_enqueue_scripts' );