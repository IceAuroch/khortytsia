<?php

function tourist_post_type()
{
    $labels = [
        'name' => _x('Tourist', 'Post Type General Name', 'khortytsia'),
        'singular_name' => _x('Tourist', 'Post Type Singular Name', 'khortytsia'),
        'menu_name' => __('Tourists', 'khortytsia'),
        'name_admin_bar' => __('Tourists', 'khortytsia'),
        'all_items' => __('All tourists', 'khortytsia'),
        'add_new_item' => __('Add  tourist', 'khortytsia'),
        'add_new' => __('Add tourist', 'khortytsia'),
        'new_item' => __('New tourist', 'khortytsia'),
        'edit_item' => __('Edit tourist', 'khortytsia'),
        'update_item' => __('Update tourist', 'khortytsia'),
        'view_item' => __('View', 'khortytsia'),
        'view_items' => __('View all', 'khortytsia'),
        'search_items' => __('Search tourist', 'khortytsia'),
    ];
    $args = [
        'label' => __('Tourist', 'khortytsia'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => [],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-location-alt',
    ];
    register_post_type('tourist', $args);
}
add_action('init', 'tourist_post_type', 0);