<?php
/**
* Template Name: Menu List
*/

$args=array(
    'post_type' => 'product',
);

$result = new WP_Query( $args );

if( $result -> have_posts() ){
    while( $result -> have_posts() ) : $result -> the_post(); 
        the_title();
        echo '<br>';
    endwhile;

}