<?php
/*
Template Name: Partners
Template Post Type: page
*/
get_header();

$partners = new WP_Query([
    'post_type' => 'partners',
    'orderby' => 'id',
    'order' => 'asc'
]);
if ($partners->have_posts()):
?>
<section class="mt_section page_news_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">

                    <?php while ($partners->have_posts()): $partners->the_post(); ?>
                    <div class="col-sm-6 col-lg-4 from_bottom_interval">
                        <div class="page_partners_item">
                            <a href="<?php echo the_permalink(); ?>">
                                <div class="last_news_item">
                                    <div class="partners_img"
                                         style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                                    </div>
                                </div>
                                <div class="partner_title">
                                    <h4><?php echo the_title(); ?></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endwhile;?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
wp_reset_postdata();
require('template-parts/last-news.php');
get_footer();
?>
