<?php
/*
Template Name: Visits
Template Post Type: page
*/
get_header();
?>

    <section class="main_desk_section main_desk_other_section main_desk_vidvid"
             style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
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
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#one" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    <svg width="44" height="44">
                                        <use xlink:href="#tab1-icon"></use>
                                    </svg>
									<?= __('Як дістатися?'); ?>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li class="nav-item nav_tabs_item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#two" role="tab"
                                   aria-controls="profile" aria-selected="false">
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
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#three" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    <svg width="44" height="44">
                                        <use xlink:href="#tab3-icon"></use>
                                    </svg>
									<?= __('Активний відпочинок, харчування, проживання'); ?>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li class="nav-item nav_tabs_item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#four" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    <svg width="44" height="44">
                                        <use xlink:href="#tab4-icon"></use>
                                    </svg>
									<?= __('Наші проекти'); ?>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li class="nav-item nav_tabs_item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#five" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    <svg width="44" height="44">
                                        <use xlink:href="#tab5-icon"></use>
                                    </svg>
                                    <?= __('Сувениры и полиграфия'); ?>
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
                        <div class="tab-pane fade " id="one" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="btn_title">
                                        <h2><?= __('Як дістатися?'); ?></h2>
                                    </div>
                                    <div class="vidvid_map">
                                        <div id="map"></div>
                                        <div class="map_scrol"><h4><?= __('Нажмите для увеличения'); ?></h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-6">
									<?php the_content(); ?>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade show active" id="two" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="btn_title">
                                        <h2><?= __('Екскурсії'); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
									<?php
									$excursion = new WP_Query([
										'post_type' => 'tourist',
										'orderby' => 'ID',
										'order' => 'asc',
									]);
									if ($excursion->have_posts()): ?>

                                        <div class="tab_content_list d-flex flex-wrap">
											<?php while ($excursion->have_posts()): $excursion->the_post(); ?>
                                                <a href="<?php the_permalink(); ?>" class="tab_content_list_item">
                                                    <div><?= __('Екскурсія'); ?></div>
                                                    <h3><?= the_title(); ?></h3>
                                                </a>
											<?php endwhile; ?>
                                        </div>

									<?php
									endif;
									wp_reset_postdata(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col">

                                    <div class="btn_title">
                                        <h2><?= __('Активний відпочинок'); ?></h2>
                                    </div>


                                    <div class="row">

										<?php
										$partners = new WP_Query([
											'post_type' => 'partners',
											'orderby' => 'id',
											'order' => 'asc',
										]);
										if ($partners->have_posts()):
											while ($partners->have_posts()): $partners->the_post(); ?>

                                                <div class="col-sm-6 col-lg-4 ">
                                                    <div class="page_partners_item">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <div class="last_news_item">
                                                                <div class="partners_img"
                                                                     style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
                                                                </div>
                                                            </div>
                                                            <div class="partner_title">
                                                                <h4><?php the_title(); ?></h4>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

											<?php endwhile; endif;
										wp_reset_postdata(); ?>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="btn_title">
                                        <h2><?= __('Наші проекти'); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
									<?php
									if (pll_current_language('slug') == 'en') {
										$post_categ_name = 'articles';
									} elseif (pll_current_language('slug') == 'ru') {
										$post_categ_name = 'stati';
									} else {
										$post_categ_name = 'statti';
									}

									$articles = new WP_Query([
										'post_type' => 'post',
										'category_name' => $post_categ_name,
									]);
									if ($articles->have_posts()): ?>
                                        <div class="tab_content_list d-flex flex-wrap">
											<?php while ($articles->have_posts()): $articles->the_post(); ?>
                                                <a href="<?php the_permalink(); ?>" class="tab_content_list_item">
                                                    <div><?= __('Стаття'); ?></div>
                                                    <h3><?= the_title(); ?></h3>
                                                </a>
											<?php endwhile; ?>
                                        </div>
									<?php endif;
									wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="btn_title">
                                        <h2><?= __('Сувениры и полиграфия'); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <?php
                                    if (pll_current_language('slug') == 'en') {
                                        $post_categ_id = '70';
                                    } elseif (pll_current_language('slug') == 'ru') {
                                        $post_categ_id = '72';
                                    } else {
                                        $post_categ_id = '68';
                                    }

                                    $articles = new WP_Query([
                                        'post_type' => 'post',
                                        'cat' => $post_categ_id,
                                    ]);
                                    if ($articles->have_posts()): ?>
                                        <div class="tab_content_list d-flex flex-wrap">
                                            <?php while ($articles->have_posts()): $articles->the_post(); ?>
                                                <a href="<?php the_permalink(); ?>" class="tab_content_list_item">
                                                    <div><?= __('Стаття'); ?></div>
                                                    <h3><?= the_title(); ?></h3>
                                                </a>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif;
                                    wp_reset_postdata(); ?>
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
