<?php
/*
Template Name: Single partners
Template Post Type: partners
*/
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>

        <section class="main_desk_section main_desk_other_section"
                 style="background-image: url(<?= get_the_post_thumbnail_url(282); ?>)">
            <div class="desktop_gradient"></div>
            <div class="desktop_gradient desktop_gradient2"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="main_desk_other_wrap">
                            <div class="main_desk_breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a
                                                    href="<?= pll_home_url(); ?>"><?= __('Головна'); ?></a></li>
                                        <li class="breadcrumb-item"><a href="#"><?= __('Партнери'); ?></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?= the_title(); ?></li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="main_desk_other_title">
                                <h1>
                                    <?= the_title(); ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- one partners -->

        <section class="mt_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="one_partner_content">
                            <div class="row">
                                <div class="col-lg-6">

                                    <?php
                                    $images = get_field('partner_gallery');
                                    if ($images || have_rows('partner_video')): ?>

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
                                                endif;
                                                ?>

                                                <?php
                                                if (have_rows('partner_video')):
                                                    while (have_rows('partner_video')) : the_row(); ?>

                                                        <div class="slider_main_item">
                                                            <iframe src="<?= get_video_embed(get_sub_field('partner_video_link')) ?>"
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
                                            if ($images):
                                                foreach ($images as $image): ?>
                                                    <div class="slider_main_item_for">
                                                        <img src="<?= $image['url']; ?>" alt="">
                                                    </div>
                                                <?php
                                                endforeach;
                                            endif; ?>


                                            <?php
                                            if (have_rows('partner_video')):
                                                while (have_rows('partner_video')) : the_row(); ?>

                                                    <div class="slider_main_item_for">
                                                        <iframe src="<?= get_video_embed(get_sub_field('partner_video_link')); ?>"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                    </div>

                                                <?php
                                                endwhile;
                                            endif; ?>

                                        </div>

                                    <?php endif;
                                    wp_reset_postdata();
                                    ?>

                                    <div class="slider_title">
                                        <div class="slider_title_item">
                                        </div>
                                        <div class="slider_title_item">
                                            <p><span id="sliderCounterActive">1</span> / <span
                                                        class="slider_counter_all">15</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="map_side_text  one_partners_text">
                                        <h2><?= the_title(); ?></h2>
                                        <p><?= the_content(); ?></p>
                                        <div class="map_side_text_btn">
                                            <a href="#" class="btn btn-secondary"><?= __('Відвідування'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="row">-->
<!--                                <div class="col">-->
<!--                                    <div class="one_partner_map">-->
<!--                                        <div id="map"></div>-->
<!--                                        <div class="map_scrol"><h4>--><?//= __('Нажмите для увеличения'); ?><!--</h4></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <?php
    endwhile; endif;
wp_reset_postdata();
get_footer();

