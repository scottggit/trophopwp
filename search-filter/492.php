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

$count=0;
if ( $query->have_posts() ){
	$total_posts = $query->found_posts;
	?>
	<?php

$current_page = $query->query_vars['paged'];
$current_post_count = $query->post_count - 1;
$posts_per_page = $query->query_vars['posts_per_page'];
$total_posts = $query->found_posts;

$posts_start = ($current_page - 1 ) * $posts_per_page + 1;
if( $posts_per_page > $total_posts ) {
	$posts_start = 1;
}
$posts_end = $posts_start + $current_post_count;

?>

	<div class="row ">
		<?php
			while ($query->have_posts()){
			$query->the_post();
		?>
	 
<div class="col-lg-3 col-md-6">  
<div class="strore-wrap">

          <div class="logo">
            <?php if(get_field('logo')){ ?>
      <img src="<?php  echo get_field('logo'); ?>" alt="">
      <?php }else{ ?>
        <img src="<?php bloginfo('template_directory')?>/dist/img/logo_placeholder.png" alt="">
    <?php } ?>
          </div>
<div class="desc-wrap">
      <h3 class="name"><?php echo get_the_title(); ?></h3>
      <?php if(get_field('address')){ ?>
      <div class="location"><img src="<?php bloginfo('template_directory')?>/dist/img/location.png" alt=""> <?php echo get_field('town');?>, <?php echo get_field('address');?></div>
      <?php } ?>
      <?php if(get_field('phone')){ ?>

      <div class="phone"><img src="<?php bloginfo('template_directory')?>/dist/img/phone.png" alt=""><?php echo get_field('phone');?></div>
      <?php } ?>
      <?php if(get_field('email')){ ?>
      <div class="email"><img src="<?php bloginfo('template_directory')?>/dist/img/email.png" alt=""><?php echo get_field('email');?></div>
      <?php } ?>
      <?php if(get_field('time')){ ?>
      <div class="clock"><img src="<?php bloginfo('template_directory')?>/dist/img/clock.png" alt=""><?php echo get_field('time');?></div>
      <?php } ?>
      </div>

      <div class="btn-wrap">
            <a href="https://www.google.com/maps?q=<?php echo get_field('latitude'); ?>,<?php echo get_field('longitude'); ?>" class="directions">Directions</a>
            <a href="<?php echo get_field('website');?>" class="website">Website</a>
      </div>
      </div>
</div>
		<?php  $count++; ?>
		<?php
			}
		?>
	<?php // Pagination
	$total = $query->max_num_pages;

	// only bother with pagination if we have more than 1 page
	if ( $total > 1 ) : ?>
		<div class="wp-pagenavi">
			<?php
			// Set up pagination to use later on
			$big = 999999999; // need an unlikely integer
			$pagination = paginate_links( array(
				'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'    => '?paged=%#%',
				'current'   => $current_page,
				'total'     => $total,
				'type'      => 'plain',
				'prev_next' => false,
				'prev_text' => __('', 'visceral'),
				'next_text' => __('', 'visceral')
			) );

			echo $pagination; ?>
		</div>
	<?php endif; ?>
	</div>

	<?php
}
else
{
	echo "No Results Found";
}
?>