<?php
/*
Template Name: Partners
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
<section class="mt_section page_news_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">

                    <?php
                    $partners = new WP_Query([
                        'post_type' => 'partners',
                        'orderby' => 'id',
                        'order' => 'asc'
                    ]);
                    if ($partners->have_posts()):
                     while ($partners->have_posts()): $partners->the_post(); ?>

                    <div class="col-sm-6 col-lg-4 from_bottom_interval">
                        <div class="page_partners_item">
                            <a href="<?= the_permalink(); ?>">
                                <div class="last_news_item">
                                    <div class="partners_img"
                                         style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
                                    </div>
                                </div>
                                <div class="partner_title">
                                    <h4><?= the_title(); ?></h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
require('template-parts/last-news.php');
get_footer();