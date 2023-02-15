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
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/dist/css/styles.css" />
    <?php wp_head();?>
</head>

<body>
    <span class="bg-grad"></span>
    <nav class="navbar bi-navbar fixed-top navbar-expand-lg navbar-light px-xxl-5 py-lg-4">
        <div class="container-lg container-fluid px-lg-3">
            <a class="navbar-brand logo" href="<?php echo get_site_url() ?>">
                <img src="<?php bloginfo('template_directory')?>/dist/img/logo.png" alt="Logo" class="img-fluid" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bi-navbar"
                aria-controls="bi-navbar" aria-expanded="false" aria-label="Toggle navigation"></button>

            <div class="collapse navbar-collapse justify-content-lg-between pt-lg-0 pt-3" id="bi-navbar">

                <div class="d-lg-flex">
                    <?php 
            
            // Primary navigation menu.
wp_nav_menu( array(
    'menu_class'     => 'nav-menu navbar-nav ms-lg-2 ms-xxl-5 mb-2 mb-lg-0',
    'theme_location' => 'main',
    'link_before'    => '',
    'walker'         => new trop_menu_walker(),
) );

            ?>

                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>"
                        class="search-box">
                        <input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Search.."
                            required />
                        <button class="btn-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>

                </div>

                <ul class="header-social d-lg-none d-xl-flex d-flex">
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

                <ul class="nav woocommerce-nav">
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
        </div>
    </nav>