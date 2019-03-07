<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>

</head>
<body>

<?php  get_template_part('template-parts/symbols'); ?>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand header_logo" href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav nav_list">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Про Хортицю
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Про нас</a>
                                    <a class="dropdown-item" href="#">Історія</a>
                                    <a class="dropdown-item" href="#">Природа</a>
                                    <a class="dropdown-item" href="partners.html">Партнери</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link turobj_link" href="#">Туроб’єкти</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Відвідування</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Блог
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="news.html">Новини</a>
                                    <a class="dropdown-item" href="articles.html">Статті</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="galery.html">Галерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacts.html">Контакти</a>
                            </li>
                        </ul>
                        <div class="header_item">
                            <div class="header_search">
                                <button id="open_serch" type="button">
                                </button>
                                <div class="serch_line">
                                    <input type="text" placeholder="Пошук...">
                                    <button type="button">
                                        <svg width="31" height="31">
                                            <use xlink:href="#search-icon"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="header_item header_lang">
                            <p>UA</p>
                            <div class="header_lang_drop">
                                <a href="#">UA</a>
                                <a href="#">UA</a>
                                <a href="#">UA</a>
                            </div>
                        </div>
                        <div class="header_item header_tel">
                            <a href="#">
                                <svg width="17" height="17">
                                    <use xlink:href="#tel-icon"></use>
                                </svg>
                                096 254 12 09
                            </a>
                            <a href="#">
                                <svg width="17" height="17">
                                    <use xlink:href="#tel-icon"></use>
                                </svg>
                                096 254 12 09
                            </a>
                        </div>
                        <div class="header_item">
                            <a class="btn btn-secondary" href="#">Вибрати екскурсію</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="dropdown_turobj_main_wrap">
    <div class="dropdown_turobj_wrap">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur1.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Запорізька Січ</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur2.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Святилище</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur3.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Скіфський стан</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur4.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Дендропарк</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur5.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Музей</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur6.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Козацькі човни</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur7.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Кам’янська Січ</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <div class="dropdown_turobj">
                            <div class="dropdown_turobj__img">
                                <img src="images/tur-ojects/tur8.jpg" alt="">
                            </div>
                            <div class="dropdown_turobj__title">
                                <p>Протовче</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
