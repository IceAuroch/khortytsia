<section class="map_section orenge_line">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="map_side_text">
                    <h2>Схематичне <br> зображення на мапі</h2>
                    <p>Заповідник «Хортиця» має сталий імідж «колиски» запорозького козацтва. А об’єднання загальних зусиль дозволить закріпити на загальнодержавному рівні за островом Хортиця статусу історико-культурного національного символу та створити найпопулярніший центр міжнародного туризму.</p>
                    <p> Люди з усіх куточків країни, з ближнього і дальнього зарубіжжя прагнуть приїхати на Хортицю і наше завдання допомогти їм це зробити, а головне зберегти острів для нащадків.</p>
                </div>
                <div class="map_side_icon_wrap">
                    <div class="map_side_icon_title">
                        <span><?= __('Умовні позначки'); ?></span>
                    </div>
                    <?php $turobj = new WP_Query([
                        'post_type' => 'tourist',
                        'orderby' => 'id',
                        'order' => 'asc'
                    ]);
                    if($turobj->have_posts()):
                    ?>
                    <div class="map_side_icon_item_wrap">

                        <?php while($turobj->have_posts()): $turobj->the_post(); ?>

                        <div class="map_side_icon_item">
                            <a id="<?= get_field('tur_id', $post_id->ID); ?>"
                               href="<?= the_permalink(); ?>" class="map_icon"
                               data-imgtext="<?= the_title(); ?>
                               data-selection="<?= get_field('tur_selector', $post_id->ID); ?>">
                                <svg width="30" height="30">
                                    <use xlink:href="<?= get_field('tur_icon', $post_id->ID); ?>"></use>
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
                    'orderby' => 'id',
                    'order' => 'asc'
                ]);
                if($turobj->have_posts()):
                ?>
                <div class="map_img">

                    <img src="<?= get_theme_file_uri('images/map.jpg'); ?>" alt="">

                    <?php while($turobj->have_posts()): $turobj->the_post(); ?>

                    <a id="<?= get_field('tur_id', $post_id->ID); ?>" class="map_icon"
                       data-selection="<?= get_field('tur_selector', $post_id->ID); ?>"
                       data-imgtext="<?= the_title(); ?>"
                       href="<?= the_permalink(); ?>">
                        <svg width="30" height="30">
                            <use xlink:href="<?= get_field('tur_icon', $post_id->ID); ?>"></use>
                        </svg>
                    </a>

                    <?php endwhile; ?>

                </div>

                <?php endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>