<?php get_header();?>
<div class="content">
      <section class="page-banner mb-5 pb-5">
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 offset-lg-1">
         <div class="d-flex align-items-center h-100">

   <div class="searchwrap">
<h1 class="display-1">Shop</h1>
<form action="https://revealize.com/blogs" method="GET" class="search-form">
<input type="text" name="search" value="" class="form-control py-4" id="exampleInputEmail1" aria-describedby="First Name" placeholder=" Search by Product">
<button type="submit" class="animate__animated mobile__animate animate__slideInLeft" data-animate="slideInLeft" style="visibility: visible;"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
</div>
</div>
        </div>
        <div class="lg-6 col-md-6 p-0 offset-lg-1">
         <img src="<?php bloginfo('template_directory')?>/dist/img/representative-banner.png" alt="" class="w-100">
        </div>
      </div>
      </div>
      </section>

      <section class="shop-top mt-5 pt-5">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                  <div class="img-back blueback">
                  <div class="img-wrap">
                  <img src="<?php bloginfo('template_directory')?>/dist/img/fruited.png" alt="" class="w-100">
                  </div>
                  </div>
                  <h4>Tropical</h4>
                  <h3>Fruited</h3>
                  <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                  <a href="<?php echo get_site_url(); ?>/shop/tropical-fruited/" class="learn-more">Learn More</a>
            </div>
            <div class="col-md-4">
            <div class="img-back greenback">
                  <div class="img-wrap">
                  <img src="<?php bloginfo('template_directory')?>/dist/img/light.png" alt="" class="w-100">
                  </div>
                  </div>
       
                  <h4>LUXURY</h4>
                  <h3>LIGHT LAGER</h3>
                  <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                  <a href="<?php echo get_site_url(); ?>/shop/luxury-lightlager/" class="learn-more">Learn More</a>
            </div>
            <div class="col-md-4">
            <div class="img-back orangeback">
                  <div class="img-wrap">
                  <img src="<?php bloginfo('template_directory')?>/dist/img/wheat.png" alt="" class="w-100">
                  </div>
                  </div>
                  <h4>BEACH</h4>
                  <h3>WHEAT ALE</h3>
                  <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                  <a href="<?php echo get_site_url(); ?>/shop/beach-wheat-ale/" class="learn-more">Learn More</a>
            </div>
        </div></div>
      </section>

      <section class="shop-bottom mt-5 pt-5">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center">
                  <h2 class="display-3 mb-5">Other Products</h2>
            </div>
            </div>
            <div class="row text-center product-list">
            <?php 
    $args = array(
 'post_type'        => 'product',
'posts_per_page'   => -1,
);
$query = new WP_Query( $args ); 
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
$query->the_post(); 
?>

            <div class="col-lg-3 col-md-6">
            <div class="other-wrap">
                  <p><?php echo get_the_title(); ?></p>
                  <h5><?php if(get_field('price')){echo get_field('price');}else{echo 'Sold Out';} ?></h5>
                  <div class="img-wrap">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-100">
                  </div>
                  <a href="<?php echo get_field('product_url'); ?>" class="add-to-cart btn">View Product</a>
            </div>   </div>



            <?php
} // end while
} // end if
wp_reset_query();
    ?>
            </div>
            <div class="row mt-5 justify-content-center mb-5">
                  <div class="col-md-auto">
                        <a href="" class="view-all">View All</a>
                  </div>
            </div>
        </div>
      </section>
</div>
<?php get_footer();?>