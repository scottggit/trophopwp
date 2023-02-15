<?php //Template Name: Store Location Map 
get_header();

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'            => 'store'
));

$posts = array_map(function ($posts) {
    $posts->lat = get_field('latitude', $posts->ID);
    $posts->long = get_field('longitude', $posts->ID);
    return $posts;
}, $posts);
?>

<style>
.accordion .accordion-button::after {
    width: 2rem !important;
    height: 2rem !important;
    stroke: #dbb383;
    background-position: center;
    background-color: unset !important;
    border-radius: 0.5rem;
    box-shadow: unset !important;
    background-repeat: no-repeat;
    background-size: contain !important;
    background: url(<?php bloginfo('template_directory') ?>/dist/img/arrow-circle.png);
}

.accordion-button:not(.collapsed)::after {
    transform: rotate(-270deg);
    background-repeat: no-repeat;
    background-size: contain !important;
    background: url(<?php bloginfo('template_directory') ?>/dist/img/arrow-circle.png);
}

.pac-container {
    z-index: 999999
}

#map {
    height: 85vh;
}

.leaflet-popup-content-wrapper {
    width: 100%;
}

.modal .feather-map-pin path {
    stroke: #DBB383 !important
}

.feather-map-pin path {
    stroke: #fff !important
}

.feather-arrow-right-circle circle,
.feather-arrow-right-circle polyline,
.feather-arrow-right-circle line {
    stroke: #DBB383
}

.accordion .accordion-button:focus,
select:focus {
    box-shadow: unset !important
}

.collapse {
    visibility: visible !important;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
    integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
    integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHpIrWe6jS9_BmMgGXNO-IUKP_thlDvIs&libraries=places"></script>

<div class="content">
    <section class="page-banner" style="background:#F8F8FF">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-xl-5 col-lg-6-custom p-0  order-md-2 mb-4 mb-md-0">
                    <img src="<?php bloginfo('template_directory') ?>/dist/img/representative-banner.png" alt=""
                        class="w-100 rep-banner">
                </div>
                <div class="col-lg-5  offset-custom-md col-md-5 col-12 offset-lg-2 offset-md-1 order-md-1">
                    <div class="d-flex align-items-center h-100">
                        <div class="searchwrap">
                            <h1 class="display-1 mb-4"><span class="bg-title-light">Where To Buy</span></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="demo"></div>

    <section class="map">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-9 px-0">
                    <div class="bg-[#DBB383] p-5 relative">
                        <div class="loader absolute z-[999] bg-[#00000033] top-0 bottom-0 right-0 left-0 d-flex">
                            <div class="m-auto">
                                <i data-feather="loader" class="fa fa-loader fa-spin"></i>
                            </div>
                        </div>

                        <div class="container d-flex">
                            <div class="d-flex w-50">
                                <div class="my-auto mr-2">
                                    <i data-feather="map-pin" class="text-white stroke-[#fff] w-[25px] h-[25px] "></i>
                                </div>

                                <div class="relative w-100">
                                    <input id="autocomplete"
                                        class="options text-white w-100 focus:outline-none my-auto pb-1 uppercase text-[20px] placeholder-[#fefff5a6] bg-transparent border-b-[1px] border-b-[#fff]"
                                        placeholder="Enter a Location" />

                                    <div id="searchResult"
                                        class=" max-h-[300px] overflow-scroll d-none bg-white options absolute z-[999] left-0 right-0 rounded-[12px] px-[19px] py-[10px] mt-[10px]">
                                        <p class="cursor-pointer">Searching...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex w-10 mx-5 my-auto text-center">
                                <p class="text-white text-center w-100">IN</p>
                            </div>

                            <div class="d-flex w-40 my-auto">
                                <select id="miles-select"
                                    class="focus:outline-none text-[20px] text-white w-100 bg-transparent border-b-[1px] border-b-[#fff]">
                                    <option value="10">10 Miles</option>
                                    <option value="20">20 Miles</option>
                                    <option value="30">30 Miles</option>
                                    <option value="40">40 Miles</option>
                                    <option selected value="100">100 Miles</option>
                                    <option value="200">200 Miles</option>
                                    <option value="300">300 Miles</option>
                                    <option value="400">400 Miles</option>
                                    <option value="500">500 Miles</option>
                                    <option value="1000">1000 Miles</option>
                                    <option value="2000">2000 Miles</option>
                                    <option value="5000">5000 Miles</option>
                                    <option value="8000">8000 Miles</option>
                                    <option value="10000">10,000 Miles</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="map"></div>
                </div>
                <div class="col-md-3 px-0 relative">
                    <div class="loader-side">
                        <div class="absolute z-[999] bg-[#00000033] top-0 bottom-0 right-0 left-0 d-flex">
                            <div class="m-auto">
                                <i data-feather="loader" class="fa fa-loader fa-spin"></i>
                            </div>
                        </div>
                    </div>
                    <div class="" style='overflow:scroll;height:100%;'>
                        <div class="accordion accordion-flush" id="accordionFlushExample" style='height:100vh;'>
                            <?php foreach ($posts as $post) : ?>
                            <div class="accordion-item mb-0">
                                <h2 class="accordion-header" id="flush-<?php echo $post->ID ?>">
                                    <button style="border-bottom: 1px solid #EFEFF5; border-radius: 0"
                                        class="accordion-button collapsed bg-transparent" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $post->ID ?>" aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $post->ID ?>">
                                        <span class="d-block w-[60%]">
                                            <p class="text-[#DBB383]">
                                                <?php echo the_field('name') ?>
                                            </p>
                                            <p class="text-[#3E4852] text-[14px]"> <?php echo the_field('address') ?>
                                            </p>
                                        </span>
                                        <p class="text-[#3E4852] text-[14px] my-auto pl-4 mile"></p>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?php echo $post->ID ?>" class="accordion-collapse collapse"
                                    aria-labelledby="flush-<?php echo $post->ID ?>"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" data-lat=" <?php echo the_field('lat') ?>"
                                        data-lon=" <?php echo the_field('lon') ?>">
                                        <div>testpage1</div>
                                        <a target="_blank" class="direction-btn d-none"> <button
                                                class="bg-[#3E4852] px-3 py-2 uppercase text-white">Direction</button></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Modal -->
<!-- <div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Find and Select Your Location</h5>
            </div>
            <div class="modal-body">
                <div class="d-flex px-1">
                    <div class="my-auto">
                        <i data-feather="map-pin" class="text-white stroke-[#DBB383] w-[25px] h-[25px] "></i>
                    </div>

                    <input type="text" class="ml-3 my-auto text-[#DBB383] w-100 focus:outline-none my-auto pb-1 uppercase text-[18px] placeholder-[#00000094] bg-transparent border-b-[1px] border-b-[#DBB383]" required id="autocomplete" placeholder="Find Your Location">

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
      <form>
    </div>
  </div>
</div> -->

<script>
let lon, lat;
google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
    autocomplete = new google.maps.places.Autocomplete(
        (document.getElementById('autocomplete')), {
            types: ['geocode']
        }
    );

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        var place = autocomplete.getPlace();
        let selectMile = $('#miles-select').val();
        lon = place.geometry.location.lng();
        lat = place.geometry.location.lat();
        locationApi(place.geometry.location.lat(), place.geometry.location.lng(), selectMile);
        map.setView(new L.LatLng(lat, lon), 8);
    });
}

jQuery(document).on('change', '#miles-select', function(res) {
    locationApi(lat, lon, $(this).val());
});

locationApi('', '', '');

function locationApi(lat, lon, selectMile, id = null) {
    $('.loader-side').removeClass('d-none');
    fetch(`/location-api?lat1=${lat}&lon1=${lon}&selectMile=${selectMile}&fun=dis`)
        .then(response => response.json())
        .then(dis => {
            if (!dis?.length) {
                $('#accordionFlushExample').html(`
                        <p class="font-weight-light">No Store Found!</p>
                    `);
                $('.loader-side').addClass('d-none');
                return;
            }

            $allEle = '';
            dis.forEach(res => {
                $allEle += `<div class="accordion-item mb-0 acc-${res.ID}">
                        <h2 class="accordion-header" id="flush-${res.ID}">
                            <button style="border-bottom: 1px solid #EFEFF5; border-radius: 0" class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse${res.ID}" aria-expanded="false" aria-controls="flush-collapse${res.ID}">
                                <span class="d-block w-[60%]">
                                    <p class="text-[#DBB383] storename">
                                        ${res.name}
                                    </p>
                                    <p class="text-[#3E4852] text-[14px]">      ${res.address} </p>
                                </span>
                                <p class="text-[#3E4852] text-[14px] my-auto px-3 mile">${res.distance.toFixed(2)} miles</p>
                            </button>
                        </h2>
                        <div id="flush-collapse${res.ID}" class="accordion-collapse collapse" aria-labelledby="flush-${res.ID}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" data-lat="${res.lat2}" data-lon="${res.lon2}">
                                <div class="mb-2"><i class="fa fa-map-marker-alt text-[#DBB383]"></i> ${res.address}, ${res.town}</div>
                                ${res?.phone ? '<div class="mb-2"><i class="fa fa-phone-alt text-[#DBB383]"></i>'+ res.phone +'</div>' : ''} 
                                ${res?.email ? '<div class="mb-2"><i class="fa fa-paper-plane text-[#DBB383]"></i> '+res?.email+'</div>' : ''}

                                <div class="d-flex">
                                    <a target="_blank" href="https://www.google.com/maps/dir/?api=1&origin=${res.lat1},${res.long1}&destination=${res.lat2},${res.lon2}" class="direction-btn"> <button class="bg-[#3E4852] px-3 py-2 uppercase text-white">Direction</button></a>
                                    ${res?.website ? '<a target="_blank" href=""> <button class="bg-[#fff] px-3 py-2 uppercase text-[#3E4852]" style="box-shadow: 0px 4px 10px #47599314;">Website</button></a>' : '' }
                                </div>
                            </div>
                        </div>
                    </div>`
            })

            $('#accordionFlushExample').html($allEle);
            $('.loader').addClass('d-none');
            $('.loader-side').addClass('d-none');

            if (id) {
                $('.accordion-item').hide();
                $(`.acc-${id}`).show();
            }
        })
        .catch(err => console.log(err));
}
</script>


<script>
$(function() {
    let userLocation = localStorage.getItem('user-location');
    if (userLocation) {
        userLocation = JSON.parse(userLocation);
        jQuery('#exampleModalCenter').modal('hide');
    } else {
        jQuery('#exampleModalCenter').modal('show');
    }
})

let lat1;
let lon2;

var map = L.map('map', {
    center: [38.89, -77.03],
    zoom: 14
});

let store = <?php echo json_encode($posts); ?>;

var tiles = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

let marker = {};

store.forEach(res => {
    marker[res.ID] = new L.marker([res.lat.replace(',', ''), res.long.replace(',', '')])
        .bindPopup(res.post_title)
        .addTo(map);

    marker[res.ID].addTo(map);

    marker[res.ID].on('click', () => {
        locationApi('', '', '', res.ID);
    })
});
</script>

<script>
feather.replace();
</script>

<script>
var x = document.getElementById("demo");

function searchStore(e) {
    let selectMile = $('#miles-select').val();
    $('#searchResult').removeClass('d-none');

    let userLocation = localStorage.getItem('user-location');
    if (userLocation) {
        userLocation = JSON.parse(userLocation);
    }

    fetch(
            `/location-api?lat1=${userLocation.lat}&lon1=${userLocation.lon}&fun=searchStore&search=${e.target.value}&selectMile=${selectMile}`)
        .then(response => response.json())
        .then(res => {

            if (res == '') {
                document.getElementById('searchResult').innerHTML = '<p class="p-5">No Data Found!</p>';
                return;
            }

            $all =
                `<p data-id="reset" class=" border p-1 rounded-[6px] px-2 pb-1 mb-2 border-bottom cursor-pointer search-option hover:bg-[#f0f0f0]">&times; Reset Search</p>`

            res.forEach(search => {
                $all +=
                    `<p data-id="${search.ID}" data-lat="${search['lat']}" data-long="${search['long']}" class="pb-1 mb-2 border-bottom cursor-pointer search-option hover:bg-[#f0f0f0]"> ${search['name']} </p>`
            })

            document.getElementById('searchResult').innerHTML = $all
        })
        .catch(err => console.log(err))
}

// document.getElementById('seachInput')
// .addEventListener('keyup', searchStore)

$(document).on('click', '.search-option', function() {

    if ($(this).attr('data-id') == 'reset') {
        $('.accordion-item').show();
        return
    }

    map.setView(new L.LatLng($(this).attr('data-lat'), $(this).attr('data-long')), 15);
    marker[$(this).attr('data-id')].openPopup();
    $('#searchResult').addClass('d-none');
    $('.accordion-item').hide();
    $(`.acc-${$(this).attr('data-id')}`).show();
})

$(document).on('focusin', '#seachInput', function() {
    $('#searchResult').removeClass('d-none');
});

$(document).on('click', '.accordion-item', function() {
    var id = $(this).find('.accordion-header').attr('id').replace('flush-', '');
    var lat = $(this).find('.accordion-body').attr('data-lat');
    var lon = $(this).find('.accordion-body').attr('data-lon');

    map.setView(new L.LatLng(lat, lon), 15);
    marker[id].openPopup();
})
</script>

<?php get_footer(); ?>