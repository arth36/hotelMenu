<?php

 if( ! function_exists( 'mp_enqueue_scripts') ){
     function mp_enqueue_scripts(){

     }
     add_action( 'wp_enqueue_scripts', 'mp_enqueue_scripts' )
 }