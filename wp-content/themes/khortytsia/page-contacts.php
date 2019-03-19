<?php
/*
Template Name: Contacts
Template Post Type: page
*/

get_header();
?>

    <section class="main_desk_section main_desk_full_section"
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
                                    <li class="breadcrumb-item"><a href="<?= pll_home_url(); ?>"><?= __('Головна'); ?></a></li>
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
            <div class="row mt-4">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Замовлення екскурсій'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="tel: <?= get_theme_mod('phone1'); ?>"><?= get_theme_mod('phone1'); ?>,</a>
                                    <a href="tel: <?= get_theme_mod('phone2'); ?>"><?= get_theme_mod('phone2'); ?></a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Приймальня'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#"><?= get_post_meta($post->ID, 'reception_phone', true); ?> (<?= __('тел./факс'); ?>)</a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Музей міста за порогами'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#">(061) 236-05-36,</a>
                                    <a href="#">(061) 236-05-57</a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Служба режиму'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#"><?= get_post_meta($post->ID, 'museum_watch', true); ?></a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Вахта музею'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#"><?= get_post_meta($post->ID, 'museum_watch', true); ?></a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>E-mail :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="mailto:<?= get_theme_mod('email'); ?>">
                                        <?= get_theme_mod('email'); ?> (<?= __('скринька для загальних питань'); ?>),
                                    </a>
                                    <a href="mailto:<?= get_theme_mod('email2'); ?>">
                                        <?= get_theme_mod('email2'); ?> (<?= __('бухгалтерія'); ?>)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Режим роботи'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p><?= get_post_meta($post->ID, 'operation_modes', true); ?></p>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Вихiдний'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p><?= get_post_meta($post->ID, 'holiday', true); ?></p>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('Юридична адреса'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p><?= get_post_meta($post->ID, 'legal_address', true); ?></p>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span><?= __('GPS координати'); ?> :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p><?= __('шир.'); ?> - <?= get_post_meta($post->ID, 'latitude', true); ?> ,
                                        <?= __('довг.'); ?> - <?= get_post_meta($post->ID, 'longitude', true); ?></p>
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
