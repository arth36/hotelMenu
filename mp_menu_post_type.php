<?php
function menu_post_type(){
    $labels = array(
        'name' => 'Menu',
        'singular_name' => 'Menu',
        'add_new' => 'Add Item',
        'all_times' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Seach Item',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items Found In Trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_true' => 'post',
        'hierarchical' => false,
        'support' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type( 'menu', $args);
}
add_action( 'init', 'menu_post_type');

function mp_menu_meta_box(){
    add_meta_box( "mp-meta-id", "Menu Details", "mp_details_call", "menu", "side", "high" );
}
add_action( "add_meta_boxes", "mp_menu_meta_box" );

function mp_details_call(){
    ?>
    <p>
        <label>Price:</label>
        <input type="text" name="txtPrice" placeholder="Price"/>
    </p>
    <?php
}