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
                            <a id="bank" href="<?= the_permalink(); ?>" class="map_icon" data-selection="bank-map">
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
                <div class="map_img">
                    <img src="<?php echo get_theme_file_uri('images/map.jpg'); ?>" alt="">
                    <a id="bank-map" class="map_icon" data-selection="bank"  href="#">
                        <svg width="30" height="30">
                            <use xlink:href="#bank-icon"></use>
                        </svg>
                    </a>
                    <a id="tree-map" class="map_icon" data-selection="tree" href="#">
                        <svg width="30" height="30">
                            <use xlink:href="#tree-icon"></use>
                        </svg>
                    </a>
                    <a id="river-map" class="map_icon" data-selection="river" href="#">
                        <svg width="30" height="30">
                            <use xlink:href="#river-icon"></use>
                        </svg>
                    </a>
                    <a id="stone-map" class="map_icon" data-selection="stone" href="#">
                        <svg width="29" height="29">
                            <use xlink:href="#stone-icon"></use>
                        </svg>
                    </a>
                    <a id="mayak-map" class="map_icon" data-selection="mayak" href="#">
                        <svg width="30" height="30">
                            <use xlink:href="#mayak-icon"></use>
                        </svg>
                    </a>
                    <a id="tower-map" class="map_icon" data-selection="tower" href="#">
                        <svg width="30" height="30">
                            <use xlink:href="#tower-icon"></use>
                        </svg>
                    </a>
                    <a id="boat-map" class="map_icon" data-selection="boat" href="#">
                        <svg width="30" height="30">
                            <use xlink:href="#boat-icon"></use>
                        </svg>
                    </a>
                    <a id="sich-map" class="map_icon" data-selection="sich" href="#">
                        <svg width="30" height="30">
                            <use xlink:href="#sich-icon"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>