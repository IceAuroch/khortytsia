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

<?php get_template_part('template-parts/symbols'); ?>

<header>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <nav class="navbar navbar-expand-xl">
                    <a class="navbar-brand header_logo" href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="">
                    </a>
                    <div class="header_item header_lang for_mobile_flex">
                        <p><?= pll_current_language('slug');?></p>
                        <div class="header_lang_drop">
                            <a href="#">UA</a>
                            <a href="#">RU</a>
                            <a href="#">ENG</a>
                        </div>
                    </div>
                    <button class="navbar-toggler menu_main_btn" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_btn menu_btn_top"></span>
                        <span class="menu_btn menu_btn_middle"></span>
                        <span class="menu_btn menu_btn_end"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav nav_list">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Про Хортицю
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= the_permalink(288); ?>">Про нас</a>
                                    <a class="dropdown-item" href="<?= the_permalink(290); ?>">Історія</a>
                                    <a class="dropdown-item" href="<?= the_permalink(292); ?>">Природа</a>
                                    <a class="dropdown-item" href="<?= the_permalink(282); ?>">Партнери</a>
                                </div>
                            </li>
                            <li class="nav-item none_mobile">
                                <a class="nav-link turobj_link" href="#">Туроб’єкти</a>
                            </li>
                            <li class="nav-item dropdown for_mobile">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Туроб’єкти
                                </a>

                                <?php $turobj = new WP_Query([
                                    'post_type' => 'tourist',
                                    'orderby' => 'id',
                                    'order' => 'asc'
                                ]);
                                if ($turobj->have_posts()):
                                    ?>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php while ($turobj->have_posts()): $turobj->the_post(); ?>
                                            <a class="dropdown-item"
                                               href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
                                        <?php endwhile; ?>
                                    </div>

                                <?php endif;
                                wp_reset_postdata();
                                ?>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Відвідування</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Блог
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo the_permalink(284); ?>">Новини</a>
                                    <a class="dropdown-item" href="<?php echo the_permalink(286); ?>">Статті</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo the_permalink(270); ?>">Галерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo the_permalink(280); ?>">Контакти</a>
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
                        <div class="header_item header_lang none_mobile">
                            <p><?= pll_current_language();?></p>
                            <div class="header_lang_drop">
                                <a href="#"><?php pll_the_languages(); ?></a>
                            </div>
                        </div>
                        <div class="header_item header_tel">
                            <a href="">
                                <svg width="17" height="17">
                                    <use xlink:href="#tel-icon"></use>
                                </svg>
                                <?php echo get_theme_mod('phone1'); ?>
                            </a>
                            <a href="">
                                <svg width="17" height="17">
                                    <use xlink:href="#tel-icon"></use>
                                </svg>
                                <?php echo get_theme_mod('phone2'); ?>
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

<?php $turobj = new WP_Query([
    'post_type' => 'tourist',
]);
if ($turobj->have_posts()):
?>

<section class="dropdown_turobj_main_wrap">
    <div class="dropdown_turobj_wrap">
        <div class="container-fluid">
            <div class="row no-gutters">

                <?php while ($turobj->have_posts()): $turobj->the_post(); ?>
                    <div class="col-lg-3">
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="dropdown_turobj">
                                <div class="dropdown_turobj__img">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="dropdown_turobj__title">
                                    <p><?php echo the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </div>
</section>

<?php endif;
wp_reset_postdata();
?>