<?php get_header();

?>
<style>
  html {
    margin: 0 !important;
  }

  #wpadminbar {
    display: none;
  }

  #shopwp-root {
    display: none;
  }
</style>
<div class="content">
  <section class="home-banner mb-5 pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-6 offset-lg-2 mb-5 mb-lg-0 order-lg-1 order-2">
          <div class="d-flex align-items-center h-100">
            <div class="banner-left-wrap">
              <h4>Authenticity in every sip</h4>
              <h1 class="display-1">TROP HOP</h1>
              <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogonal </p>
              <a href="<?php echo get_site_url() ?>/shop" class="btn shop">Shop Merchandise</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 p-md-0 p-lg-0 position-relative  order-lg-2 order-1 pb-lg-0 pb-5 mb-lg-0 mb-5">
          <div class="img-wrap">
            <img src="<?php bloginfo('template_directory') ?>/dist/img/home-banner.png" alt="" class="w-100">
          </div>
          <div class="big-can-img">
            <img src="<?php bloginfo('template_directory') ?>/dist/img/bigcan.png" alt="" class=" animate__animated" data-animate="fadeInRight">
          </div>
        </div>
      </div>
  </section>

  <section class="tropical-fruited mt-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <img src="<?php bloginfo('template_directory') ?>/dist/img/tropical-fruited.png" alt="" class="w-100 animate__animated" data-animate="fadeInLeft">
        </div>
        <div class="col-md-5">
          <h3>Tropical</h3>
          <h1 class="display-3">Fruited</h1>
          <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogona</p>
          <ul class="theme-list">
            <li>
              Lorem ipsum dolor sit amet onsetetur </li>
            <li> sadipscing Selitr diam nonumy eirmod tempor invidunt ut </li>
            <li> labore Dolore magna aliquyam erat, sed diam
            </li>
          </ul>
          <a href="<?php echo get_site_url(); ?>/tropical-fruited/" class="learn-more">Learn More</a>
        </div>
      </div>
    </div>
  </section>


  <section class="light-lager mt-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-lg-1 order-2">
          <h3>Luxury</h3>
          <h1 class="display-3">LIGHT LAGER</h1>
          <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogona</p>
          <ul class="theme-list">
            <li>
              Lorem ipsum dolor sit amet onsetetur </li>
            <li> sadipscing Selitr diam nonumy eirmod tempor invidunt ut </li>
            <li> labore Dolore magna aliquyam erat, sed diam
            </li>
          </ul>
          <a href="<?php echo get_site_url(); ?>/luxury-lightlager/" class="learn-more">Learn More</a>
        </div>
        <div class="col-md-6 order-lg-2 order-1 mb-lg-0 mb-5">
          <img src="<?php bloginfo('template_directory') ?>/dist/img/light-lager.png" alt="" class="w-100 animate__animated" data-animate="fadeInRight">
        </div>

      </div>
    </div>
  </section>



  <section class="wheat-ale mt-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <img src="<?php bloginfo('template_directory') ?>/dist/img/wheat-ale.png" alt="" class="w-100 animate__animated" data-animate="fadeInLeft">
        </div>
        <div class="col-md-5">
          <h3>Beach</h3>
          <h1 class="display-3">Wheat Ale</h1>
          <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogona</p>
          <ul class="theme-list">
            <li>
              Lorem ipsum dolor sit amet onsetetur </li>
            <li> sadipscing Selitr diam nonumy eirmod tempor invidunt ut </li>
            <li> labore Dolore magna aliquyam erat, sed diam
            </li>
          </ul>
          <a href="<?php echo get_site_url(); ?>/beach-wheat-ale/" class="learn-more">Learn More</a>
        </div>


      </div>
    </div>
  </section>



  <section class="collection mt-5 pt-5">
    <div class="container">

      <div class="row mb-5">

        <div class="col-md-12 text-center">

          <h3 class="animate__animated" data-animate="slideInUp">Shop</h3>
          <h2 class="display-3 animate__animated" data-animate="slideInUp">Products</h2>
        </div>

      </div>

      <div class="section-4 py-5 mb-5 slick-w-custom-nav">


        <div class="animate__animated" data-animate="slideInUp">
          <div class="hat-img_carousel slick_shadow slick_trigger">
            <?php
            $args = array(
              'post_type'        => 'product',
              'posts_per_page'   => -1,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
            ?>

                <span class="logo-img_container">
                  <p><?php echo get_the_title(); ?></p>
                  <div class="price"><?php if (get_field('price')) {
                                        echo get_field('price');
                                      } else {
                                        echo 'Sold Out';
                                      } ?></div>
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Logo" class="img-fluid">
                  <a href="<?php echo get_field('product_url'); ?>" class="btn add-to-cart">View Product</a>
                </span>

            <?php
              } // end while
            } // end if
            wp_reset_query();
            ?>

          </div>
        </div>

      </div>
    </div>
  </section>


</div>

<?php get_footer(); ?>