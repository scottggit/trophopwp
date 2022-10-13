<?php get_header();?>
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
      <section class="page-banner mb-5 pb-5">
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 p-0 offset-lg-1 order-md-2 mb-4 mb-md-0">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/representative-banner.png" alt="" class="w-100 rep-banner">
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-1 order-md-1">
                    <div class="d-flex align-items-center h-100">
                        <div class="searchwrap">
                            <h1 class="display-1 mb-4"><span class="bg-title-white">Distribution</span></h1>
                            <form action="https://revealize.com/blogs" method="GET" class="search-form">
                                <input type="text" name="search" value="" class="form-control py-4 fa-1x" id="exampleInputEmail1" aria-describedby="First Name" placeholder=" Search">
                                <button type="submit" class="animate__animated mobile__animate animate__slideInLeft" data-animate="slideInLeft" style="visibility: visible;"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
      </div>
      </div>
      </section>

      <section class="stores mt-5 pt-5">
        <div class="container">
<div class="row">
    <?php 
    $args = array(
 'post_type'        => 'store',
'posts_per_page'   => -1,
);
$query = new WP_Query( $args ); 
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
$query->the_post(); 
?>

<div class="col-lg-3 col-md-6">  
<div class="strore-wrap">

          <div class="logo">
            <?php if(get_field('logo')){ ?>
      <img src="<?php  echo get_field('logo'); ?>" alt="">
      <?php }else{ ?>
        <img src="<?php bloginfo('template_directory')?>/dist/img/logo_placeholder.png" alt="">
    <?php } ?>
          </div>
<div class="desc-wrap">
      <h3 class="name"><?php echo get_the_title(); ?></h3>
      <?php if(get_field('address')){ ?>
      <div class="location"><img src="<?php bloginfo('template_directory')?>/dist/img/location.png" alt=""> <?php echo get_field('town');?>, <?php echo get_field('address');?></div>
      <?php } ?>
      <?php if(get_field('phone')){ ?>

      <div class="phone"><img src="<?php bloginfo('template_directory')?>/dist/img/phone.png" alt=""><?php echo get_field('phone');?></div>
      <?php } ?>
      <?php if(get_field('email')){ ?>
      <div class="email"><img src="<?php bloginfo('template_directory')?>/dist/img/email.png" alt=""><?php echo get_field('email');?></div>
      <?php } ?>
      <?php if(get_field('time')){ ?>
      <div class="clock"><img src="<?php bloginfo('template_directory')?>/dist/img/clock.png" alt=""><?php echo get_field('time');?></div>
      <?php } ?>
      </div>

      <div class="btn-wrap">
            <a href="https://www.google.com/maps?q=<?php echo get_field('latitude'); ?>,<?php echo get_field('longitude'); ?>" class="directions">Directions</a>
            <a href="<?php echo get_field('website');?>" class="website">Website</a>
      </div>
      </div>
</div>



<?php
} // end while
} // end if
wp_reset_query();
    ?>
</div>
<!-- 
<div class="row">
<div class="wp-pagenavi" role="navigation">
<div class="row pagination-blog mt-3"><div class="col"><ul class="d-flex justify-content-center"><li><span aria-current="page" class="current">1</span></li><li><a class="page larger" title="Page 2" href="https://www.saastock.com/blog/page/2/#all-posts">2</a></li><li><a class="page larger" title="Page 3" href="https://www.saastock.com/blog/page/3/#all-posts">3</a></li><li><a class="page larger" title="Page 4" href="https://www.saastock.com/blog/page/4/#all-posts">4</a></li><li><a class="page larger" title="Page 5" href="https://www.saastock.com/blog/page/5/#all-posts">5</a></li><li><a class="next">Next</a></li></ul></div></div>
</div>
</div> -->

</div>
      </section>
</div>
<?php get_footer();?>