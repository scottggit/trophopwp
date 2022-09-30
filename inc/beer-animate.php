<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
<script>
    /* Snap To Scroll */
    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.defaults({
        toggleActions: "restart pause resume pause",
    });

    const sections = gsap.utils.toArray("section");

    ScrollTrigger.create({
        trigger: ".first",
        start: "top top",
        endTrigger: ".last",
        end: "bottom bottom",

        snap: {
            snapTo: 1 / (sections.length - 1),
            duration: {
                min: 0.5,
                max: 0.5
            }, // the snap animation should be at least 0.25 seconds, but no more than 0.75 seconds (determined by velocity)
            delay: 0.25, // wait 0.125 seconds from the last scroll event before doing the snapping
            ease: "power1.inOut", // the ease of the snap animation ("power3" by default)
        },
    });

    gsap.defaults({
        ease: "power3"
    });
    gsap.set(".imgSlideUp", {
        y: 200,
        opacity: 0,
    });

    ScrollTrigger.batch(".imgSlideUp", {
        interval: 0.1, // time window (in seconds) for batching to occur. 
        //batchMax: 3,   // maximum batch size (targets)
        onEnter: batch => gsap.to(batch, {
            opacity: 1,
            y: 0,
            stagger: {
                each: 0.15,
                grid: [1, 3]
            },
            overwrite: true
        }),
        onLeave: batch => gsap.to(batch, {
            opacity: 0,
            y: -100,
            stagger: {
                each: 0.15,
                grid: [1, 3]
            },
            overwrite: true
        }),
        onEnterBack: batch => gsap.to(batch, {
            opacity: 1,
            y: 0,
            stagger: 0.15,
            overwrite: true
        }),
        onLeaveBack: batch => gsap.to(batch, {
            opacity: 0,
            y: 200,
            overwrite: true
        }),
        start: "-200px bottom",
        end: "200px top"
        // you can also define things like start, end, etc.
    });

    ScrollTrigger.batch(".can", {
        interval: 0.1, // time window (in seconds) for batching to occur. 
        //batchMax: 3,   // maximum batch size (targets)
        onLeave: batch => gsap.to(batch, {
            opacity: 0,
            y: -400,
            stagger: 0.15,
            overwrite: true
        }),
        onEnterBack: batch => gsap.to(batch, {
            opacity: 1,
            y: 0,
            stagger: 0.15,
            overwrite: true
        }),
        onLeaveBack: batch => gsap.set(batch, {
            opacity: 0,
            y: 400,
            overwrite: true
        }),
        start: "top bottom",
        end: "bottom-=300 top+=200"
        // you can also define things like start, end, etc.
    });


    window.addEventListener("load", function() {
        jQuery('.arrow-nav').on('click', '.up-section', function() {
            var prev = $(".active").prev();
            console.log(prev);
            if (prev.length != 0) {
                $('.main-container > section').removeClass('active');
                prev.addClass('active');
                var cls = prev.offset().top;
                $("html, body").animate({
                    scrollTop: cls
                }, "slow");
                if (prev.prev().length != 0) {
                    $(this).removeClass('opacity-25');
                } else {
                    $(this).addClass('opacity-25');
                }
                var next = $(".active").next();
                if (next.length != 0) {
                    $('.down-section').removeClass('opacity-25');
                } else {
                    $('.down-section').addClass('opacity-25');
                }
            }
        });
        jQuery('.arrow-nav').on('click', '.down-section', function() {
            var next = $(".active").next();
            console.log(next);
            if (next.length != 0) {
                $('.main-container > section').removeClass('active');
                next.addClass('active');
                var cls = next.offset().top;
                $("html, body").animate({
                    scrollTop: cls
                }, "slow");
                if (next.next().length != 0) {
                    $(this).removeClass('opacity-25');
                } else {
                    $(this).addClass('opacity-25');
                }
                var prev = $(".active").prev();
                if (prev.length != 0) {
                    $('.up-section').removeClass('opacity-25');
                } else {
                    $('.up-section').addClass('opacity-25');
                }
            }
        });
        jQuery(document).scroll(function() {
            if (jQuery('.second').offset().top === $(window).scrollTop()) {
                jQuery('section').removeClass('active');
                jQuery('.second').addClass('active');
                $('.up-section').removeClass('opacity-25');
                $('.down-section').removeClass('opacity-25');
            } else if ($(window).scrollTop() === 0) {
                jQuery('section').removeClass('active');
                jQuery('.first').addClass('active');
                $('.up-section').addClass('opacity-25');
                $('.down-section').removeClass('opacity-25');
            } else if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                jQuery('section').removeClass('active');
                jQuery('.last').addClass('active');
                $('.up-section').removeClass('opacity-25');
                $('.down-section').addClass('opacity-25');
            }
        });
    });
</script>