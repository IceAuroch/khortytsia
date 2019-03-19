<?php
/*
Template Name: Tourist
Template Post Type: tourist
*/
get_header();

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
                                <li class="breadcrumb-item"><a href="<?= pll_home_url(); ?>"><?= __('Головна'); ?></a></li>
                                <li class="breadcrumb-item active"
                                    aria-current="page"><?= the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="main_desk_other_title">
                        <h1>
                            <svg width="30" height="30">
                                <use xlink:href="<?= get_field('tur_icon', $post_id->ID); ?>"></use>
                            </svg>
                            <?= the_title(); ?>
                        </h1>
                        <div class="main_desk_other_text">
                            <p><?= get_post_meta($post->ID, 'tur_annotation', true); ?></p>
                            <a href="#" class="btn btn-secondary"><?= __('Замовити екскурсію'); ?></a>
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
            $images = get_field('tur_obj_gallery', $post_id->ID);
            if ($images): ?>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="slider_title">
                        <div class="slider_title_item">
                            <p>Галерея</p>
                        </div>
                        <div class="slider_title_item">
                            <p><span id="sliderCounterActive">1</span> / <span class="slider_counter_all">15</span>
                            </p>
                        </div>
                    </div>
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
                </div>

            <?php endif; wp_reset_postdata(); ?>

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

<section class="another_tur_objects">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title">
                    <h2><?= __('Інші туроб’єкти Хортиці'); ?></h2>
                </div>

                <?php $turobj = new WP_Query([
                    'post_type' => 'tourist',
                    'orderby' => 'id',
                    'order' => 'asc'
                ]);
                if ($turobj->have_posts()):
                    ?>

                    <div class="another_tur_obj_links">

                        <?php while ($turobj->have_posts()): $turobj->the_post(); ?>

                            <div class="map_side_icon_item from_bottom">
                                <a href="<?php echo the_permalink(); ?>" data-selection="bank-map">
                                    <svg width="30" height="30">
                                        <use xlink:href="<?php echo get_field('tur_icon', $post_id->ID); ?>"></use>
                                    </svg>
                                    <?= the_title(); ?>
                                </a>
                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>

<section class="map_section_page">
    <div id="map"></div>
    <div class="map_scrol"><h4><?= __('Нажмите для увеличения'); ?></h4></div>
</section>

<?php
require('template-parts/order-excursion.php');
require('template-parts/last-news.php');

get_footer();