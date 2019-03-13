<?php
/*
Template Name: Gallery
Template Post Type: page
*/
get_header();
?>

    <section class="main_desk_section main_desk_other_section main_desk_other_filter_section"
             style="background-image: url(images/news_main_desk_bg.jpg)">

        <div class="desktop_gradient"></div>

        <div class="desktop_gradient desktop_gradient2"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="main_desk_other_wrap">
                        <div class="main_desk_breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Головна</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Галерея</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="main_desk_other_title">
                            <h1>
                                Галерея
                            </h1>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="main_desk_filter from_bottom_interval">
                                <h5>Туроб’єкти</h5>
                                <ul class="filter_list">
                                    <li>
                                        <input id="filter1" type="checkbox">
                                        <label for="filter1">
                                            Запорізька Січ
                                        </label>
                                    </li>
                                    <li>
                                        <input id="filter2" type="checkbox">
                                        <label for="filter2">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter3" type="checkbox">
                                        <label for="filter3">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter4" type="checkbox">
                                        <label for="filter4">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter5" type="checkbox">
                                        <label for="filter5">Запорізька Січ</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="main_desk_filter from_bottom_interval">
                                <h5>Туроб’єкти</h5>
                                <ul class="filter_list">
                                    <li>
                                        <input id="filter2_1" type="checkbox">
                                        <label for="filter2_1">
                                            Запорізька Січ
                                        </label>
                                    </li>
                                    <li>
                                        <input id="filter2_2" type="checkbox">
                                        <label for="filter2_2">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter2_3" type="checkbox">
                                        <label for="filter2_3">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter2_4" type="checkbox">
                                        <label for="filter2_4">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter2_5" type="checkbox">
                                        <label for="filter2_5">Запорізька Січ</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="main_desk_filter from_bottom_interval">
                                <h5>Туроб’єкти</h5>
                                <ul class="filter_list">
                                    <li>
                                        <input id="filter3_1" type="checkbox">
                                        <label for="filter3_1">
                                            Запорізька Січ
                                        </label>
                                    </li>
                                    <li>
                                        <input id="filter3_2" type="checkbox">
                                        <label for="filter3_2">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter3_3" type="checkbox">
                                        <label for="filter3_3">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter3_4" type="checkbox">
                                        <label for="filter3_4">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter3_5" type="checkbox">
                                        <label for="filter3_5">Запорізька Січ</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="main_desk_filter from_bottom_interval">
                                <h5>Туроб’єкти</h5>
                                <ul class="filter_list">
                                    <li>
                                        <input id="filter4_1" type="checkbox">
                                        <label for="filter4_1">
                                            Запорізька Січ
                                        </label>
                                    </li>
                                    <li>
                                        <input id="filter4_2" type="checkbox">
                                        <label for="filter4_2">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter4_3" type="checkbox">
                                        <label for="filter4_3">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter4_4" type="checkbox">
                                        <label for="filter4_4">Запорізька Січ</label>
                                    </li>
                                    <li>
                                        <input id="filter4_5" type="checkbox">
                                        <label for="filter4_5">Запорізька Січ</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center" >
                    <a href="#" class="btn btn-outline-info">
                        <svg width="20" height="20">
                            <use xlink:href="#basket-icon"></use>
                        </svg>
                        Очистити фільтри
                    </a>
                </div>
            </div>
        </div>



    </section>



    <!-- =========== galery section -->

    <section class="mt_section page_news_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <a href="#" data-toggle="modal" data-target="#slider_modal">
                        <div class="galery_masonry">
                            <div class="galery_masonry_item from_bottom_interval" data-indexImg="1">
                                <img src="images/galery/galery1.jpg" alt="">
                            </div>
                            <div class="galery_masonry_item from_bottom_interval" data-indexImg="2">
                                <img src="images/galery/galery2.jpg" alt="">
                            </div>
                            <div class="galery_masonry_item from_bottom_interval" data-indexImg="3">
                                <img src="images/galery/galery3.jpg" alt="">
                            </div>
                            <div class="galery_masonry_item from_bottom_interval" data-indexImg="4">
                                <img src="images/galery/galery1.jpg" alt="">
                            </div>
                            <div class="galery_masonry_item from_bottom_interval">
                                <img src="images/galery/galery3.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary">Дивитись більше</a>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_close">
                    <span data-dismiss="modal">+</span>
                </div>
                <div class="modal_slider_main">
                    <div class="slider_modal_item" >
                        <div class="slider_modal_item__img" style="background-image: url(images/galery/galery1.jpg)"></div>
                        <div class="slider_modal_item__text">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, non. Assumenda aliquid ab itaque eos quam atque esse architecto consequuntur?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, non. Assumenda aliquid ab itaque eos quam atque esse architecto consequuntur?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, non. Assumenda aliquid ab itaque eos quam atque esse architecto consequuntur?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, non. Assumenda aliquid ab itaque eos quam atque esse architecto consequuntur?</p>
                        </div>
                    </div>
                    <div class="slider_modal_item">
                        <div class="slider_modal_item__img" style="background-image: url(images/galery/galery2.jpg)">
                            <iframe src="https://www.youtube.com/embed/nTZORhJo1Ag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="slider_modal_item__text">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, non. Assumenda aliquid ab itaque eos quam atque esse architecto consequuntur?</p>
                        </div>
                    </div>
                    <div class="slider_modal_item" >
                        <div class="slider_modal_item__img" style="background-image: url(images/galery/galery3.jpg)"></div>
                        <div class="slider_modal_item__text">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, non. Assumenda aliquid ab itaque eos quam atque esse architecto consequuntur?</p>
                        </div>
                    </div>
                </div>
                <div class="slider_arows_wrap">
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

                <div class="slider_modal_counter_line">
                    <div class="slider_title">
                        <div class="slider_title_item">
                            <p>Опис</p>
                        </div>
                        <div class="slider_title_item">
                            <p><span id="sliderCounterActive">1</span> / <span class="slider_counter_all">15</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
