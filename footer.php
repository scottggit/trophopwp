<footer>

    <div class="footer-lg py-5">
        <div class="container">
            <div class="d-flex flex-wrap gap-4 justify-content-around justify-content-md-between align-items-center">
                <img src="<?php bloginfo('template_directory') ?>/dist/img/footer-logo.png" alt="Logo" class="footer-logo mb-5 mb-md-0 w-100" />
                <?php echo clm_footer1_nav(); ?>

                <div class="d-flex align-items-center lh-2 mb-5">
                    <div class="icon-wrap">
                        <img src="<?php bloginfo('template_directory') ?>/dist/img/email.svg" alt="Phone" class="icon-email" />
                    </div>
                    <div class="email-wrap">
                        <span class="d-block text-muted">Email</span>
                        <a href="mailto:info@trophopbeer.com">info@trophopbeer.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-mn">
        <div class="container">
            <div class="footer-cprt d-flex justify-content-center justify-content-md-between flex-wrap gap-3">
                <span>© <?php echo date('Y') ?>, Trophop Beers</span>
                <ul class="social-container">
                    <li class="d-none"><a href=""><i class="fa fa-brands fa-facebook-f"></i></a></li>
                    <li class="mb-0"><a href="https://www.instagram.com/trophopbeers/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <g id="instagram" transform="translate(-1.076 -1.076)">
                                    <rect id="Rectangle_18" data-name="Rectangle 18" width="16" height="16" transform="translate(2.076 2.076)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_20" data-name="Path 20" d="M14.488,10.721a3.24,3.24,0,1,1-2.73-2.73A3.24,3.24,0,0,1,14.488,10.721Z" transform="translate(-1.172 -1.155)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_21" data-name="Path 21" d="M17.5,6.5h.008" transform="translate(-2.969 -0.879)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                            </svg>
                        </a></li>
                    <li class="d-none"><a href=""><i class="fa fa-brands fa-youtube"></i></a></li>
                </ul>
                <ul class="nav d-flex flex-wrap gap-3">
                    <li class="mb-0">
                        <a href="">Privacy Policy</a>
                    </li>
                    <li class="mb-0">
                        <a href="">Terms Of Use</a>
                    </li>
                </ul>
                <span>Designed & Developed by <a href="https://revealize.com/" target="_blank"><strong>Revealize</strong></span></a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/dist/js/jquery.scrolla.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/dist/js/script.js"></script>
<script>
    /* ----- JavaScript ----- */

    $("#reset-session").click(function() {
        $(".popup-banner-left-wrap").append(
            " <p style='color: red;font-size: 1.2rem;margin-top: 1rem;font-weight: 600;}'>YOU MUST BE OF LEGAL DRINKING AGE TO VIEW THIS SITE</p>."
        );
    });

    $(document).ready(function() {

        if (sessionStorage.getItem('advertOnce') !== 'true') {
            //sessionStorage.setItem('advertOnce','true');
            $('#popup').show();
            $('body').css('overflow-y', 'hidden');
        } else {
            $('#popup').hide();
            $('body').css('overflow-y', 'scroll');
        }

        /* Cache the popup. */
        var popup = document.getElementById("popup");

        /* Show the popup. */
        popup.classList.remove("hidden");

        /* Fade the popup in */
        setTimeout(() => popup.classList.add("fade-in"));

        /* Close the popup when a city is selected. */
        $('#refresh-page').on('click', function() {
            $('body').css('overflow-y', 'scroll');
            /* Fade the popup out */
            popup.classList.remove("fade-in");

            /* Hide the popup. */
            setTimeout(() => popup.classList.add("hidden"), 300);
            sessionStorage.setItem('advertOnce', 'true');
        });

    });

    $(".product-list>div").hide();
    $(".product-list>div:lt(8)").show();
    $('.shop-bottom .view-all').click(function() {
        $(".product-list>div").show('slide');
        $(this).hide();
    });

    $('.sf-field-search label').prepend($(
        '  <button class="animate__animated mobile__animate animate__slideInLeft" data-animate="slideInLeft" style="visibility: visible;"><i class="fa-solid fa-magnifying-glass"></i></button>'
    ));

    $('.searchandfilter').addClass('search-form');


    $('.sf-input-text').attr('placeholder', 'Search by product');

    $('.shop-search  .sf-input-text').keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            $('html, body').animate({
                scrollTop: $("#shop-bottom").offset().top - 100
            }, 800);


        }
    });

    $('.stores-search .sf-input-text').keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            $('html, body').animate({
                scrollTop: $("#stores").offset().top - 100
            }, 800);
        }
    });
    jQuery(document).scroll(function() {
        var windowTop = $(window).scrollTop();
        console.log(windowTop);
        if (windowTop > 100) {
            $('.navbar.bi-navbar').removeClass('py-lg-3').addClass('py-lg-1');
        } else {
            $('.navbar.bi-navbar').removeClass('py-lg-1').addClass('py-lg-3');

        }
    });
</script>
<?php wp_footer(); ?>

</body>

</html>