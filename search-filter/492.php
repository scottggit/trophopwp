<?php

/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

$count = 0;
if ($query->have_posts()) {
	$total_posts = $query->found_posts;
?>
	<?php

	$current_page = $query->query_vars['paged'];
	$current_post_count = $query->post_count - 1;
	$posts_per_page = $query->query_vars['posts_per_page'];
	$total_posts = $query->found_posts;

	$posts_start = ($current_page - 1) * $posts_per_page + 1;
	if ($posts_per_page > $total_posts) {
		$posts_start = 1;
	}
	$posts_end = $posts_start + $current_post_count;

	?>

	<div class="row mb-lg-5 pb-5">
		<?php
		while ($query->have_posts()) {
			$query->the_post();
		?>

			<div class="col-xl-3 col-lg-4 col-md-6 store-spacing">
				<div class="strore-wrap bg-white h-100">
					<div class="logo">
						<?php if (get_field('logo')) { ?>
							<img src="<?php echo get_field('logo'); ?>" alt="">
						<?php } else { ?>
							<img src="<?php bloginfo('template_directory') ?>/dist/img/logo_placeholder.png" alt="">
						<?php } ?>
					</div>
					<div class="desc-wrap">
						<p class="name text-dark font-bold mb-0"><?php echo get_the_title(); ?></p>
						<?php if (get_field('address')) { ?>
							<small class="d-flex align-items-start location"><img src="<?php bloginfo('template_directory') ?>/dist/img/location.png" alt=""> <?php echo get_field('town'); ?>, <?php echo get_field('address'); ?></small>
						<?php } ?>
						<?php if (get_field('phone')) { ?>

							<small class="d-flex align-items-start phone"><img src="<?php bloginfo('template_directory') ?>/dist/img/phone.png" alt=""><?php echo get_field('phone'); ?></small>
						<?php } ?>
						<?php if (get_field('email')) { ?>
							<small class="d-flex align-items-start email"><img src="<?php bloginfo('template_directory') ?>/dist/img/email-primary.svg" alt=""><?php echo get_field('email'); ?></small>
						<?php } ?>
						<?php if (get_field('time')) { ?>
							<small class="d-flex align-items-start clock"><img src="<?php bloginfo('template_directory') ?>/dist/img/clock.png" alt=""><?php echo get_field('time'); ?></small>
						<?php } ?>
					</div>

					<div class="btn-wrap d-flex flex-wrap gap-2">
						<a href="https://www.google.com/maps?q=<?php echo get_field('latitude'); ?>,<?php echo get_field('longitude'); ?>" class="directions" target="_blan">Directions</a>
						<a href="<?php echo get_field('website'); ?>" class="website shadow-sm" target="_blank">Website</a>
					</div>
				</div>
			</div>
			<?php $count++; ?>
		<?php
		}
		?>
	</div>
	<?php // Pagination
	$total = $query->max_num_pages;

	// only bother with pagination if we have more than 1 page
	if ($total > 1) : ?>
		<div class="wp-pagenavi">
			<?php
			// Set up pagination to use later on
			$big = 999999999; // need an unlikely integer
			$pagination = paginate_links(array(
				'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'format'    => '?paged=%#%',
				'current'   => $current_page,
				'total'     => $total,
				'type'      => 'plain',
				'prev_next' => false,
				'prev_text' => __('', 'visceral'),
				'next_text' => __('', 'visceral')
			));

			echo $pagination; ?>
		</div>
	<?php endif; ?>

<?php
} else {
	echo "No Results Found";
}
?>