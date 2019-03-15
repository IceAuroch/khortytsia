<?php
/*
Template Name: Single post
Template Post Type: page
*/
get_header();
?>

    <section class="main_desk_section main_desk_other_section"
             style="background-image: url(<?php echo get_the_post_thumbnail_url('284'); ?>)">

        <div class="desktop_gradient"></div>

        <div class="desktop_gradient desktop_gradient2"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="main_desk_other_wrap">
                        <div class="main_desk_breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Головна</a></li>
                                    <li class="breadcrumb-item"><a href="#">Блог</a></li>
                                    <li class="breadcrumb-item"><a href="#">Новини</a></li>
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



    <!-- =========== news section -->


    <section class="mt_section page_news_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="last_news_item">
                        <div class="news_slider_wrap">
                            <div class="slider_main">
                                <div class="slider_main_item">
                                    <img src="images/one-news/one-news1.jpg" alt="">
                                </div>
                                <div class="slider_main_item">
                                    <img src="images/one-news/one-news1.jpg" alt="">
                                </div>
                                <div class="slider_main_item">
                                    <img src="images/one-news/one-news1.jpg" alt="">
                                </div>
                            </div>
                            <div class="slider_btn slider_btn_prev">
                                <svg width="7.5" height="12" >
                                    <use xlink:href="#left-icon"></use>
                                </svg>
                            </div>
                            <div class="slider_btn slider_btn_next">
                                <svg width="7.5" height="12" >
                                    <use xlink:href="#right-icon"></use>
                                </svg>
                            </div>
                        </div>

                        <div class="last_news_item_content_wrap ">
                            <div class="last_news_item_content">
                                <span><?php echo get_the_date('j.m.Y'); ?></span>
                                <h4><?php echo the_title(); ?></h4>
                                <p><?php echo get_the_content(); ?></p>
                            </div>
                        </div>
                        <div class="last_news_item_ander_content">
                            <p>Поділитися в соц.мережах:</p>
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#fb-icon"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="19" height="20">
                                    <use xlink:href="#insta-icon"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#yt-icon"></use>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
