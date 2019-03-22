<?php
/*
Template Name: Articles
Template Post Type: page
*/

get_header();
?>

<section class="main_desk_section main_desk_other_section main_desk_other_filter_section"
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
                                <li class="breadcrumb-item"><a href="#"><?= __('Блог'); ?></a></li>
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
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <?php $tags = get_tags(); ?>
                        <div class="main_desk_filter from_bottom_interval">
                            <form method="get">
                                <ul class="filter_list">
                                    <?php foreach ($tags as $tag): ?>
                                        <li>
                                            <input id="filter-<?= slugify($tag->name); ?>" type="checkbox"
                                                   name="filter[]" value="<?= $tag->name ?>">
                                            <label for="filter-<?= slugify($tag->name); ?>">
                                                <?= $tag->name; ?>
                                            </label>
                                        </li>
                                    <?php endforeach;   ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center" >
                <a href="<?= the_permalink(); ?>" class="btn btn-outline-info">
                    <svg width="20" height="20">
                        <use xlink:href="#basket-icon"></use>
                    </svg>
                    <?= __('Очистити фільтри'); ?>
                </a>
                <?php  var_dump($_GET['filter']) ?>
            </div>
        </div>
    </div>
</section>

    <!-- articles section -->

<posts category="statti"></posts>

<?php
get_footer();
