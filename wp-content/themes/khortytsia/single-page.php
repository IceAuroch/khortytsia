<?php
/*
Template Name: Single page
Template Post Type: page
*/
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

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
            <div class="col-lg-8 offset-lg-2">
                <div class="last_news_item">
                    <div class="last_news_item_content_wrap ">
                        <div class="last_news_item_content">
                            <h4><?= the_title(); ?></h4>
                            <p><?= the_content(); ?></p>
                        </div>
                    </div>
                    <div class="last_news_item_ander_content">
                        <p><?= __('Поділитися в соц.мережах'); ?>:</p>
                        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>">
                            <svg width="20" height="20">
                                <use xlink:href="#fb-icon"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="19" height="20">
                                <use xlink:href="#insta-icon"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="20" height="20">
                                <use xlink:href="#yt-icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
endwhile; endif;
wp_reset_postdata();
require('template-parts/last-news.php');
get_footer();
