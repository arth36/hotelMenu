<?php

include get_template_directory() . '/mp_menu_post_type.php';

function hm_enqueue_styles(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, '1.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'hm_enqueue_styles' );

