<?php get_header(); ?>
<style>
    @media screen and (min-width: 1400px) {
        .aboutus-section .about-desc {
            margin-bottom: 0;
        }
    }

    @media screen and (min-width: 768px) {
        .bg-title-white {
            position: relative;
            isolation: isolate;
        }

        .bg-title-white::before {
            content: '';
            position: absolute;
            background-color: #fff;
            height: 80%;
            width: 100%;
            z-index: -1;
            top: 50%;
            transform: translateY(-50%);
        }

    }

    @media screen and (max-width: 767px) {
        .rep-banner {
            max-height: 40vh;
            object-fit: cover;
            object-position: bottom;
        }
    }
</style>
<div class="content">
    <section class="page-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-xl-5 col-lg-6-custom p-0  order-md-2 mb-4 mb-md-0">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/representative-banner.png" alt="" class="w-100 rep-banner">
                </div>
                <div class="col-lg-5  offset-custom-md col-md-5 col-12 offset-lg-2 offset-md-1 order-md-1">
                    <div class="d-flex align-items-center h-100">
                        <div class="searchwrap text-center text-md-start">
                            <h1 class="display-1 mb-4 title-sm"><span class="bg-title-light">About Us</span></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutus-section aboutus-section-1">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-8 col-md-6">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/aboutus.png" alt="" class="w-100 img-2-lg-bg d-none d-md-block">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/aboutus-sm.png" alt="" class="w-100 d-block d-md-none">
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center h-100">
                        <div class="about-desc mt-5 text-center text-md-start">
                            <h2 class="display-2">Hey y’all!</h2>
                            <p>Welcome to <b>Kings Calling Brewing Co.</b> Official merchandise site! We are a brewing
                                company located in Beautiful charleston, SC and our goal is to get delicious liquid in
                                your hands (and belly) but since we (unfortunately) can’t ship Trop Hop directly to you,
                                we hope that we can send you some merch instead!</p>
                            <div class="d-flex align-items-start justify-content-center justify-content-md-start gap-3 mb-5 pt-3">
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/quote-up.svg" alt="" class="img-fluid pt-2">
                                <div class="quotation">
                                    <h3>Austen Kroll</h3>
                                    <p class="lh-1 mb-0">Founder Kings Calling Brewing Co.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
<div class="row">
<div class="wp-pagenavi" role="navigation">
<div class="row pagination-blog mt-3"><div class="col"><ul class="d-flex justify-content-center"><li><span aria-current="page" class="current">1</span></li><li><a class="page larger" title="Page 2" href="https://www.saastock.com/blog/page/2/#all-posts">2</a></li><li><a class="page larger" title="Page 3" href="https://www.saastock.com/blog/page/3/#all-posts">3</a></li><li><a class="page larger" title="Page 4" href="https://www.saastock.com/blog/page/4/#all-posts">4</a></li><li><a class="page larger" title="Page 5" href="https://www.saastock.com/blog/page/5/#all-posts">5</a></li><li><a class="next">Next</a></li></ul></div></div>
</div>
</div> -->

        </div>
    </section>
    <?php /*
    <section class="three-blocks-section  mb-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/target.svg" alt="" class="mb-5">
    <h2>Our Mission</h2>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
        dolores et ea rebum. Stet clita kasd</p>
</div>
<div class="col-md-4">
    <img src="<?php bloginfo('template_directory') ?>/dist/img/eye.svg" alt="" class="mb-5">
    <h2>OUR VISION</h2>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
        dolores et ea rebum. Stet clita kasd</p>
</div>
<div class="col-md-4">
    <img src="<?php bloginfo('template_directory') ?>/dist/img/diamond.svg" alt="" class="mb-5">
    <h2>OUR VALUES</h2>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
        dolores et ea rebum. Stet clita kasd</p>
</div>
</div>
</div>
</section>
*/

    ?>
    <section class="aboutus-section-2">
        <div class="section-content py-5 my-5">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-md-start">
                    <div class="col-sm-6 order-sm-2">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/Group 202@2x.png" alt="" class="img-fluid imgSlideUp sec2Img slideUp animate__animated" data-animate="bounceInUp">
                    </div>
                    <div class="col-sm-6 order-sm-1 pe-sm-5 mt-5 mt-sm-0 text-center text-sm-start">
                        <h3 class="h1 display-1 title-md mb-4">
                            Looking to carry this beer?
                        </h3>

                        <div class="row justify-content-lg-end">
                            <div class="col-xxl-5 offset-xxl-7 col-lg-8 offset-lg-4">
                                <?php /*  <p class="font-smaller">
                                    Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogonal products after intermandated outsourcing.
                                </p>
                                */ ?>
                                <a href="<?php echo get_site_url(); ?>/representatives/" class="btn btn-dark">OUR
                                    DISTRIBUTION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutus-section-3">
        <div class="section-content py-5 my-5">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-md-start">
                    <div class="col-sm-6 order-sm-2">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/Group 203@2x.png" alt="" class="img-fluid imgSlideUp sec3Img slideUp animate__animated" data-animate="bounceInUp">
                    </div>
                    <div class="col-sm-6 pe-sm-5 mt-5 mt-sm-0 text-center text-sm-start">
                        <h3 class="h1 display-1 title-md mb-4">
                            Looking to find this beer?
                        </h3>

                        <div class="row justify-content-lg-end">
                            <div class="col-xxl-5 offset-xxl-7 col-lg-8 offset-lg-4">
                                <?php /*   <p class="font-smaller">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                </p>
                                        */ ?>
                                <a href="<?php echo get_site_url(); ?>/where-to-buy/" class="btn btn-dark">WHERE TO BUY
                                    Locator</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>