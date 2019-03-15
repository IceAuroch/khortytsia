<footer class="footer_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="row">
                    <div class="col-md-4 col-xl-2">
                        <div class="footer_logo">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <ul class="footer_list">
                            <li><a href="#">Про Хортицю</a></li>
                            <li><a href="#">Туристичні об’єкти</a></li>
                            <li><a href="#">Відвідування</a></li>
                            <li><a href="#">Блог</a></li>
                            <li><a href="#">Галерея</a></li>
                            <li><a href="#">Контакти</a></li>
                        </ul>
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
                            <li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>

                    <?php endif;
                    wp_reset_postdata();
                    ?>

                    <div class="col">
                        <div class="footer_time_work">
                            <div class="footer_time_work_col">
                                <span>Режим роботи:</span>
                            </div>
                            <div class="footer_time_work_col">
                                <p>Листопад-березень: з 9:30 до 16:00 (каса працює до 15:00) <br> Квітень-жовтень: з с 9:30 до 16:30 (птн,сб,нд з 9:30 до 18:30)</p>
                            </div>
                        </div>
                        <div class="footer_time_work">
                            <div class="footer_time_work_col">
                                <span>Контактні телефони:</span>
                            </div>
                            <div class="footer_time_work_col">
                                <a href="tel:096 254 12 09">096 254 12 09</a>
                                <a href="tel:096 254 12 09">096 254 12 09</a>
                            </div>
                        </div>
                        <div class="footer_time_work">
                            <div class="footer_time_work_col">
                                <span>Email:</span>
                            </div>
                            <div class="footer_time_work_col">
                                <a href="mailto:<?php echo get_theme_mod('email'); ?>">zapovidnik@ukr.net</a>
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
                            <a href="<?php echo get_theme_mod('facebook'); ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#fb-icon"></use>
                                </svg>
                            </a>
                            <a href="<?php echo get_theme_mod('instagram'); ?>">
                                <svg width="19" height="20">
                                    <use xlink:href="#insta-icon"></use>
                                </svg>
                            </a>
                            <a href="<?php echo get_theme_mod('youtube'); ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#yt-icon"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="footer_dev_item order-lg-1">
                            <p><?php echo date('Y'); ?> © Усі права захищені</p>
                        </div>

                        <div class="footer_dev_item order-lg-3">
                            <p>Веб-розробка <a href="https://impressionbureau.pro">ImpressionBureau</a><?php echo date('Y'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php get_footer(); ?>

</body>

</html>