<?php

function tourist_post_type()
{
    $labels = [
        'name' => _x('Тур обьект', 'Post Type General Name', 'khortytsia'),
        'singular_name' => _x('Тур обьект', 'Post Type Singular Name', 'khortytsia'),
        'menu_name' => __('Тур обьекты', 'khortytsia'),
        'name_admin_bar' => __('Тур обьекты', 'khortytsia'),
        'all_items' => __('Все тур обьекты', 'khortytsia'),
        'add_new_item' => __('Добавить тур обьект', 'khortytsia'),
        'add_new' => __('Добавить тур обьект', 'khortytsia'),
        'new_item' => __('Новый тур обьект', 'khortytsia'),
        'edit_item' => __('Редактировать тур обьект', 'khortytsia'),
        'update_item' => __('Обновить тур обьект', 'khortytsia'),
        'view_item' => __('Показать', 'khortytsia'),
        'view_items' => __('Показать все', 'khortytsia'),
        'search_items' => __('Поискт тур обьекта', 'khortytsia'),
    ];
    $args = [
        'label' => __('Тур обьект', 'khortytsia'),
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