<section id="tur_objects_section" class="tur_objects_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section_title">
                    <h2>Туристичні об’єкти</h2>
                </div>
            </div>
        </div>

        <?php $turobj = new WP_Query([
            'post_type' => 'tourist',
            'orderby' => 'id',
            'order' => 'asc'
        ]);
        if($turobj->have_posts()):
        ?>

        <div class="row no-gutters">
            <?php while($turobj->have_posts()): $turobj->the_post(); ?>
            <div class="col-lg-6">
                <a href="<?php echo the_permalink(); ?>">
                    <div class="tur_item_wrap from_left" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                        <div class="tur_item_blur" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                        <div class="tur_item_side">
                            <svg width="30" height="30">
                                <use xlink:href="<?php echo get_field('tur_icon', $post_id->ID); ?>"></use>
                            </svg>
                            <h4><?php echo the_title(); ?></h4>
                            <span>Більше інформації</span>
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