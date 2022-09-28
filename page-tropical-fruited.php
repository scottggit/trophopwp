<?php /* Template Name: Beers Single */ ?>
<?php get_header(); ?>
<div class="main-container">
    <section class="first">
        <div class="section-content py-5 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-end justify-content-sm-start">
                    <div class="col-6 col-sm-6 order-sm-2">
                        <div class="product-tri">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/1.png" alt="" class="can can-1">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/1.png" alt="" class="can can-2">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/1.png" alt="" class="can can-3">
                        </div>
                    </div>
                    <div class="col-sm-6 pe-sm-5">
                        <small>Authenticity in every sip</small>
                        <h1 class="display-1 mb-3">
                            TROPICAL <br />
                            FRUITED
                        </h1>

                        <div class="row justify-content-lg-end">
                            <div class="col-xxl-5 offset-xxl-2 col-lg-6">
                                <div class="br-meta">
                                    <span class="line-1"></span>
                                    <p class="h3 text-end"><strong>IP 6.1%</strong></p>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-lg-6">
                                <p class="font-smaller">
                                    Compellingly optimize backend leadership is-a-vis collaborative technology. Compellingly implement orthogonal
                                </p>
                                <a href="#" class="btn btn-dark"> <img src="<?php bloginfo('template_directory') ?>/dist/img/cart.svg" alt="" class="btn-cart me-2"> SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second">
        <div class="section-content py-5 mt-5">
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
                                <a href="#" class="btn btn-dark">OUR DISTRIBUTION</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/Group 202@2x.png" alt="" class="img-fluid imgSlideUp sec2Img slideUp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="third">
        <div class="section-content py-5 mt-5">
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
                                <a href="#" class="btn btn-dark">WHERE TO BUY</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/Group 203@2x.png" alt="" class="img-fluid imgSlideUp sec3Img slideUp">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer('beer'); ?>
<script>
    $(window).bind('load scroll', function() {
        if ($(window).scrollTop() > 10) {
            $('.product-tri .can').addClass('slideUp');
        } else {
            $('.product-tri .can').removeClass('slideUp');
        }
    });

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    document.querySelector('.main-container').addEventListener('scroll', (e) => {
        jQuery('.main-container section').map(function(e) {
            let ele = jQuery(`.main-container section:eq(${e})`);

            if (isInViewport(ele[0])) {
                let sec = jQuery(ele).attr('class');
                
                if (sec == 'first') {
                    $('.product-tri img').removeClass('slideUp');
                    $('.sec2Img').addClass('slideUp');
                }
                if (sec == 'second') {
                    $('.product-tri img').addClass('slideUp');
                    $('.sec2Img').removeClass('slideUp');
                    $('.sec3Img').addClass('slideUp');
                }

                if (sec == 'third') {
                    $('.sec2Img').addClass('slideUp');
                    $('.sec3Img').removeClass('slideUp');
                }
            }
        })
    });
</script>