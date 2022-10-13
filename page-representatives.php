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
                            <?PHP  echo do_shortcode('[searchandfilter id="301"]'); ?>
                         
                        </div>
                    </div>
                </div>
      </div>
      </div>
      </section>

      <section class="stores " id="stores">
        <div class="container">
        <?PHP  echo do_shortcode('[searchandfilter id="301" show="results"]'); ?>  

      </section>
</div>
<?php get_footer();?>
<script>
$('.previouspostslink, .page, .last, .nextpostslink').each( function(i,a) {
         $(a).attr('href',$(a).attr('href')+'#stores');
   
     });
</script>