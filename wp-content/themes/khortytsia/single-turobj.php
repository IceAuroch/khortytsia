<?php
/*
Template Name: Tourist
Template Post Type: tourist
*/
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        $main_id = $post->ID;
        ?>
        <section class="main_desk_section main_desk_turobj_section"
                 style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
            <div class="desktop_gradient"></div>
            <div class="desktop_gradient desktop_gradient2"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-xl-4 from_right">
                        <div class="main_desk_turobj_wrap">
                            <div class="main_desk_breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="<?= pll_home_url(); ?>">
                                                <?= __('Головна'); ?>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <?= the_title(); ?>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="main_desk_other_title">
                                <h1>
                                    <svg width="30" height="30">
                                        <use xlink:href="<?= get_field('tur_icon', $post->ID); ?>"></use>
                                    </svg>
                                    <?= the_title(); ?>
                                </h1>
                                <div class="main_desk_other_text">
                                    <p><?php the_field('tur_annotation'); ?></p>
                                    <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#form_modal">
                                        <?= __('Замовити екскурсію'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- slider -->

        <section class="slider_section">
            <div class="container-fluid">
                <div class="row">

                    <?php
                    $images = get_field('tur_obj_gallery', $post->ID);
                    if ($images || have_rows('tur_video')): ?>
                        <div class="col-lg-6 col-xl-5 offset-xl-1">
                            <div class="slider_title">
                                <div class="slider_title_item">
                                    <p>Галерея</p>
                                </div>
                                <div class="slider_title_item">
                                    <p><span id="sliderCounterActive">1</span> / <span
                                                class="slider_counter_all">15</span>
                                    </p>
                                </div>
                            </div>
                            <div class="main_slider_wrap">
                                <div class="slider_main">

                                    <?php
                                    if ($images) :
                                        foreach ($images as $image): ?>
                                            <div class="slider_main_item"
                                                 style="background-image: url(<?= $image['url']; ?>);">
                                            </div>
                                        <?php
                                        endforeach;
                                    endif; ?>


                                    <?php
                                    if (have_rows('tur_video')):
                                        while (have_rows('tur_video')) : the_row(); ?>

                                            <div class="slider_main_item">
                                                <iframe src="<?= get_video_embed(get_sub_field('tur_video_link')) ?>"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                            </div>

                                        <?php
                                        endwhile;
                                    endif; ?>

                                </div>
                                <div class="slider_btn slider_btn_prev">
                                    <svg width="7.5" height="12">
                                        <use xlink:href="#left-icon"></use>
                                    </svg>
                                </div>
                                <div class="slider_btn slider_btn_next">
                                    <svg width="7.5" height="12">
                                        <use xlink:href="#right-icon"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="slider_main_for">

                                <?php
                                if ($images) :
                                    foreach ($images as $image): ?>

                                        <div class="slider_main_item_for">
                                            <img src="<?= $image['url']; ?>" alt="">
                                        </div>

                                    <?php
                                    endforeach;
                                endif;
                                ?>


                                <?php
                                if (have_rows('tur_video')):
                                    while (have_rows('tur_video')) : the_row(); ?>

                                        <div class="slider_main_item_for">
                                            <iframe src="<?= get_video_embed(get_sub_field('tur_video_link')); ?>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        </div>

                                    <?php
                                    endwhile;
                                endif; ?>

                            </div>
                        </div>

                    <?php endif;
                    wp_reset_postdata(); ?>

                    <div class="col-lg-5 col-xl-5 offset-xl-1">
                        <div class="map_side_text ">
                            <h2><?= the_title(); ?></h2>
                            <p><?= the_content(); ?></p>
                            <div class="map_side_text_btn">
                                <a href="#" class="btn btn-secondary"><?= __('Відвідування'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map_section_page">
            <div>
                <input type="hidden" name="coorLat" value="<?= get_field('icon_lat', $post->ID); ?>">
                <input type="hidden" name="coorLon" value="<?= get_field('icon_lon', $post->ID); ?>">
                <input type="hidden" name="iconName" value="<?= get_field('tur_id', $post->ID); ?>">
            </div>
            <div id="map"></div>
            <div class="map_scrol"><h4><?= __('Нажмите для увеличения'); ?></h4></div>
        </section>

        <section class="another_tur_objects">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section_title">
                            <h2><?= __('Інші туроб’єкти Хортиці'); ?></h2>
                        </div>

                        <?php $turobj = new WP_Query([
                            'post_type' => 'tourist',
                            'orderby' => 'title',
                            'order' => 'asc',
                        ]);
                        if ($turobj->have_posts()):
                            ?>

                            <div class="another_tur_obj_links">

                                <?php while ($turobj->have_posts()): $turobj->the_post(); ?>


                                    <?php if ($main_id == $post->ID): ?>
                                        <div class="map_side_icon_item map_side_icon_item--main from_bottom">
                                            <div class="item-link" href="<?= the_permalink(); ?>"
                                                 data-selection="<?= get_field('tur_selector', $post->ID); ?>">
                                                <svg width="30" height="30">
                                                    <use xlink:href="<?= get_field('tur_icon', $post->ID); ?>"></use>
                                                </svg>
                                                <?= the_title(); ?>
                                            </div>
                                        </div>
                                    <?php else : ?>

                                        <div class="map_side_icon_item from_bottom">
                                            <a href="<?= the_permalink(); ?>"
                                               data-selection="<?= get_field('tur_selector', $post->ID); ?>">
                                                <svg width="30" height="30">
                                                    <use xlink:href="<?= get_field('tur_icon', $post->ID); ?>"></use>
                                                </svg>
                                                <?= the_title(); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                <?php endwhile; ?>

                            </div>

                        <?php endif;
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
            </div>
        </section>

    <?php

    endwhile;
endif;
require('template-parts/order-excursion.php');
require('template-parts/last-news.php');

get_footer();