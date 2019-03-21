<?php
/*
Template Name: Visits
Template Post Type: page
*/
get_header();
?>

<section class="main_desk_section main_desk_other_section main_desk_vidvid"
         style="background-image: url(<?= get_theme_file_uri('images/vidvi_bg.jpg'); ?>)">

    <div class="desktop_gradient"></div>

    <div class="desktop_gradient desktop_gradient2"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <div class="main_desk_other_wrap">
                    <div class="main_desk_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><?= __('Головна'); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>

                    <div class="main_desk_other_title">
                        <h1>
                            <?= the_title(); ?>
                        </h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="vidvid_navs">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <ul class="nav nav-tabs nav_tabs" id="myTab" role="tablist">
                        <li class="nav-item nav_tabs_item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#one" role="tab" aria-controls="home" aria-selected="true">
                                <svg width="44" height="44">
                                    <use xlink:href="#tab1-icon"></use>
                                </svg>
                                <?= __('Як добратися?'); ?>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                        <li class="nav-item nav_tabs_item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#two" role="tab" aria-controls="profile" aria-selected="false">
                                <svg width="44" height="44">
                                    <use xlink:href="#tab2-icon"></use>
                                </svg>
                                <?= __('Екскурсії'); ?>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                        <li class="nav-item nav_tabs_item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#three" role="tab" aria-controls="contact" aria-selected="false">
                                <svg width="44" height="44">
                                    <use xlink:href="#tab3-icon"></use>
                                </svg>
                                <?= __('Активний відпочинок'); ?>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                        <li class="nav-item nav_tabs_item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#four" role="tab" aria-controls="contact" aria-selected="false">
                                <svg width="44" height="44">
                                    <use xlink:href="#tab4-icon"></use>
                                </svg>
                                <?= __('Виставки'); ?>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</section>
<section class="vidviduvannya_section">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col">
                                <div class="btn_title">
                                    <h2><?= __('Як добратися?'); ?></h2>
                                </div>
                                <div class="vidvid_map">
                                    <div id="map"></div>
                                    <div class="map_scrol"><h4>Нажмите для увеличения</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <p>Маршрутка номер 58 едет на бабурку!!! <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis veniam perferendis labore odit, eaque hic laudantium, nulla magni adipisci iste aut numquam rerum nam quod recusandae beatae blanditiis architecto! Soluta architecto, consectetur inventore atque aspernatur ipsam cupiditate eveniet omnis aut pariatur ab itaque mollitia? Sequi a aspernatur, consequatur, magnam minima dicta eum delectus velit quisquam </p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col">
                                <div class="btn_title">
                                    <h2><?= __('Екскурсії'); ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="tab_content_list d-flex flex-wrap">
                                    <a href="#" class="tab_content_list_item">
                                        <span>Екскурсія</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Екскурсія</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Екскурсія</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Екскурсія</span>
                                        <h4>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Екскурсія</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Екскурсія</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Екскурсія</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col">
                                <div class="btn_title">
                                    <h2><?= __('Активний відпочинок'); ?></h2>
                                </div>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum aliquid ullam, voluptatibus omnis alias perferendis distinctio voluptatem! Porro, ut officiis! Ab id facilis quaerat repellendus distinctio, quod nam nobis veritatis voluptatibus, vero laudantium explicabo possimus, nemo atque doloremque molestias eum accusantium dolores commodi natus repellat animi inventore perspiciatis! Dolores eligendi quisquam a maiores. Eos odio deleniti placeat molestiae inventore repellat nobis nihil quam accusamus eligendi fugiat, sit veniam quaerat deserunt nam harum quas eveniet possimus eum expedita. Quaerat quod doloribus reprehenderit consequatur vel quos. Magnam dolor quam repudiandae dolorum fugiat accusantium ad placeat hic sit. Saepe ea nobis commodi itaque!</p>
                                <div class="tab_content_link">
                                    <a href="#">Дизнатися бильше...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col">
                                <div class="btn_title">
                                    <h2><?= __('Виставки'); ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="tab_content_list d-flex flex-wrap">
                                    <a href="#" class="tab_content_list_item">
                                        <span>Стаття</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Стаття</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Стаття</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Стаття</span>
                                        <h4>Excepteur sint occaecat cupidatat non p</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Стаття</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Стаття</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                    <a href="#" class="tab_content_list_item">
                                        <span>Стаття</span>
                                        <h4>Екскурсія №1</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<?php
get_footer();
