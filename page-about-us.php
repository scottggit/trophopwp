<?php get_header(); ?>
<style>
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
    <section class="page-banner ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 p-0 offset-lg-1 order-md-2 mb-4 mb-md-0">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/representative-banner.png" alt="" class="w-100 rep-banner">
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-1 order-md-1">
                    <div class="d-flex align-items-center h-100">
                        <div class="searchwrap">
                            <h1 class="display-1 mb-4"><span class="bg-title-white">About Us</span></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/aboutus.png" alt="" class="w-100 img-2-lg-bg">
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center h-100">
                        <div class="about-desc mt-5">
                            <h2 class="display-2">Hey Friends!</h2>
                            <p>Thanks for coming to TropHop beers official page! We are so appreciative for your support through the years. I am forever grateful.</p>
                            <p>My passion for beer is what started my journey to develop TropHop. I started with my grapefruit and passion fruit IPA with its first launch in the summer of 2019 in Charleston, SC. Since then we have developed two more beers our luxury lager and the beachy wheat all being sold in SC, NC, FL, & AL! We are launching into new states and growing the brand every day. I have developed all my beers to be approachable and easy drinking. I hope you are all
                                enjoying it as much as I do!</p>
                            <p>I’m so sorry I can’t ship it to you yet. We are still working on that one, but we hope that we can
                                send you some merch instead.</p>
                            <div class="d-flex align-items-start gap-3 mb-5">
                                <img src="<?php bloginfo('template_directory') ?>/dist/img/quote-up.svg" alt="" class="img-fluid pt-2">
                                <div class="quotation">
                                    <h3>Austen Kroll</h3>
                                    <p class="lh-1 mb-0">Founder of Trophop beers</p>
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

    <section class="three-blocks-section  mb-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/target.svg" alt="" class="mb-5">
                    <h2>Our Mission</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/eye.svg" alt="" class="mb-5">
                    <h2>OUR VISION</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/diamond.svg" alt="" class="mb-5">
                    <h2>OUR VALUES</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>