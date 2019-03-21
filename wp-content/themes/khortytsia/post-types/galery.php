<?php

function galery_post_type()
{
    $labels = [
        'name' => _x('Галерея', 'Post Type General Name', 'khortytsia'),
        'singular_name' => _x('Галерея', 'Post Type Singular Name', 'khortytsia'),
        'menu_name' => __('Галереи', 'khortytsia'),
        'name_admin_bar' => __('Галереи', 'khortytsia'),
        'all_items' => __('Все галереи', 'khortytsia'),
        'add_new_item' => __('Добавить галерею', 'khortytsia'),
        'add_new' => __('Добавить галерею', 'khortytsia'),
        'new_item' => __('Новая галерея', 'khortytsia'),
        'edit_item' => __('Редактировать галерею', 'khortytsia'),
        'update_item' => __('Обновить галерею', 'khortytsia'),
        'view_item' => __('Показать', 'khortytsia'),
        'view_items' => __('Показать всех', 'khortytsia'),
        'search_items' => __('Поиск галереи', 'khortytsia'),
    ];
    $args = [
        'label' => __('Галерея', 'khortytsia'),
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
        'menu_icon' => 'dashicons-images-alt',
    ];
    register_post_type('galery', $args);
}
add_action('init', 'galery_post_type', 0);