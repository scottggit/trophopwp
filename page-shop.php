<?php get_header(); ?>
<div class="content">
    <section class="page-banner mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 p-0 offset-lg-1 order-md-2 mb-4 mb-md-0">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/representative-banner.png" alt="" class="w-100 rep-banner">
                </div>
                <div class="col-lg-5 col-md-6 order-md-1">
                    <div class="d-flex align-items-center h-100">
                        <div class="searchwrap stores-search">
                            <h1 class="display-1 mb-4"><span class="bg-title-light position-relative pe-lg-2 z-2">Shop</span></h1>
                            <?PHP echo do_shortcode('[searchandfilter id="491"]'); ?>

                        </div>
                    </div>
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

            <?php echo do_shortcode('[searchandfilter id="491" show="results"]'); ?>


            <div class="row mt-5 justify-content-center mb-5">
                <div class="col-md-auto">
                    <a class="view-all">View All</a>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-top mb-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="display-3 font-daylight mb-5">Coming Soon</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-back blueback">
                        <div class="img-wrap">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/fruited.png" alt="" class="w-100">
                        </div>
                    </div>
                    <h5 class="mt-4 mb-0 text-uppercase font-light ls-10">Tropical</h5>
                    <h3 class="h1">Fruited</h3>
                    <span class="line-divide line-blueback"></span>
                    <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                    <a href="<?php echo get_site_url(); ?>/tropical-fruited/" class="btn btn-white btn-hover-dark mt-0">Learn More</a>
                </div>
                <div class="col-md-4">
                    <div class="img-back greenback">
                        <div class="img-wrap">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/light.png" alt="" class="w-100">
                        </div>
                    </div>

                    <h5 class="mt-4 mb-0 text-uppercase font-light ls-10">LUXURY</h5>
                    <h3 class="h1">LIGHT LAGER</h3>
                    <span class="line-divide line-greenback"></span>
                    <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                    <a href="<?php echo get_site_url(); ?>/luxury-lightlager/" class="btn btn-white btn-hover-dark mt-0">Learn More</a>
                </div>
                <div class="col-md-4">
                    <div class="img-back orangeback">
                        <div class="img-wrap">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/wheat.png" alt="" class="w-100">
                        </div>
                    </div>
                    <h5 class="mt-4 mb-0 text-uppercase font-light ls-10">BEACH</h5>
                    <h3 class="h1">WHEAT ALE</h3>
                    <span class="line-divide line-orangeback"></span>
                    <p>Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement </p>
                    <a href="<?php echo get_site_url(); ?>/beach-wheat-ale/" class="btn btn-white btn-hover-dark mt-0">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>