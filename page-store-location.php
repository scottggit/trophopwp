<?php //Template Name: Store Location Map 
    get_header();

    $posts = get_posts(array(
	    'posts_per_page'	=> -1,
        'post_type'			=> 'store'
    ));
?>
<style>

    #map { 
    height: 100vh;
    }

    .leaflet-popup-content-wrapper {
    width: 100%;
    }

</style>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>


<div class="content">
    <section class="page-banner mb-5 pb-5" style="background:#F8F8FF">
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 offset-lg-1">
         <div class="d-flex align-items-center h-100">

    <div class="searchwrap" style="background:#F8F8FF; z-index: 99">
        <h1 class="display-1" style="background:#F8F8FF">Where To Buy</h1>
    </div>
    </div>
        </div>
        <div class="lg-6 col-md-6 p-0 offset-lg-1">
         <img src="https://trophop.testpage1.com/wp-content/themes/trophop/dist/img/representative-banner.png" alt="" class="w-100">
        </div>
      </div>
      </div>
      </section>

      <section class="map">
            <div class="row">
                <div class="col-md-10">
                    <div class="bg-[#DBB383] p-5">
                        <input placeholder="Search Location"/>
                    </div>
                    <div id="map"></div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
      </section>

</div>


<script>
    var map = L.map('map', {
        // Set latitude and longitude of the map center (required)
        center: [38.89, -77.03],
        // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
        zoom: 11
    });

    let store = <?php echo json_encode($posts); ?>;

    var tiles = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    for (var i = 0; i < store.length; i++) {

        // marker = new L.marker([planes[i][1],planes[i][2]])
        //     .bindPopup(planes[i][0])
        //     .addTo(map);
    }

    store.forEach(res => {
        <?php $id = "<script>document.write(res.Id)</script>"; ?>
        // var long = <?php echo get_field('latitude', $id ); ?>
        console.log(long);
    })


    marker.addTo(map).bindPopup("<p1><b>The White House</b><br>Landmark, historic home & office of the United States president, with tours for visitors.</p1>") .openPopup();
</script>

<?php echo $id; ?>
<?php get_footer(); ?>