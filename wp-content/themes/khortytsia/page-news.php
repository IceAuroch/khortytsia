<?php
/*
Template Name: News
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
                                    <li class="breadcrumb-item"><a href="#">Блог</a></li>
                                    <li class="breadcrumb-item active"
                                        aria-current="page"><?= the_title(); ?></li>
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

    <!-- news section -->

    <section class="mt_section page_news_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <?php
                    $news = new WP_Query([
                        'post_type' => 'post',
                        'category_name' => 'новини'
                    ]);
                    if ($news->have_posts()): ?>
                    <div class="row">
                        <?php while ($news->have_posts()) : $news->the_post(); ?>
                        <div class="col-lg-4">
                            <div class="last_news_item from_bottom_interval">
                                <div class="last_news_item_img"
                                     style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                                <div class="last_news_item_content_wrap">
                                    <div class="last_news_item_content">
                                        <span><?= get_the_date('j.m.Y'); ?></span>
                                        <h4><?= the_title(); ?></h4>
                                        <p><?= wp_trim_words(get_the_content(), 30, '...'); ?></p>
                                        <a href="<?= the_permalink(); ?>"><?= __('Читати повністю'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>

                    </div>

                    <?php endif;
                    wp_reset_postdata(); ?>

                </div>
            </div>
            <div class="row ">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary"><?= __('Більше новин'); ?></a>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
