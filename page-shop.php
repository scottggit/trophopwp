<?php get_header(); ?>
<div class="content">
    <section class="page-banner mb-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 offset-lg-1">
                    <div class="d-flex align-items-center h-100">

                        <div class="searchwrap shop-search">
                            <h1 class="display-1">Shop</h1>
                            <?PHP  echo do_shortcode('[searchandfilter id="491"]'); ?>
                 
                        </div>

                    </div>
                </div>
                <div class="lg-6 col-md-6 p-0 offset-lg-1">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/representative-banner.png" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="shop-bottom mt-5 pt-5" id="shop-bottom">
        <div class="container">
            <div class="row d-none">
                <div class="col-md-12 text-center">
                    <h2 class="display-3 mb-5">Other Products</h2>
                </div>
            </div>
      
            <?php   echo do_shortcode('[searchandfilter id="491" show="results"]'); ?>
              
          
            <div class="row mt-5 justify-content-center mb-5">
                <div class="col-md-auto">
                    <a  class="view-all">View All</a>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-top mb-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="display-3 mb-5">Coming Soon</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-back blueback">
                        <div class="img-wrap">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/fruited.png" alt="" class="w-100">
                        </div>
                    </div>
                    <h4>Tropical</h4>
                    <h3>Fruited</h3>
                    <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                    <a href="<?php echo get_site_url(); ?>/tropical-fruited/" class="learn-more">Learn More</a>
                </div>
                <div class="col-md-4">
                    <div class="img-back greenback">
                        <div class="img-wrap">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/light.png" alt="" class="w-100">
                        </div>
                    </div>

                    <h4>LUXURY</h4>
                    <h3>LIGHT LAGER</h3>
                    <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                    <a href="<?php echo get_site_url(); ?>/luxury-lightlager/" class="learn-more">Learn More</a>
                </div>
                <div class="col-md-4">
                    <div class="img-back orangeback">
                        <div class="img-wrap">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/wheat.png" alt="" class="w-100">
                        </div>
                    </div>
                    <h4>BEACH</h4>
                    <h3>WHEAT ALE</h3>
                    <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                    <a href="<?php echo get_site_url(); ?>/beach-wheat-ale/" class="learn-more">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>