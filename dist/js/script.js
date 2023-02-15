/* Set Background Image */
$(".bg-img").each(function () {
  var imgSrc = $(this).attr("data-background-image");
  if (imgSrc != undefined) {
    $(this).css("background-image", 'url("' + imgSrc + '")');
    //$(this).parent().css('background-position', '50% 0%');
  }
});

$(".blog_inner_carousel").slick({
  autoplay: true,
  autoplaySpeed: 9000,
  dots: true,
  arrows: false,
});
$(".blog_slick").slick({
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 1,
      },
    },
  ],
});

$(".testimonial_slick").slick({
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        arrows: false,
        slidesToShow: 1,
      },
    },
  ],
});
/* Logo Carousel Start */
$(".hat-img_carousel").slick({
  slidesToShow: 4,
  dots: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: true,
        slidesToShow: 3,
        dots: true,
      },
    },
    {
      breakpoint: 767,
      settings: {
        arrows: true,
        slidesToShow: 2,
        dots: true,
      },
    },
    {
      breakpoint: 360,
      settings: {
        arrows: true,
        slidesToShow: 1,
        dots: true,
      },
    },
  ],
});
$(".custom_nav").on("click", ".fake-prev", function (event) {
  $(this)
    .closest(".slick-w-custom-nav")
    .find(".slick_trigger")
    .slick("slickPrev");
});
$(".custom_nav").on("click", ".fake-next", function (event) {
  $(this)
    .closest(".slick-w-custom-nav")
    .find(".slick_trigger")
    .slick("slickNext");
});
/* Logo Carousel End */

$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 100) {
      //clearHeader, not clearheader - caps H
      $("body").addClass("fixednav");
    } else {
      $("body").removeClass("fixednav");
    }
  }); //missing );

  /* Element Animate */
  $(".animate__animated").scrolla({
    once: true,
  });

  /* Scroll Script */
  window.addEventListener(
    "scroll",
    () => {
      document.body.style.setProperty(
        "--scroll",
        window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
      );
    },
    false
  );
});