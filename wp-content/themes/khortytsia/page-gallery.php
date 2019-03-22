<?php
/*
Template Name: Gallery
Template Post Type: page
*/
get_header();
?>

    <section class="main_desk_section main_desk_other_section main_desk_other_filter_section"
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
                                    <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><?= __('Головна'); ?></a>
                                    </li>
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

            <div class="row">
                <?php $gal_filter = new WP_Query([
                        'post_type' => 'galery'
                ]);
                if($gal_filter):?>
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <form class="main_desk_filter from_bottom_interval" method="get">
                                <?php if ($gal_filter->have_posts()) : ?>
                                    <ul class="filter_list">
                                        <?php while ($gal_filter->have_posts()) : $gal_filter->the_post(); ?>
                                            <li>
                                                <input id="filter-<?= slugify(the_title()); ?>"
                                                       name="filter[]" type="checkbox"
                                                       value="<?php the_title(); ?>">
                                                <label for="filter-<?= slugify(the_title()); ?>">
                                                    <?php the_title(); ?>
                                                </label>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </form>
                        </div>

                    </div>
                </div>
                <?php
                endif;
                wp_reset_postdata(); ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-outline-info">
                        <svg width="20" height="20">
                            <use xlink:href="#basket-icon"></use>
                        </svg>
                        <?= __('Очистити фільтри'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- galery section -->

    <section class="mt_section page_news_section">
        <div class="container-fluid">
            <?php $galery = new WP_Query([
                'post_type' => 'galery'
            ]);
            if ($galery->have_posts()):
                $count = 0;
                ?>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <a href="#" data-toggle="modal" data-target="#slider_modal">
                            <div class="galery_masonry">

                                <?php while ($galery->have_posts()): $galery->the_post();
                                    $images = get_field('galery_gallery');
                                    if ($images):
                                        foreach ($images as $image): $count++ ?>

                                            <div class="galery_masonry_item" data-indexImg="<?= $count ?>">
                                                <img class="lozad" src="<?= $image['url']; ?>" alt="">
                                            </div>

                                        <?php endforeach;
                                    endif;
                                endwhile; ?>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endif;
            wp_reset_postdata(); ?>
    </section>

    <div class="modal fade" id="slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_close">
                    <span data-dismiss="modal">+</span>
                </div>
                <div class="modal_slider_main">

                    <?php while ($galery->have_posts()): $galery->the_post();
                        $images = get_field('galery_gallery');
                        if ($images):
                            foreach ($images as $image): ?>

                                <div class="slider_modal_item">
                                    <div class="slider_modal_item__img"
                                         style="background-image: url(<?= $image['url']; ?>)"></div>
                                    <div class="slider_modal_item__text">
                                        <p><?= $image['description']; ?></p>
                                    </div>
                                </div>

                            <?php endforeach;
                        endif;
                    endwhile; ?>

                </div>

                <div class="slider_arows_wrap">
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

                <div class="slider_modal_counter_line">
                    <div class="slider_title">
                        <div class="slider_title_item">
                            <p><?= __('Опис'); ?></p>
                        </div>
                        <div class="slider_title_item">
                            <p><span id="sliderCounterActive">1</span> / <span class="slider_counter_all">15</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require('template-parts/last-news.php');
get_footer();
