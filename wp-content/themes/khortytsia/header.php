<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>

</head>
<body <?php body_class() ?>>

<?php get_template_part('template-parts/symbols');
if (pll_current_language('slug') == 'en') {
	$id_about = '361';
	$id_histor = '363';
	$id_natur = '365';
	$id_partn = '367';
	$id_news = '371';
	$id_artic = '375';
	$id_galler = '272';
	$id_contact = '373';
	$id_visits = '530';
} elseif (pll_current_language('slug') == 'ru') {
	$id_about = '357';
	$id_histor = '377';
	$id_natur = '359';
	$id_partn = '61';
	$id_news = '274';
	$id_artic = '276';
	$id_galler = '268';
	$id_contact = '252';
	$id_visits = '527';
} else {
	$id_about = '288';
	$id_histor = '290';
	$id_natur = '292';
	$id_partn = '282';
	$id_news = '284';
	$id_artic = '286';
	$id_galler = '270';
	$id_contact = '280';
	$id_visits = '522';
}
?>

<header>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <nav class="navbar navbar-expand-xl">
                    <a class="navbar-brand header_logo" href="<?= pll_home_url(); ?>">
                        <img src="<?= get_theme_file_uri('images/logo.png'); ?>" alt="">
                    </a>
                    <div class="header_item header_lang for_mobile_flex">
                        <p><?= pll_current_language('slug'); ?></p>
                        <div class="header_lang_drop">
                            <ul><?php pll_the_languages(['display_names_as' => 'slug']); ?></ul>
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
									<?= __('Про Хортицю'); ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="<?php the_permalink($id_about); ?>"><?= __('Про нас'); ?></a>
                                    <a class="dropdown-item"
                                       href="<?php the_permalink($id_histor); ?>"><?= __('Історія'); ?></a>
                                    <a class="dropdown-item"
                                       href="<?php the_permalink($id_natur); ?>"><?= __('Природа'); ?></a>
                                    <a class="dropdown-item"
                                       href="<?php the_permalink($id_partn); ?>"><?= __('Партнери'); ?></a>
                                </div>
                            </li>
                            <li class="nav-item none_mobile">
                                <a class="nav-link turobj_link" href="#"><?= __('Туроб’єкти'); ?></a>
                            </li>
                            <li class="nav-item dropdown for_mobile">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?= __('Туроб’єкти'); ?>
                                </a>

								<?php $turobj = new WP_Query([
									'post_type' => 'tourist',
									'orderby' => 'id',
									'order' => 'asc',
								]);
								if ($turobj->have_posts()):
									?>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php while ($turobj->have_posts()): $turobj->the_post(); ?>
                                            <a class="dropdown-item"
                                               href="<?php the_permalink(); ?>"><?= the_title(); ?></a>
										<?php endwhile; ?>
                                    </div>

								<?php endif;
								wp_reset_postdata();
								?>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php the_permalink($id_visits); ?>"><?= __('Відвідувачам'); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?= __('Блог'); ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="<?php the_permalink($id_news); ?>"><?= __('Новини'); ?></a>
                                    <a class="dropdown-item"
                                       href="<?php the_permalink($id_artic); ?>"><?= __('Статті'); ?></a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php the_permalink($id_galler); ?>"><?= __('Галерея'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php the_permalink($id_contact); ?>"><?= __('Контакти'); ?></a>
                            </li>
                        </ul>
                        <div class="header_item">
                            <div class="header_search">
                                <button id="open_serch" type="button">
                                </button>
                                <div class="serch_line">
                                    <form action="<?php bloginfo('url'); ?>" method="get">
                                        <input type="text" name="s" placeholder="<?= __('Пошук'); ?>..."
                                               value="<?php if (!empty($_GET['s'])) {
												   echo $_GET['s'];
											   } ?>">
                                        <button type="button">
                                            <svg width="31" height="31">
                                                <use xlink:href="#search-icon"></use>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="header_item header_lang none_mobile">
                            <p><?= pll_current_language(); ?></p>
                            <div class="header_lang_drop">
                                <ul><?php pll_the_languages(['display_names_as' => 'slug']); ?></ul>
                            </div>
                        </div>
                        <div class="header_item header_tel">
                            <a href="tel: <?= get_theme_mod('phone1'); ?>">
                                <svg width="17" height="17">
                                    <use xlink:href="#tel-icon"></use>
                                </svg>
								<?= get_theme_mod('phone1'); ?>
                            </a>
                            <a href="tel: <?= get_theme_mod('phone2'); ?>">
                                <svg width="17" height="17">
                                    <use xlink:href="#tel-icon"></use>
                                </svg>
								<?= get_theme_mod('phone2'); ?>
                            </a>
                        </div>
                        <div class="header_item">
                            <a class="btn btn-secondary" href="#"><?= __('Вибрати екскурсію'); ?></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<?php $turobj = new WP_Query([
	'post_type' => 'tourist',
	'orderby' => 'ID',
	'order' => 'asc',
]);

if ($turobj->have_posts()):
?>

<section class="dropdown_turobj_main_wrap">
    <div class="dropdown_turobj_wrap">
        <div class="container-fluid">
            <div class="row no-gutters">

				<?php while ($turobj->have_posts()): $turobj->the_post(); ?>
                    <div class="col-lg-3">
                        <a href="<?php the_permalink(); ?>">
                            <div class="dropdown_turobj">
                                <div class="dropdown_turobj__img">
                                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="dropdown_turobj__title">
                                    <p><?php the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
				<?php endwhile; ?>

            </div>
        </div>
    </div>
</section>

<main id="app">

<?php endif;
wp_reset_postdata();
?>