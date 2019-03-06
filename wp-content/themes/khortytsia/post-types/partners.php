<?php

function partners_post_type()
{
    $labels = [
        'name' => _x('Партнер', 'Post Type General Name', 'khortytsia'),
        'singular_name' => _x('Партнер', 'Post Type Singular Name', 'khortytsia'),
        'menu_name' => __('Партнеры', 'khortytsia'),
        'name_admin_bar' => __('Партнеры', 'khortytsia'),
        'all_items' => __('Все партнеры', 'khortytsia'),
        'add_new_item' => __('Добавить партнера', 'khortytsia'),
        'add_new' => __('Добавить партнера', 'khortytsia'),
        'new_item' => __('Новый партнер', 'khortytsia'),
        'edit_item' => __('Редактировать партнера', 'khortytsia'),
        'update_item' => __('Обновить партнера', 'khortytsia'),
        'view_item' => __('Показать', 'khortytsia'),
        'view_items' => __('Показать всех', 'khortytsia'),
        'search_items' => __('Поиск партнера', 'khortytsia'),
    ];
    $args = [
        'label' => __('Партнер', 'khortytsia'),
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
        'menu_icon' => 'dashicons-groups',
    ];
    register_post_type('partners', $args);
}
add_action('init', 'partners_post_type', 0);