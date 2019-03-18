<?php
$news = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'novini',
    'posts_per_page' => 3
]);
if ($news->have_posts()): ?>

    <section class="last_news_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="btn_title">
                        <h2><?= __('Останні новини'); ?></h2>
                        <a href="<?= the_permalink(284); ?>" class="btn btn-primary d-flex align-items-center">
                           <?= __('Всі новини'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">

                        <?php while ($news->have_posts()) : $news->the_post(); ?>

                            <div class="col-lg-4">
                                <div class="last_news_item">
                                    <div class="last_news_item_img"
                                         style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
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
                </div>
            </div>
        </div>
    </section>

<?php endif;
wp_reset_postdata(); ?>