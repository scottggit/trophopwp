<?php get_header(); ?>
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
    <section class="page-banner pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-xl-5 col-lg-6-custom p-0  order-md-2 mb-4 mb-md-0">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/representative-banner.jpg" alt=""
                        class="w-100 rep-banner">
                </div>
                <div class="col-lg-5  offset-custom-md col-md-5 col-12 offset-lg-2 offset-md-1 order-md-1">
                    <div class="d-flex align-items-center h-100">
                        <div class="searchwrap stores-search">
                            <h1 class="display-1 mb-4"><span
                                    class="bg-title-light position-relative pe-lg-2 z-2">Distribution</span></h1>
                            <?PHP /* echo do_shortcode('[searchandfilter id="492"]'); */?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stores pb-5" id="stores">
        <div class="container">


            <?php
						$args = array(
							'post_type'        => 'representative',
							'posts_per_page'   => -1,
                            'orderby' => 'menu_order',
                            'order'=>'DESC'
						);
						$query = new WP_Query($args);
						if ($query->have_posts()) {
                            $i=1;
							while ($query->have_posts()) {
								$query->the_post();
						?>

            <?php if($i%2==0){
?>
            <div class="row py-5">
                <div class="col-md-6 order-md-2">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-100 pb-5 pb-lg-0">
                </div>
                <div class="col-md-4 offset-md-2  order-md-1">
                    <h5><?php echo get_field('state')?></h5>
                    <h2 class="mb-5"><?php the_title(); ?></h2>
                    <a class="btn btn-white btn-hover-dark animate__animated"
                        href="<?php echo get_field('link')['url']?>"><?php echo get_field('link')['title']; ?></a>
                </div>



            </div>
            <?php
                        }else{
?>
            <div class="row py-5">
                <div class="col-md-6">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-100 pb-5 pb-lg-0">
                </div>
                <div class="col-md-5 offset-md-1">
                    <h5><?php echo get_field('state')?></h5>
                    <h2 class="mb-5"><?php the_title(); ?></h2>
                    <a class="btn btn-white btn-hover-dark animate__animated"
                        href="<?php echo get_field('link')['url']?>"><?php echo get_field('link')['title']; ?></a>
                </div>



            </div>
            <?php                      } ?>

            <?php
            $i++;
							} // end while
						} // end if
						wp_reset_query();
						?>


    </section>
</div>
<?php get_footer(); ?>
<script>
$('.previouspostslink, .page, .last, .nextpostslink').each(function(i, a) {
    $(a).attr('href', $(a).attr('href') + '#stores');

});
</script>