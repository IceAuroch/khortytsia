<?php
if (pll_current_language('slug') == 'en') $id = '369';
elseif (pll_current_language('slug') == 'ua') $id = '379';
elseif (pll_current_language('slug') == 'ru') $id = '278';
?>
<section class="youtube_section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-1">
                <div class="youtube_wrap orenge_line">
                    <iframe src="<?=  get_field('main_video_link', $id); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="map_side_text ">
                    <h2><?= get_field('main_video_title', $id); ?></h2>
                    <p><?= get_field('main_video_description', $id);?></p>
                </div>
            </div>
        </div>
    </div>
</section>
