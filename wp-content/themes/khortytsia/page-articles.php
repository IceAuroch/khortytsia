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
                                    <li class="breadcrumb-item">
                                        <a href="<?= pll_home_url(); ?>">
											<?= __('Головна'); ?>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                    <span>
                                        <?= __('Блог'); ?>
                                    </span>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
										<?= the_title(); ?>
                                    </li>
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
			if (pll_current_language('slug') == 'en') {
				$cat = 25;
			} elseif (pll_current_language('slug') == 'ru') {
				$cat = 29;
			} else {
				$cat = 27;
			}

			$filters = [];
			$search_tag = [];
			$currentFilters = isset($_GET['filter']) ? array_map('strtolower', explode(',', slugify($_GET['filter']))) : [];
			$articles = new WP_Query([
				'cat' => $cat,
			]);

			if ($articles->have_posts()) {
				while ($articles->have_posts()): $articles->the_post();
					$tags = wp_get_post_tags($post->ID);

					if (count($tags)) {
						foreach ($tags as $tag) {
							$articletags = $tag->to_array();
							$articletags = explode(',', $articletags['name']);
							if (count($articletags)) {
								foreach ($articletags as $articletag) {
									if ($articletag !== '') {
										array_push($filters, ucfirst(trim($articletag)));
										array_push($search_tag, trim($articletag));
									}
								}
							}
						}
					}
				endwhile;
			}
			$search_tag = array_unique($search_tag);
			$search_tag = implode(',', $search_tag);
			$filters = array_unique($filters);
			$page = get_the_ID();
			?>

            <div class="row">
				<?php if (count($filters)) : ?>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="main_desk_filter from_bottom_interval">
                            <ul class="filter_list row">

								<?php foreach ($filters as $filter) : ?>
                                    <li class="col-auto">
                                        <a href="<?= makeFilterLink($_GET, slugify($filter)) ?>"
                                           class="<?= checkIfFilterExists($_GET,
											   slugify($filter)) ? 'is-checked' : '' ?>">
											<?= $filter ?>
                                        </a>
                                    </li>
								<?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
				<?php
				endif;
				wp_reset_postdata(); ?>
            </div>

			<?php if (isset($_GET['filter'])) : ?>
                <div class="text-center position-relative" style="z-index: 100">
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-info">
                        <svg width="20" height="20">
                            <use xlink:href="#basket-icon"></use>
                        </svg>
						<?= __('Очистити фільтри'); ?>
                    </a>
                </div>
			<?php endif; ?>

        </div>
    </section>

    <!-- articles section -->

<?php
switch (pll_current_language()) {
	case 'uk' :
		$cat = 'statti';
		break;
	case 'ru':
		$cat = 'stati';
		break;
	default :
		$cat = 'articles';
}
?>

    <posts category="<?= $cat ?>"
           filters="<?= implode(',', $currentFilters) ?>"
           button-text="<?= __('Більше статей'); ?>"></posts>


<?php get_footer();
