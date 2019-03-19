<section class="main_desk_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md offset-md-2 col-xl-5 offset-xl-2">
                <div class="main_desk_subtitle">
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="main_desk_title">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p><?= wp_trim_words(get_the_content(), 30, '...'); ?></p>
                    <a class="link_orange" href="#"><?= __('Детальніше'); ?></a>
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