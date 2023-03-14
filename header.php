<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/dist/css/styles.css?v=0.0.03" />
    <?php wp_head(); ?>
    <style>
    .bi-navbar {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
    }
    </style>
</head>

<body>

    <!----- HTML ----->
    <div id="popup" class="hidden">
        <section class="popup-banner h-100">
            <div class="container-fluid h-100">
                <div class="row align-items-center h-100">
                    <div
                        class="col-lg-4 offset-custom-md col-md-4 col-12 offset-lg-1 offset-md-1 mb-5 mb-lg-0 order-lg-1 order-2">
                        <div class="d-flex align-items-center h-100">
                            <div class="popup-banner-left-wrap">
                                <h1 class="animate__animated" data-animate="fadeIn">YOU MUST BE <span
                                        style="color:#DBB383;">21</span> YERS OLD TO
                                    VISIT THIS SITE</h1>
                                <p class=" animate__animated" data-animate="fadeIn">PLEASE, VERIFY YOUR AGE.</p>
                                <div class="btn-wrap d-flex flex-wrap gap-2">

                                    <a id="refresh-page" class="btn  btn-hover-dark  animate__animated"
                                        data-animate="fadeIn" style="background:#DBB383;color:#fff;">YES, I
                                        AM OVER 21</a>
                                    <a href="#" id="reset-session"
                                        class="btn btn-white btn-hover-dark  animate__animated"
                                        data-animate="fadeIn">NO, I AM UNDER 21</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-5 col-12 col-xl-5  p-md-0 p-lg-0 offset-lg-2 offset-md-1 position-relative  order-lg-2 order-1 pb-lg-0  mb-lg-0">
                        <div class="img-wrap">
                            <div class="popup-big-can-img">
                                <div class=" animate__animated" data-animate="fadeInRight">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/img/popup.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <span class="bg-grad"></span>
    <nav class="navbar bi-navbar fixed-top navbar-expand-lg navbar-light px-xxl-4 py-lg-3">
        <div class="container-lg container-fluid">
            <a class="navbar-brand logo" href="<?php echo get_site_url() ?>">
                <img src="<?php bloginfo('template_directory') ?>/dist/img/logo.png" alt="Logo" class="img-fluid" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bi-navbar"
                aria-controls="bi-navbar" aria-expanded="false" aria-label="Toggle navigation"></button>

            <div class="collapse navbar-collapse justify-content-lg-between ms-xl-3 ms-xxl-5 pt-lg-0 pt-3"
                id="bi-navbar">

                <div class="d-lg-flex w-100 justify-content-lg-center">
                    <?php

                    // Primary navigation menu.
                    wp_nav_menu(array(
                        'menu_class'     => 'nav-menu navbar-nav ms-lg-2 ms-xxl-5 mb-2 mb-lg-0',
                        'theme_location' => 'main',
                        'link_before'    => '',
                        'walker'         => new trop_menu_walker(),
                    ));

                    ?>

                </div>

                <ul class="header-social d-none d-lg-nones d-xl-flexs d-flexs">
                    <li class="d-none">
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/trophopbeers/" target="_blank">Instagram</a>
                    </li>
                    <li class="d-none">
                        <a href="#">Youtube</a>
                    </li>

                </ul>

                <ul class="nav woocommerce-nav d-none">
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.37" height="14.762"
                                viewBox="0 0 15.37 14.762">
                                <g id="Icon_feather-shopping-cart" data-name="Icon feather-shopping-cart"
                                    transform="translate(-0.5 -0.5)">
                                    <path id="Path_7" data-name="Path 7"
                                        d="M13.215,30.608A.608.608,0,1,1,12.608,30,.608.608,0,0,1,13.215,30.608Z"
                                        transform="translate(-6.246 -16.953)" fill="none" stroke="#fff"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_8" data-name="Path 8"
                                        d="M29.715,30.608A.608.608,0,1,1,29.108,30,.608.608,0,0,1,29.715,30.608Z"
                                        transform="translate(-16.061 -16.953)" fill="none" stroke="#fff"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_9" data-name="Path 9"
                                        d="M1.5,1.5H3.931L5.56,9.637a1.215,1.215,0,0,0,1.215.978h5.907A1.215,1.215,0,0,0,13.9,9.637l.972-5.1H4.539"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </g>
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.416" height="14.843"
                                viewBox="0 0 13.416 14.843">
                                <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(-5 -3.5)">
                                    <path id="Path_12" data-name="Path 12"
                                        d="M17.416,26.781V25.354A2.854,2.854,0,0,0,14.562,22.5H8.854A2.854,2.854,0,0,0,6,25.354v1.427"
                                        transform="translate(0 -9.438)" fill="none" stroke="#fff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_13" data-name="Path 13"
                                        d="M17.708,7.354A2.854,2.854,0,1,1,14.854,4.5a2.854,2.854,0,0,1,2.854,2.854Z"
                                        transform="translate(-3.146 0)" fill="none" stroke="#fff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" />
                                </g>
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>
            <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>"
                class="search-box d-none d-lg-block">
                <input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Search.."
                    required />
                <button class="btn-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </nav>