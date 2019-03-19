<footer class="footer_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="row">
                    <div class="col-md-4 col-xl-2">
                        <div class="footer_logo">
                            <a href="<?= pll_home_url(); ?>">
                                <img src="<?= get_theme_file_uri('images/logo.png'); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">

                        <?php $args = array(
                            'menu'           => 'Footer',
                            'container'      => false,
                            'echo'           => true,
                            'items_wrap'     => '<ul class="footer_list">%3$s</ul>',
                            'add_li_class'   => ''
                        );

                        wp_nav_menu($args);
                        ?>

                    </div>

                    <?php $turobj = new WP_Query([
                        'post_type' => 'tourist',
                        'orderby' => 'id',
                        'order' => 'asc'
                    ]);
                    if($turobj->have_posts()):
                    ?>

                    <div class="col-md-4 col-xl-2">
                        <ul class="footer_list">

                            <?php while($turobj->have_posts()): $turobj->the_post(); ?>
                                <li><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></li>
                            <?php endwhile; ?>

                        </ul>
                    </div>

                    <?php endif;
                    wp_reset_postdata();
                    ?>

                    <div class="col">
                        <div class="footer_time_work">
                            <div class="footer_time_work_col">
                                <span><?= __('Режим роботи'); ?>:</span>
                            </div>
                            <div class="footer_time_work_col">
                                <p><?= get_post_meta(280, 'operation_modes', true); ?></p>
                            </div>
                        </div>
                        <div class="footer_time_work">
                            <div class="footer_time_work_col">
                                <span><?= __('Контактні телефони'); ?>:</span>
                            </div>
                            <div class="footer_time_work_col">
                                <a href="tel: <?= get_theme_mod('phone1'); ?>"> <?= get_theme_mod('phone1'); ?></a>
                                <a href="tel: <?= get_theme_mod('phone2'); ?>"> <?= get_theme_mod('phone2'); ?></a>
                            </div>
                        </div>
                        <div class="footer_time_work">
                            <div class="footer_time_work_col">
                                <span>Email:</span>
                            </div>
                            <div class="footer_time_work_col">
                                <a href="mailto:<?= get_theme_mod('email'); ?>"><?= get_theme_mod('email'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_develop_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="footer_dev_wrap">
                        <div class="footer_dev_item order-lg-2">
                            <a href="<?= get_theme_mod('facebook'); ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#fb-icon"></use>
                                </svg>
                            </a>
                            <a href="<?= get_theme_mod('instagram'); ?>">
                                <svg width="19" height="20">
                                    <use xlink:href="#insta-icon"></use>
                                </svg>
                            </a>
                            <a href="<?= get_theme_mod('youtube'); ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#yt-icon"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="footer_dev_item order-lg-1">
                            <p><?= date('Y'); ?> © <?= __('Усі права захищені'); ?></p>
                        </div>

                        <div class="footer_dev_item order-lg-3">
                            <p><?= __('Веб-розробка'); ?> <a href="https://impressionbureau.pro">ImpressionBureau</a>2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>