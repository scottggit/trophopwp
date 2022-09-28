<?php get_header(); ?>
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
<div class="arrow-nav">
    <span class="up-section opacity-25" onclick="goCarousel('previous')">
        <img src="<?php bloginfo('template_directory') ?>/dist/img/arrow-up.svg" alt="" class="arrow-up">
    </span>
    <span class="down-section" onclick="goCarousel('next')">
        <img src="<?php bloginfo('template_directory') ?>/dist/img/arrow-down.svg" alt="" class="arrow-down">
    </span>
</div>
<div class="product-nav">
    <small>OUR BEERS</small>
    <ul>
        <li><a href="<?php echo get_site_url() ?>/tropical-fruited/"><img src="<?php bloginfo('template_directory') ?>/dist/img/tropical-fruited-single.png" alt="Tropical Fruited"></a></li>
        <li><a href="<?php echo get_site_url() ?>/luxury-lightlager/" class="opacity-50"><img src="<?php bloginfo('template_directory') ?>/dist/img/luxury-lightlager-single.png" alt="Luxury Lightlager"></a></li>
        <li><a href="<?php echo get_site_url() ?>/beach-wheat-ale/"><img src="<?php bloginfo('template_directory') ?>/dist/img/beach-wheat-ale-single.png" alt="Beach Wheat Ale"></a></li>
    </ul>
</div>
<div class="main-container">
    <section class="first">
        <div class="section-content py-5 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-end justify-content-sm-start">
                    <div class="col-6 col-sm-5 order-sm-2">
                        <div class="product-tri">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/luxury-lightlager-single.png" alt="" class="can can-1">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/luxury-lightlager-single.png" alt="" class="can can-2">
                            <img src="<?php bloginfo('template_directory') ?>/dist/img/luxury-lightlager-single.png" alt="" class="can can-3">
                        </div>
                    </div>
                    <div class="col-sm-7 pe-sm-5">
                        <small>Authenticity in every sip</small>
                        <h1 class="display-1 mb-3">
                            LUXURY <br />
                            LIGHTLAGER
                        </h1>

                        <div class="row justify-content-lg-end">
                            <div class="col-xxl-5 offset-xxl-2 col-lg-6">
                                <div class="br-meta">
                                    <span class="line-2"></span>
                                    <p class="h3 text-end"><strong>95KCAL</strong></p>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-lg-6">
                                <p class="font-smaller">
                                    Compellingly optimize backend leadership vis-a-vis collaborative technology. Compellingly implement orthogonal
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
                    $('.up-section').addClass('opacity-25');
                }
                if (sec == 'second') {
                    $('.product-tri img').addClass('slideUp');
                    $('.sec2Img').removeClass('slideUp');
                    $('.sec3Img').addClass('slideUp');
                    $('.up-section').removeClass('opacity-25');
                    $('.down-section').removeClass('opacity-25');
                }

                if (sec == 'third') {
                    $('.sec2Img').addClass('slideUp');
                    $('.sec3Img').removeClass('slideUp');
                    $('.down-section').addClass('opacity-25');
                }
            }
        })
    });

    function getCarouselPositions() {
        carouselPositions = [];
        document.querySelectorAll('.main-container section').forEach(function(div) {
            carouselPositions.push([div.offsetTop, div.offsetTop + div.offsetHeight]); // add to array the positions information
        })
        halfContainer = document.querySelector('.main-container').offsetHeight / 2;
    }

    getCarouselPositions(); // call it once

    function goCarousel(direction) {

        var currentScrollTop = document.querySelector('.main-container').scrollTop;
        var currentScrollBottom = currentScrollTop + document.querySelector('.main-container').offsetHeight;

        if (currentScrollTop === 0 && direction === 'next') {
            currentItem = 1;
        } else if (currentScrollBottom === document.querySelector('.main-container').scrollHeight && direction === 'previous') {
            console.log('here')
            currentItem = carouselPositions.length - 2;
        } else {
            var currentMiddlePosition = currentScrollTop + halfContainer;
            for (var i = 0; i < carouselPositions.length; i++) {
                if (currentMiddlePosition > carouselPositions[i][0] && currentMiddlePosition < carouselPositions[i][1]) {
                    currentItem = i;
                    if (direction === 'next') {
                        currentItem++;
                    } else if (direction === 'previous') {
                        currentItem--
                    }
                }
            }
        }

        document.querySelector('.main-container').scrollTo({
            top: carouselPositions[currentItem][0],
            behavior: 'smooth'
        });

    }
    window.addEventListener('resize', getCarouselPositions);
</script>