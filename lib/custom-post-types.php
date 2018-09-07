<?php 
function products() {
    $labels = array(
        'name' => _x('Products', 'post type general name'),
        'singular_name' => _x('Product', 'post type singular name'),
        'add_new' => _x('Add New', 'Product'),
        'add_new_item' => __('Add New Product'),
        'edit_item' => __('Edit Product'),
        'new_item' => __('New Product'),
        'view_item' => __('View Product'),
        'search_items' => __('Search Products'),
        'not_found' => __('No Products found'),
        'not_found_in_trash' => __('No Products found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => false,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('product', $args);
}
add_action('init', 'products', 0);
function product_range() {
    $labels = array(
        'name' => _x('Product Range', 'Taxonomy General Name'),
        'singular_name' => _x('Product Range', 'Taxonomy Singular Name'),
        'menu_name' => __('Product Range'),
        'all_items' => __('All Product Ranges'),
        'parent_item' => __('Parent Product Range'),
        'parent_item_colon' => __('Parent Product Range:'),
        'new_item_name' => __('New Product Range'),
        'add_new_item' => __('Add New Product Range'),
        'edit_item' => __('Edit Product Range'),
        'update_item' => __('Update Product Range'),
        'separate_items_with_commas' => __('Separate Product Range with commas'),
        'search_items' => __('Search Product Range'),
        'add_or_remove_items' => __('Add or remove Product Range'),
        'choose_from_most_used' => __('Choose from the most used Product Range'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => false,
        'has_archive' => true
    );
        register_taxonomy('product-range', 'product', $args);

}

add_action('init', 'product_range', 0);

function product_type() {
    $labels = array(
        'name' => _x('Product Type', 'Taxonomy General Name'),
        'singular_name' => _x('Product Type', 'Taxonomy Singular Name'),
        'menu_name' => __('Product Type'),
        'all_items' => __('All Product Types'),
        'parent_item' => __('Parent Product Type'),
        'parent_item_colon' => __('Parent Product Type:'),
        'new_item_name' => __('New Product Type'),
        'add_new_item' => __('Add New Product Type'),
        'edit_item' => __('Edit Product Type'),
        'update_item' => __('Update Product Type'),
        'separate_items_with_commas' => __('Separate Product Type with commas'),
        'search_items' => __('Search Product Type'),
        'add_or_remove_items' => __('Add or remove Product Type'),
        'choose_from_most_used' => __('Choose from the most used Product Type'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => false,
        'has_archive' => true,
    );
        register_taxonomy('product-type', 'product', $args);

}

add_action('init', 'product_type', 0);
