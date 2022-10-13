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


?>

	<div class="row text-center product-list">
		<?php
			while ($query->have_posts()){
			$query->the_post();
		?>
	  <div class="col-lg-3 col-md-6 mb-4">
	  <div class="product-container bg-light-c">
                                <p><?php echo get_the_title(); ?></p>
                                <div class="price">
                                    <?php if (get_field('price')) {
                                        echo '$' . get_field('price');
                                    } else {
                                        echo 'Sold Out';
                                    } ?>
                                </div>
                                <div class="product-img-container">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Logo" class="img-fluid">
                                </div>
                                <a href="<?php echo get_field('product_url'); ?>" class="btn add-to-cart">View Product</a>
                            </div>
		</div>
		<?php  $count++; ?>
		<?php
			}
		?>
			
	</div>

	<?php
}
else
{
	echo "No Results Found";
}
?>