<?php
/*
Template Name: Tourist
Template Post Type: tourist
*/
get_header();

?>
    <section class="main_desk_section main_desk_turobj_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">

        <div class="desktop_gradient"></div>

        <div class="desktop_gradient desktop_gradient2"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xl-4 from_right">
                    <div class="main_desk_turobj_wrap">
                        <div class="main_desk_breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Головна</a></li>
                                    <li class="breadcrumb-item active"
                                        aria-current="page"><?php echo the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>

                        <div class="main_desk_other_title">
                            <h1>
                                <svg width="30" height="30">
                                    <use xlink:href="<?php echo get_field('tur_icon', $post_id->ID); ?>"></use>
                                </svg>
                                <?php echo the_title(); ?>
                            </h1>
                            <div class="main_desk_other_text">
                                <p>Найбільший острів на Дніпрі, розташований у районі міста Запоріжжя, нижче
                                    Дніпровської ГЕС. Унікальний природний та історичний комплекс. Хортиця є одним із
                                    Семи чудес України.</p>
                                <a href="#" class="btn btn-secondary">Замовити екскурсію</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <!--================ slider -->

    <section class="slider_section">
        <div class="container-fluid">
            <div class="row">

                <?php
                $images = get_field('tur_obj_gallery', $post_id->ID);
                if ($images): ?>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="slider_title">
                            <div class="slider_title_item">
                                <p>Галерея</p>
                            </div>
                            <div class="slider_title_item">
                                <p><span id="sliderCounterActive">1</span> / <span class="slider_counter_all">15</span>
                                </p>
                            </div>
                        </div>

                        <div class="main_slider_wrap">
                            <div class="slider_main">

                                <?php foreach ($images as $image): ?>
                                    <div class="slider_main_item"
                                         style="background-image: url(<?= $image['url']; ?>);">
                                    </div>
                                <?php endforeach; ?>

                            </div>

                            <div class="slider_btn slider_btn_prev">
                                <svg width="7.5" height="12">
                                    <use xlink:href="#left-icon"></use>
                                </svg>
                            </div>
                            <div class="slider_btn slider_btn_next">
                                <svg width="7.5" height="12">
                                    <use xlink:href="#right-icon"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="slider_main_for">

                            <?php foreach ($images as $image): ?>

                                <div class="slider_main_item_for">
                                    <img src="<?= $image['url']; ?>" alt="">
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>

                <?php endif; wp_reset_postdata(); ?>

                <div class="col-lg-5 col-xl-5 offset-xl-1">
                    <div class="map_side_text ">
                        <h2>Про Скіфський стан</h2>
                        <p>Археологічні дослідження, які проводилися на цій місцевості, починаючи з часів Якова
                            Новицького повідали, що кургани почали зводити у ІІІ тисячолітті до нашої ери, а поховання в
                            них зафіксовані – від дати створення перших курганів і до середньовіччя. Нажаль з 28
                            курганів, що височіли тут колись, збереглось усього три (загальна площа цієї курганної групи
                            – 20,83 га). У листопаді 2005р. розпочались роботи з відновлення історичного ландшафту, а
                            саме з облаштування п’ятої курганної групи. До трьох «живих» курганів, що були очищені від
                            дерев та чагарникової порослі, додали ще вісім, серед яких один досліджений і відновлений,
                            два відновлені на місці зруйнованих, а решта – кургани-макети і святилище Арея. Як вже
                            повідомлялось, на території п’ятої курганної групи збереглось три кургани з 28-ми.</p>
                        <p> Один із збережених курганів, в народі має назву “Потьомкінський”. Після ліквідації у 1775
                            році Запорозької Січі Катерини ІІ подарувала острів Хортицю Григорію Олександровичу
                            Потьомкіну. І, з притаманним йому розмахом, фаворит цариці задумав створити на Хортиці
                            фруктовий сад, палац і розкішний парк, що не поступався паркам Петергофа. Але дуже швидко
                            він охолов до цієї витівки і передав Хортицю державній казні “за так”. У 1790 році на
                            острові поселилися німці-меноніти.</p>
                        <div class="map_side_text_btn">
                            <a href="#" class="btn btn-secondary">Відвідування</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="another_tur_objects">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 ">
                    <div class="section_title ">
                        <h2>Інші туроб’єкти Хортиці</h2>
                    </div>
                    <?php $turobj = new WP_Query([
                        'post_type' => 'tourist',
                        'orderby' => 'id',
                        'order' => 'asc'
                    ]);
                    if ($turobj->have_posts()):
                        ?>
                        <div class="another_tur_obj_links">
                            <?php while ($turobj->have_posts()): $turobj->the_post(); ?>
                                <div class="map_side_icon_item from_bottom">
                                    <a href="<?php echo the_permalink(); ?>" data-selection="bank-map">
                                        <svg width="30" height="30">
                                            <use xlink:href="<?php echo get_field('tur_icon', $post_id->ID); ?>"></use>
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
        </div>
    </section>

    <section class="map_section_page">
        <div id="map"></div>
        <div class="map_scrol"><h4>Нажмите для увеличения</h4></div>
    </section>
<?php
require('template-parts/last-news.php');
get_footer();