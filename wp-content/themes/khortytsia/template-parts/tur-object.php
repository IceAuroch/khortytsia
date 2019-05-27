<section id="tur_objects_section" class="tur_objects_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section_title">
                    <h2><?= __('Туристичні об’єкти'); ?></h2>
                </div>
            </div>
        </div>

        <?php $turobj = new WP_Query([
            'post_type' => 'tourist',
            'orderby' => 'date',
            'order' => 'asc'
        ]);
        $count = 0;
        if($turobj->have_posts()):
        ?>

        <div class="row no-gutters">

            <?php while($turobj->have_posts()): $turobj->the_post();  $count++; ?>

            <div class="col-lg-6">
                <a href="<?= the_permalink(); ?>">
                    <div class="tur_item_wrap from_<?= $count%2==0?'right':'left'; ?>"
                         style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
                        <div class="tur_item_blur"
                             style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                        <div class="tur_item_side">
                            <svg width="30" height="30">
                                <use xlink:href="<?= get_field('tur_icon', $post->ID); ?>"></use>
                            </svg>
                            <h4><?= the_title(); ?></h4>
                            <span><?= __('Більше інформації'); ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <?php endwhile; ?>

        </div>

        <?php endif;
        wp_reset_postdata();
        ?>

    </div>
</section>