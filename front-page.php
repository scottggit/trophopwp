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

.hat-img_carousel .product-container {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}
</style>
<div class="content">
    <section class="home-banner mb-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12 offset-lg-2 offset-md-1 mb-5 mb-lg-0 order-lg-1 order-1">
                    <div class="d-flex align-items-center h-100">
                        <div class="banner-left-wrap">
                            <h4 class=" animate__animated" data-animate="fadeIn">Authenticity in every sip</h4>
                            <h1 class="display-1 animate__animated" data-animate="fadeIn">TROP HOP</h1>
                            <p class=" animate__animated" data-animate="fadeIn">“Trophop was developed to be
                                appreciable, tropical, and easy drinking.”</p>
                            <a href="<?php echo get_site_url() ?>/shop" class="btn shop animate__animated"
                                data-animate="fadeIn">Shop Merchandise</a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 col-12 col-lg-5 p-md-0 p-lg-0 position-relative  order-lg-2 order-2 pb-lg-0 pb-5 mb-lg-0 mb-5">
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/home-banner.jpg" alt=""
                            class="w-100">
                    </div>
                    <div class="big-can-img">
                        <div class=" animate__animated" data-animate="fadeInRight">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/bigcan2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="tropical-fruited mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 animate__animated" data-animate="fadeInLeft">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/tropical-fruited.png" alt=""
                        class="w-100">
                </div>
                <div class="col-md-5">
                    <h3 class=" animate__animated" data-animate="fadeInUp">Tropical</h3>
                    <h1 class="display-3 animate__animated" data-animate="fadeInUp">Fruited</h1>
                    <p class=" animate__animated" data-animate="fadeInUp">Compellingly optimize backend leadership
                        vis-a-vis collaborative technology. Compellingly implement orthogona</p>
                    <ul class="theme-list animate__animated" data-animate="fadeInUp">
                        <li>This IPA was developed to be appreciable, tropical, and easy drinking</li>
                        <li>An India Pale Ale with grapefruit and passionfruit flavor</li>
                        <li>6.1% ALC/Vol</li>
                    </ul>
                    <a href="<?php echo get_site_url(); ?>/tropical-fruited/" class="learn-more animate__animated"
                        data-animate="fadeInUp">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="light-lager mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-lg-1 order-2">
                    <h3 class=" animate__animated" data-animate="fadeInUp">Luxury</h3>
                    <h1 class="display-3 animate__animated" data-animate="fadeInUp">LIGHT LAGER</h1>
                    <p class=" animate__animated" data-animate="fadeInUp">Compellingly optimize backend leadership
                        vis-a-vis collaborative technology. Compellingly implement orthogona</p>
                    <ul class="theme-list animate__animated" data-animate="fadeInUp">
                        <li>This release is crafted to be just as approachable as the original</li>
                        <li>95 calories</li>
                        <li>4.0% ALC./Vol</li>
                    </ul>
                    <a href="<?php echo get_site_url(); ?>/luxury-lightlager/" class="learn-more animate__animated"
                        data-animate="fadeInUp">Learn More</a>
                </div>
                <div class="col-md-6 order-lg-2 order-1 mb-lg-0 mb-5 animate__animated" data-animate="fadeInRight">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/light-lager.png" alt="" class="w-100">
                </div>

            </div>
        </div>
    </section>

    <section class="wheat-ale mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/wheat-ale.png" alt=""
                        class="w-100 animate__animated" data-animate="fadeInLeft">
                </div>
                <div class="col-md-5">
                    <h3 class=" animate__animated" data-animate="fadeInUp">Beach</h3>
                    <h1 class="display-3 animate__animated" data-animate="fadeInUp">Wheat Ale</h1>
                    <p class=" animate__animated" data-animate="fadeInUp">Compellingly optimize backend leadership
                        vis-a-vis collaborative technology. Compellingly implement orthogona</p>
                    <ul class="theme-list animate__animated" data-animate="fadeInUp">
                        <li>This release is crafted to be just as approachable as the original</li>
                        <li>4.5% Alc./Vo</li>
                    </ul>
                    <a href="<?php echo get_site_url(); ?>/beach-wheat-ale/" class="learn-more animate__animated"
                        data-animate="fadeInUp">Learn More</a>
                </div>


            </div>
        </div>
    </section>

    <section class="collection mt-5 pt-5">
        <div class="container">

            <div class="row mb-5">

                <div class="col-md-12 text-center">
                    <h3 class="h1 animate__animated mb-n-2" data-animate="slideInUp">Shop</h3>
                    <h2 class="display-1 animate__animated" data-animate="slideInUp">Products</h2>
                </div>

            </div>

            <div class="section-4 py-5 mb-5 slick-w-custom-nav">
                <div class="animate__animated" data-animate="slideInUp">
                    <div class="hat-img_carousel slick_shadow slick_trigger">
                        <?php
						$args = array(
							'post_type'        => 'product',
							'posts_per_page'   => 9,
						);
						$query = new WP_Query($args);
						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
						?>
                        <div class="product-container bg-light-c">
                            <p><?php echo get_the_title(); ?></p>
                            <div class="price <?php if (!get_field('price')) {
															echo 'text-primary';
														} ?>">
                                <?php if (get_field('price')) {
											echo '$' . get_field('price');
										} else {
											echo 'Sold Out';
										} ?>
                            </div>
                            <div class="product-img-container">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Logo" class="img-fluid">
                            </div>
                            <a href="<?php echo get_field('product_url'); ?>"
                                class="btn btn-white btn-hover-dark add-to-cart">View Product</a>
                        </div>
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