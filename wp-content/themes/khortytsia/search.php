<?php
get_header();
?>

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
</section>


    <h2><?= __('Поиск по'); ?>: "<?php echo $_GET['s'];?>"</h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

<?php endwhile; else: ?>

    <p><?= __('Поиск не дал результатов.'); ?></p>

<?php endif;
get_footer(); ?>