<?php
get_header();
?>

    <section id="page-search">
        <div class="secondary-intro"
             style="background-image:url(<?php echo get_theme_file_uri('images/default-banner.jpg');?>"></div>
        <div class="secondary-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-description text-center">
                        <h2 class="title"><?= __('Поиск по'); ?>: “<span><?php echo $_GET['s']; ?></span>”</h2>
                    </div>
                    <div class="text-center">
                        <?php if (!have_posts()): ?>
                            <p class="mt-4 mb-3"><?= __('Поиск не дал результатов.'); ?></p>
                            <a href="<?= site_url()?>" class="btn btn-primary"><?= __('На Головну');?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); $content = get_the_content()?>
                <div class="row search-row">
                    <div class="col-lg-6">
                        <?php if(get_the_post_thumbnail_url($post->ID)):?>
                            <div class="search-item-img"
                                 style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');"></div>
                        <?php else: ?>
                            <div class="search-item-img"
                                 style="background-image: url(<?php echo get_theme_file_uri('images/default-images.jpg');?>"></div>
                        <?php endif; ?>

                    </div>
                    <div class="col-lg-6">
                        <a href="<?= the_permalink()?>" class="search-item">
                            <h4 class="search-item__title">
                                <?= the_title(); ?>
                            </h4>
                            <p class="search-item__description">
                                <?= wp_trim_words($content, 30, '...');?>
                            </p>
                            <div class="link-more"><?= __('Більше інформації'); ?></div>
                        </a>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>

<?php
get_footer(); ?>