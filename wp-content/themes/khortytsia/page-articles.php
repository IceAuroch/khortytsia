<?php
/*
Template Name: Articles
Template Post Type: page
*/

get_header();
?>

<section class="main_desk_section main_desk_other_section"
         style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="desktop_gradient"></div>
    <div class="desktop_gradient desktop_gradient2"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <div class="main_desk_other_wrap">
                    <div class="main_desk_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Головна</a></li>
                                <li class="breadcrumb-item"><a href="#">Блог</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="main_desk_other_title">
                        <h1>
                            <?php echo the_title(); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- news section -->

<section class="mt_section page_news_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="last_news_item from_bottom_interval">
                            <div class="last_news_item_img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                            <div class="last_news_item_content_wrap">
                                <div class="last_news_item_content">
                                    <span>20.01.2019</span>
                                    <h4><?php echo the_title(); ?></h4>
                                    <p>Національний заповідник «Хортиця» відкрив осередок дозвілля та просвітництва «Культурна чайна» — клуб спілкування для людей похилого віку. Клубна система проведення дозвілля була дуже поширена у минулому. </p>
                                    <a href="<?php echo the_permalink(); ?>">Читати повністю</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col text-center">
                <a href="#" class="btn btn-primary">Більше статей</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
