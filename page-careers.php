<?php get_header();?>
<main class="site-main">
            <div class="secondary-banner secondary-banner--careers">
               <div class="secondary-banner__bg js-banner-parallax-img" style="background-image: url(<?php bloginfo('template_directory')?>/images/banner-careers.jpg);"></div>
               <div class="container">
                  <div class="row gutters-100">
                     <div class="col-lg-6 col-md-8 content-holder fadeInUp has-bullet-list">
                        <h1>Future-proof <strong>your career</strong></h1>
                        <p class="lead">
                           With a growing elderly population, U.S. medical insurance costs are only expected to rise. 
                           With the rising cost will be the need for premier auditing solutions.
                        </p>
                        <a class="btn btn-primary" href="<?php echo get_site_url() ?>/contact">Inquire Today</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container-fluid">
               <div class="application-form-wrapper">
                  <div class="container">
                     <div class="inner-container bgImgWrapper">
                        <div class="bgImg js-parallax-img d-none d-md-block" style="background-image: url(<?php bloginfo('template_directory')?>/images/mateus-campos-felipe.jpg);"></div>
                        <div class="row no-gutters">
                           <div class="col-md content-holder fadeInUp">
                              <div class="bgImg js-parallax-img d-md-none" style="background-image: url(<?php bloginfo('template_directory')?>/images/mateus-campos-felipe-mobile.jpg);"></div>
                              <div class="tagline">Careers</div>
                              <h2>Work from home with flexible hours</h2>
                              <p>
                                 DRG Claims Management is currently seeking qualified health information management coding professionals for remote full-time positions, and part-time positions with flexible hours, up to 30 hours per week. This is a unique opportunity for self-motivated individuals.
                              </p>
                              <a class="btn btn-primary" href="<?php echo get_site_url() ?>/contact">Learn More</a>
                           </div>
                           <div class="col-md-6 application-form fadeInUp">
                           <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1" html_class="row"]'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
<?php get_footer();?>