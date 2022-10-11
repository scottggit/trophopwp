<?php get_header(); ?>
<div class="product-nav">
    <small>OUR BEERS</small>
    <ul>
        <li><a href="<?php echo get_site_url() ?>/shop/tropical-fruited/"><img src="<?php bloginfo('template_directory') ?>/dist/img/tropical-fruited-single.png" alt="Tropical Fruited"></a></li>
        <li><a href="<?php echo get_site_url() ?>/shop/luxury-lightlager/"><img src="<?php bloginfo('template_directory') ?>/dist/img/luxury-lightlager-single.png" alt="Luxury Lightlager"></a></li>
        <li><a href="<?php echo get_site_url() ?>/shop/beach-wheat-ale/" class="opacity-50"><img src="<?php bloginfo('template_directory') ?>/dist/img/beach-wheat-ale-single.png" alt="Beach Wheat Ale"></a></li>
    </ul>
</div>
<div class="main-container">
    <section class="first active">
        <div class="section-content py-5">
            <div class="container">
                <div class="row align-items-center justify-content-end justify-content-sm-start">
                    <div class="col-6 col-sm-5 order-sm-2">
                        <div class="product-tri">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/beach-wheat-ale-single.png" alt="" class="can can-1">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/beach-wheat-ale-single.png" alt="" class="can can-2">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/beach-wheat-ale-single.png" alt="" class="can can-3">
                        </div>
                    </div>
                    <div class="col-sm-7 pe-sm-5">
                        <small>Authenticity in every sip</small>
                        <h1 class="display-1 mb-3">
                            BEACH <br />
                            WHEAT ALE
                        </h1>

                        <div class="row justify-content-lg-end">
                            <div class="col-xxl-5 offset-xxl-2 col-lg-6">
                            </div>
                            <div class="col-xxl-5 col-lg-6">
                                <p class="font-smaller">
                                    Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogonal
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second">
        <div class="section-content py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6 pe-sm-5">
                        <h3 class="h1 display-2 mb-3">
                            Looking to carry this beer?
                        </h3>

                        <div class="row justify-content-lg-end">
                            <div class="col-xxl-5 offset-xxl-7 col-lg-8 offset-lg-4">
                                <p class="font-smaller">
                                    Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogonal products after intermandated outsourcing.
                                </p>
                                <a href="<?php echo get_site_url(); ?>/representatives/" class="btn btn-dark">OUR DISTRIBUTION</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/Group 202@2x.png" alt="" class="img-fluid imgSlideUp secImg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="last">
        <div class="section-content py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6 pe-sm-5">
                        <h3 class="h1 display-2 mb-3">
                            Looking to find this beer?
                        </h3>

                        <div class="row justify-content-lg-end">
                            <div class="col-xxl-5 offset-xxl-7 col-lg-8 offset-lg-4">
                                <p class="font-smaller">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                </p>
                                <a href="<?php echo get_site_url(); ?>/where-to-buy/" class="btn btn-dark">WHERE TO BUY</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/Group 203@2x.png" alt="" class="img-fluid imgSlideUp secImg">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include get_template_directory() . '/inc/beer-animate.php';?>
<?php get_footer('beer'); ?>