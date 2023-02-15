<?php //Template Name: location-api 

    $lat1 = $_GET['lat1'];
    $lon1 = $_GET['lon1'];
    $lat2 = $_GET['lat2'];
    $lon2 = $_GET['lon2'];
    $fun = $_GET['fun'];
    $search = $_GET['search'];
    $selectMile = $_GET['selectMile'];

    function distance($lat1, $lon1, $lat2, $lon2, $unit) {
        $radlat1 = pi() * $lat1/180;
        $lat2 = preg_replace('/[^0-9.]+/', '', $lat2);
        $radlat2 = pi() * $lat2/180;
        $theta = $lon1 - $lon2;
        $radtheta = pi() * $theta/180;
        $dist = sin($radlat1) * sin($radlat2) + cos($radlat1) * cos($radlat2) * cos($radtheta);
        $dist = acos($dist);
        $dist = $dist * 180/pi();
        $dist = $dist * 60 * 1.1515;
        if ($unit=="K") { $dist = $dist * 1.609344; }
        if ($unit=="N") { $dist = $dist * 0.8684; }

        return $dist;
    }

    function getPostWithDistance($lat1, $lon1, $selectMile)
    {
        $posts = get_posts(array(
            'posts_per_page'	=> -1,
            'post_type'			=> 'store',
        ));

        $posts = array_map(function ($posts) use ($lat1, $lon1, $selectMile) {
            $lat2 = get_field('latitude', $posts->ID);
            $lon2 = get_field('longitude', $posts->ID);
            $distance = distance((float) $lat2,(float) $lon2, (float) $lat1, (float) $lon1, 'K') * 0.621371;

            $posts->lat1 = $lat1;
            $posts->long1 = $lon1;
            $posts->lat2 = $lat2;
            $posts->lon2 = $lon2;
            $posts->name = get_field('name', $posts->ID);
            $posts->address = get_field('address', $posts->ID);
            $posts->town = get_field('town', $posts->ID);
            $posts->website = get_field('website', $posts->ID);
            $posts->distance = $distance;

            if(empty($selectMile))
                return $posts;
                
            if(!empty($selectMile) && ($distance <= $selectMile)){
                return $posts;
            }

     
        }, $posts);


        return array_values(array_filter($posts));
    }

    if($fun == 'dis')
        echo json_encode(getPostWithDistance($lat1, $lon1, $selectMile));

    function searchStore(  $search, $lat1, $lon1, $selectMile )
    {
        $posts = get_posts(array(
            'posts_per_page'	=> -1,
            'post_type'			=> 'store',
            // 's' => $search,
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key' => 'address',
                    'value' => $search,
                    'compare' => "LIKE"
                ),
                array(
                    'key' => 'name',
                    'value' => $search,
                    'compare' => "LIKE"
                ),
                array(
                    'key' => 'town',
                    'value' => $search,
                    'compare' => "LIKE"
                )
            )
        ));

        $posts = array_map(function ($posts) use ($lat1, $lon1, $selectMile) {
            $posts->lat = get_field('latitude', $posts->ID);
            $posts->long = get_field('longitude', $posts->ID);
            $posts->lat1 = $lat1;
            $posts->long1 = $lon1;
            $posts->name = get_field('name', $posts->ID);
            $distance = distance((float) get_field('latitude', $posts->ID),(float) get_field('longitude', $posts->ID), (float) $lat1, (float) $lon1, 'K') * 0.621371;

            if($distance <= $selectMile)
                return $posts;
        }, $posts);


        return array_values(array_filter($posts));
    }

    if($fun == 'searchStore')
        echo json_encode(searchStore(  $search, $lat1, $lon1, $selectMile ));
?>