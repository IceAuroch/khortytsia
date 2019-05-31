<?php
if (pll_current_language('slug') == 'en') $id = '369';
elseif (pll_current_language('slug') == 'ru') $id = '278';
else $id = '379';
?>
<section class="map_section orenge_line">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-xl-4 offset-xl-1">
                <div class="map_side_text from_bottom">
                    <h2><?= get_field('main_map_title', $id); ?></h2>
                    <p><?= get_field('main_map_description', $id); ?></p>
                </div>
                <div class="map_side_icon_wrap">
                    <div class="map_side_icon_title">
                        <span><?= __('Умовні позначки'); ?></span>
                    </div>
                    <?php $turobj = new WP_Query([
                        'post_type' => 'tourist',
                        'orderby' => 'date',
                        'order' => 'asc'
                    ]);
                    if ($turobj->have_posts()):
                        ?>
                        <div class="map_side_icon_item_wrap">

                            <?php while ($turobj->have_posts()): $turobj->the_post(); ?>

                                <div class="map_side_icon_item">
                                    <a id="<?= get_field('tur_id', $post->ID); ?>"
                                       data-selection-id="<?= get_field('tur_id', $post->ID); ?>"
                                       href="<?= the_permalink(); ?>"
                                       class="map_icon from_bottom"
                                       data-imgtext="<?= the_title(); ?>"
                                       data-selection="<?= get_field('tur_selector', $post->ID); ?>-map">
                                        <svg width="30" height="30">
                                            <use xlink:href="<?= get_field('tur_icon', $post->ID); ?>"></use>
                                        </svg>
                                        <?= the_title(); ?>
                                    </a>
                                </div>

                            <?php endwhile; ?>

                        </div>

                    <?php endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <div class="col-lg-6">
                <?php $turobj = new WP_Query([
                    'post_type' => 'tourist',
                    'orderby' => 'date',
                    'order' => 'asc'
                ]);
                if ($turobj->have_posts()):
                    ?>
                    <div class="map_img">

                        <img src="<?= get_theme_file_uri('images/map.jpg'); ?>" alt="">

                        <?php while ($turobj->have_posts()): $turobj->the_post(); ?>

                            <a id="<?= get_field('tur_id', $post->ID); ?>-map"
                               class="map_icon from_bottom"
                               data-selection="<?= get_field('tur_id', $post->ID); ?>"
                               data-selection-id="<?= get_field('tur_id', $post->ID); ?>-map"
                               data-imgtext="<?= the_title(); ?>"
                               href="<?= the_permalink(); ?>">
                                <svg width="30" height="30">
                                    <use xlink:href="<?= get_field('tur_icon', $post->ID); ?>"></use>
                                </svg>
                            </a>

                        <?php endwhile; ?>

                        <a id="stones-map" data-selection="stones" data-imgtext="<?= __('Святилища'); ?>"
                           href="http://khortytsia.loc/tourist/svjatilishhe/"
                           class="map_icon from_bottom stones-map-second"
                           data-selection-id="stones-map"
                           data-sr-id="19">
                            <svg width="30" height="30">
                                <use xlink:href="#stone-icon"></use>
                            </svg>
                        </a>

                        <a id="threes-map" data-selection="threes" data-imgtext="<?= __('Паркові зони'); ?>"
                           href="http://khortytsia.loc/tourist/dendropark/"
                           data-selection-id="threes-map"
                           class="map_icon from_bottom threes-map-second">
                            <svg width="30" height="30">
                                <use xlink:href="#tree-icon"></use>
                            </svg>
                        </a>

                        <a id="giralda-map" data-selection="giralda data-imgtext="<?= __('Козацькі виступи'); ?>"
                           href="http://khortytsia.loc/tourist/kamenskaja-sech/"
                           data-selection-id="giralda-map"
                           class="map_icon from_bottom giralda-map-second">
                            <svg width="30" height="30">
                                <use xlink:href="#mayak-icon"></use>
                            </svg>
                        </a>

                        <div class="descrip_map"></div>

                        <div class="img_for_mob">
                            <img src="<?= get_theme_file_uri('images/mob_map_main.jpg'); ?>" alt="">
                        </div>

                    </div>

                <?php endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>