<section class="main_desk_section">

    <div class="intro-slider">
        <?php $intro_slider = get_field('slider_image', 379);
        foreach ($intro_slider as $item) :
            ?>
            <div class="intro-slider-item" style="background-image:url(<?= $item['url'] ?>);"></div>
        <?php endforeach; ?>
    </div>

    <svg class="decor-symbol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 80"
         preserveAspectRatio="xMidYMid slice">
        <defs>
            <mask id="mask" x="0" y="0" width="100%" height="100%">
                <rect x="0" y="0" width="100%" height="100%" fill="#fff"/>
                <text id="text" x="130" y="90">X</text>
            </mask>
        </defs>
        <rect id="overlay" x="0" y="0" width="100%" height="100%" fill="url(#bg-gradient)"/>
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute;top: -999999px;">
        <defs>
            <linearGradient id="bg-gradient" gradientUnits="userSpaceOnUse" x1="30.71%" y1="-9.89%" x2="69.29%"
                            y2="109.89%">
                <stop offset=".26" stop-color="#000" stop-opacity=".5"/>
                <stop offset="1.11" stop-color="#fffcfc" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md offset-md-2 col-xl-5 offset-xl-2">
                <div class="main_desk_subtitle">
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="main_desk_title">
                    <?php if (pll_current_language('slug') == 'en') $id_text = '361';
                    elseif (pll_current_language('slug') == 'ru') $id_text = '357';
                    else $id_text = '288'; ?>
                    <h1><?php bloginfo('name'); ?></h1>
                    <p><?php $text = get_post($id_text);
                        echo wp_trim_words($text->post_content, 30, '...'); ?>
                    </p>
                    <a class="link_orange" href="<?= the_permalink($id_text); ?>"><?= __('Детальніше'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="main_desk_social">
        <a href="<?= get_theme_mod('facebook'); ?>">
            <svg width="20" height="20">
                <use xlink:href="#fb-icon"></use>
            </svg>
        </a>
        <a href="<?= get_theme_mod('instagram'); ?>">
            <svg width="19" height="20">
                <use xlink:href="#insta-icon"></use>
            </svg>
        </a>
        <a href="<?= get_theme_mod('youtube'); ?>">
            <svg width="20" height="20">
                <use xlink:href="#yt-icon"></use>
            </svg>
        </a>
    </div>
    <a href="#tur_objects_section" class="scroll_down">
        <div class="scroll_down__text">
            <?= __('Дізнатися більше'); ?>
        </div>
        <div class="scroll_down__icon"></div>
    </a>
</section>