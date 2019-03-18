<?php
/*
Template Name: Single post
Template Post Type: page
*/
get_header();
?>

    <section class="main_desk_section main_desk_other_section"
             style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
        <div class="desktop_gradient"></div>
        <div class="desktop_gradient desktop_gradient2"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="main_desk_other_wrap">
                        <div class="main_desk_breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= pll_home_url(); ?>">Головна</a></li>
                                    <li class="breadcrumb-item"><a href="#">Про Хортицю</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Партнери</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="main_desk_other_title">
                            <h1>
                                Партнери
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
                                if ($images): ?>

                                    <div class="main_slider_wrap">
                                        <div class="slider_main">

                                            <?php foreach ($images as $image): ?>
                                                <div class="slider_main_item"
                                                     style="background-image: url(<?= $image['url']; ?>);">
                                                </div>
                                            <?php endforeach; ?>

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

                                    <?php foreach ($images as $image): ?>
                                    <div class="slider_main_item_for">
                                        <img src="<?= $image['url']; ?>" alt="">
                                    </div>
                                    <?php endforeach; ?>

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
                                        <a href="#" class="btn btn-secondary">Відвідування</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="one_partner_map">
                                    <div id="map"></div>
                                    <div class="map_scrol"><h4>Нажмите для увеличения</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php

get_footer();

