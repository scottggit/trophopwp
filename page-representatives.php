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
                            <?PHP echo do_shortcode('[searchandfilter id="492"]'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stores " id="stores">
        <div class="container">
            <?PHP echo do_shortcode('[searchandfilter id="492" show="results"]'); ?>

    </section>
</div>
<?php get_footer(); ?>
<script>
$('.previouspostslink, .page, .last, .nextpostslink').each(function(i, a) {
    $(a).attr('href', $(a).attr('href') + '#stores');

});
</script>