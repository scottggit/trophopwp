<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Trop Hop</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/dist/css/styles.css" />
    <?php wp_head();?>
  </head>
  <body <?php body_class()?>>
    <span class="bg-grad"></span>
    <nav
      class="navbar bi-navbar fixed-top navbar-expand-lg navbar-light px-xxl-5 py-lg-4"
    >
      <div class="container-fluid px-lg-3">
        <a class="navbar-brand logo" href="/">
          <img src="<?php bloginfo('template_directory')?>/dist/img/logo.png" alt="Logo" class="img-fluid"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#bi-navbar"
          aria-controls="bi-navbar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        ></button>
        <div
          class="collapse navbar-collapse justify-content-lg-between ms-xl-3 ms-xxl-5"
          id="bi-navbar"
        >
          <ul class="nav-menu navbar-nav ms-lg-2 ms-xxl-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link" href="our_process.html">Shop</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="credit_app.html">Where to buy</a>
            </li>

           
            <li class="nav-item">
              <a class="nav-link" href="blogs.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.html">Contact Us</a>
            </li>
          </ul>
          <form action="#" class="search-box">
            <input
              type="search"
              name="search"
              placeholder="Search.."
              required
            />
            <button class="btn-search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
          <ul class="header-social d-lg-none d-xl-flex d-flex">
            <li>
              <a href="#">Facebook</a>
            </li>
            <li>
              <a href="#">Instagram</a>
            </li>
            <li>
              <a href="#">Youtube</a>
            </li>
       
          </ul>
       
          <ul class="nav woocommerce-nav">
            <li>
              <a href="">
                <img src="<?php bloginfo('template_directory')?>/dist/img/cart.svg" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php bloginfo('template_directory')?>/dist/img/user.svg" alt="">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

