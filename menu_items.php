<?php
/**
* Template Name: Menu List
*/

$args=array(
    'post_type' => 'product',
);

$result = new WP_Query( $args );
?>

<div class="container">
    <div class="row">
        <?php
            if( $result -> have_posts() ){
                while( $result -> have_posts() ) : $result -> the_post(); 
        ?>
                    <div class="col-md-4">
                        <?php the_post_thumbnail(); ?>
                    </div>
        <?php
                endwhile;
            }
        ?>
    </div>
</div>