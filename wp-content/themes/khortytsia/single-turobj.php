<?php
/*
Template Name: Tourist
Template Post Type: tourist
*/
get_header();

?>
<section class="main_desk_section main_desk_turobj_section" style="background-image: url(images/tur_obj_main_bg.jpg)">

    <div class="desktop_gradient"></div>

    <div class="desktop_gradient desktop_gradient2"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xl-4 from_right" >
                <div class="main_desk_turobj_wrap">
                    <div class="main_desk_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Головна</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
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
                            <p>Найбільший острів на Дніпрі, розташований у районі міста Запоріжжя, нижче Дніпровської ГЕС. Унікальний природний та історичний комплекс. Хортиця є одним із Семи чудес України.</p>
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
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="slider_title">
                    <div class="slider_title_item">
                        <p>Галерея</p>
                    </div>
                    <div class="slider_title_item">
                        <p><span id="sliderCounterActive">1</span> / <span class="slider_counter_all">15</span></p>
                    </div>
                </div>

                <div class="main_slider_wrap">
                    <div class="slider_main">
                        <div class="slider_main_item" style="background-image: url(images/tur_slider/slider_item1.jpg);">
                        </div>
                        <div class="slider_main_item">
                            <iframe src="https://www.youtube.com/embed/nTZORhJo1Ag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="slider_main_item" style="background-image: url(images/tur_slider/slider_item1.jpg);">
                        </div>
                        <div class="slider_main_item" style="background-image: url(images/tur_slider/slider_item2.jpg);">
                        </div>
                        <div class="slider_main_item" style="background-image: url(images/tur_slider/slider_item5.jpg);">
                        </div>
                        <div class="slider_main_item" style="background-image: url(images/tur_slider/slider_item4.jpg);">
                        </div>
                    </div>

                    <div class="slider_btn slider_btn_prev">
                        <svg width="7.5" height="12" >
                            <use xlink:href="#left-icon"></use>
                        </svg>
                    </div>
                    <div class="slider_btn slider_btn_next">
                        <svg width="7.5" height="12" >
                            <use xlink:href="#right-icon"></use>
                        </svg>
                    </div>
                </div>


                <div class="slider_main_for">
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item1.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item2.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item3.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item4.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item5.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item1.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item2.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item3.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item4.jpg" alt="">
                    </div>
                    <div class="slider_main_item_for">
                        <img src="images/tur_slider/slider_item5.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-5 offset-xl-1">
                <div class="map_side_text ">
                    <h2>Про Скіфський стан</h2>
                    <p>Археологічні дослідження, які проводилися на цій місцевості, починаючи з часів Якова Новицького повідали, що кургани почали зводити у ІІІ тисячолітті до нашої ери, а поховання в них зафіксовані – від дати створення перших курганів і до середньовіччя. Нажаль з 28 курганів, що височіли тут колись, збереглось усього три (загальна площа цієї курганної групи – 20,83 га). У листопаді 2005р. розпочались роботи з відновлення історичного ландшафту, а саме з облаштування п’ятої курганної групи. До трьох «живих» курганів, що були очищені від дерев та чагарникової порослі, додали ще вісім, серед яких один досліджений і відновлений, два відновлені на місці зруйнованих, а решта – кургани-макети і святилище Арея. Як вже повідомлялось, на території п’ятої курганної групи збереглось три кургани з 28-ми.</p>
                    <p> Один із збережених курганів, в народі має назву “Потьомкінський”. Після ліквідації у 1775 році Запорозької Січі Катерини ІІ подарувала острів Хортицю Григорію Олександровичу Потьомкіну. І, з притаманним йому розмахом, фаворит цариці задумав створити на Хортиці фруктовий сад, палац і розкішний парк, що не поступався паркам Петергофа. Але дуже швидко він охолов до цієї витівки і передав Хортицю державній казні “за так”. У 1790 році на острові поселилися німці-меноніти.</p>
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
                <div class="another_tur_obj_links">
                    <div class="map_side_icon_item from_bottom">
                        <a  href="#" data-selection="bank-map">
                            <svg width="30" height="30">
                                <use xlink:href="#bank-icon"></use>
                            </svg>
                            Музей
                        </a>
                    </div>
                    <div class="map_side_icon_item from_bottom">
                        <a href="#" data-selection="tree-map">
                            <svg width="30" height="30">
                                <use xlink:href="#tree-icon"></use>
                            </svg>
                            Дендропарк
                        </a>
                    </div>
                    <div class="map_side_icon_item from_bottom">
                        <a href="#" data-selection="sich-map">
                            <svg width="30" height="30">
                                <use xlink:href="#sich-icon"></use>
                            </svg>
                            Січ
                        </a>
                    </div>
                    <div class="map_side_icon_item from_bottom">
                        <a href="#" data-selection="boat-map">
                            <svg width="30" height="30">
                                <use xlink:href="#boat-icon"></use>
                            </svg>
                            Козацькі човни
                        </a>
                    </div>
                    <div class="map_side_icon_item from_bottom">
                        <a href="#" data-selection="tower-map">
                            <svg width="30" height="30">
                                <use xlink:href="#tower-icon"></use>
                            </svg>
                            Скіфський стан
                        </a>
                    </div>
                    <div class="map_side_icon_item from_bottom">
                        <a href="#" data-selection="mayak-map">
                            <svg width="30" height="30">
                                <use xlink:href="#mayak-icon"></use>
                            </svg>
                            Кам’янська Січ
                        </a>
                    </div>
                    <div class="map_side_icon_item from_bottom">
                        <a href="#" data-selection="stone-map">
                            <svg width="29" height="29">
                                <use xlink:href="#stone-icon"></use>
                            </svg>
                            Святилище
                        </a>
                    </div>
                    <div class="map_side_icon_item from_bottom">
                        <a href="#" data-selection="river-map">
                            <svg width="30" height="30">
                                <use xlink:href="#river-icon"></use>
                            </svg>
                            Протовче
                        </a>
                    </div>
                </div>
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