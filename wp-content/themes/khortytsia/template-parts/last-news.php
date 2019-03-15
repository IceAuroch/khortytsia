<?php
$news = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'новини',
    'posts_per_page' => 3
]);
if ($news->have_posts()): ?>

    <section class="last_news_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="btn_title">
                        <h2>Останні новини</h2>
                        <a href="#" class="btn btn-primary d-flex align-items-center">Всі новини</a>
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
                                            <span>20.01.2019</span>
                                            <h4><?php echo the_title(); ?></h4>
                                            <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                                            <a href="<?php echo the_permalink(); ?>">Читати повністю</a>
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