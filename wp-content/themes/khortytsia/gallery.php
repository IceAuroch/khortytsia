<?php
/*
Template Name: Gallery
Template Post Type: page
*/
get_header();
global $wp;
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
                                    <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><?= __('Головна'); ?></a>
                                    </li>
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

			<?php
			$filters = [];
			$currentFilters = isset($_GET['filter']) ? array_map('strtolower', explode(',', $_GET['filter'])) : [];
			$gallery = new WP_Query([
				'post_type' => 'custom_gallery',
			]);

			if ($gallery->have_posts()) {
				while ($gallery->have_posts()) : $gallery->the_post();
					$images = get_field('galery_gallery');

					if ($images) {
						foreach ($images as $image) {
							$tags = explode(',', $image['caption']);
							if (count($tags)) {
								foreach ($tags as $tag) {
									if ($tag !== '') {
										array_push($filters, ucfirst(trim($tag)));
									}
								}
							}
						}
					}
				endwhile;
			}

			$filters = array_unique($filters);
			?>

            <div class="row">
				<?php if (count($filters)) : ?>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="main_desk_filter from_bottom_interval">
                            <ul class="filter_list row">
								<?php foreach ($filters as $filter) : ?>
                                    <li class="col-auto">
                                        <a href="<?= makeFilterLink($_GET, $filter) ?>"
                                           class="<?= checkIfFilterExists($_GET, $filter) ? 'is-checked' : '' ?>">
											<?= $filter ?>
                                        </a>
                                    </li>
								<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
				<?php
				endif;
				//wp_reset_postdata(); ?>
            </div>

			<?php if (isset($_GET['filter'])) : ?>
                <div class="text-center position-relative" style="z-index: 100">
                    <a href="<?= home_url($wp->request); ?>" class="btn btn-outline-info">
                        <svg width="20" height="20">
                            <use xlink:href="#basket-icon"></use>
                        </svg>
						<?= __('Очистити фільтри'); ?>
                    </a>
                </div>
			<?php endif; ?>
        </div>
    </section>

    <section class="mt_section page_news_section">
        <div class="container-fluid">
			<?php if ($gallery->have_posts()) : $count = -1 ; ?>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <a href="#" data-toggle="modal" data-target="#slider_modal">
                            <div class="galery_masonry">

								<?php while ($gallery->have_posts()) : $gallery->the_post();
									$images = get_field('galery_gallery');
									if ($images || have_rows('gallery_video')) :
										foreach ($images as $image): $count++;
											if (count($currentFilters) == 0
												|| array_intersect(getImageTags($image), $currentFilters)) :
												?>

                                                <div class="galery_masonry_item" data-indexImg="<?= $count ?>">
                                                    <img class="lozad" src="<?= $image['sizes']['medium']; ?>" alt="">
                                                </div>

											<?php
											endif;
										endforeach;

										if (have_rows('galery_video')):
											while (have_rows('galery_video')) : the_row();
												$count++; ?>

                                                <div class="galery_masonry_item" data-indexImg="<?= $count ?>">
                                                    <iframe src="<?= get_video_embed(get_sub_field('galery_video_link')) ?>"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                </div>

											<?php
											endwhile;
										endif;


									endif;
								endwhile; ?>

                            </div>
                        </a>
                    </div>
                </div>
			<?php endif;
			//wp_reset_postdata(); ?>
    </section>

    <div class="modal fade" id="slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_close">
                    <span data-dismiss="modal">+</span>
                </div>
                <div class="modal_slider_main">

					<?php while ($gallery->have_posts()): $gallery->the_post();
						$images = get_field('galery_gallery');
						if ($images):
							foreach ($images as $image):
								if (count($currentFilters) == 0 || array_intersect(getImageTags($image),
										$currentFilters)) :
									?>

                                    <div class="slider_modal_item">
                                        <div class="slider_modal_item__img"
                                             style="background-image: url(<?= $image['url']; ?>)"></div>
                                        <div class="slider_modal_item__text">
                                            <p><?= $image['description']; ?></p>
                                        </div>
                                    </div>

								<?php endif;
							endforeach;


							if (have_rows('galery_video')):
								while (have_rows('galery_video')) : the_row();
									$count++; ?>
                                    <div class="slider_modal_item">
                                        <div class="slider_modal_item__img" data-indexImg="<?= $count ?>">
                                            <iframe src="<?= get_video_embed(get_sub_field('galery_video_link')) ?>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        </div>

                                        <div class="slider_modal_item__text">
                                            <p><?= get_sub_field('galery_video_desc'); ?></p>
                                        </div>

                                    </div>
								<?php
								endwhile;
							endif;

						endif;
					endwhile; ?>

                </div>

                <div class="slider_arows_wrap">
                    <div class="slider_btn slider_btn_prev">
                        <svg width="7.5" height="12">
                            <use xlink:href="#left-icon"></use>
                        </svg>
                    </div>
                    <div class="slider_btn slider_btn_next">
                        <svg width="7.5" height="12">
                            <use xlink:href="#right-icon"></use>
                        </svg>
                    </div>
                </div>

                <div class="slider_modal_counter_line">
                    <div class="slider_title">
                        <div class="slider_title_item">
                            <p><?= __('Опис'); ?></p>
                        </div>
                        <div class="slider_title_item">
                            <p><span id="sliderCounterActive">1</span> / <span class="slider_counter_all"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
wp_reset_postdata();
get_template_part('template-parts/last-news');
get_footer();
