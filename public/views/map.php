
<!DOCTYPE html>



<html>
<head>
    <!--/**
    * Created by PhpStorm.
    * User: philr
    * Date: 21/02/2017
    * Time: 20:34
    */-->

    <style>
        html,
        body {
            font-family: Arial, sans-serif;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .container {
            height: 100%;
            position: relative;
        }

        input {
            font-size: 12px;
        }

        h1 {
            color: #525454;
            font-size: 22px;
            margin: 0 0 10px 0;
            text-align: center;
        }

        .map-filters {
            width: 80%;
        }

        p.filterLabel {
            font-size: 12px;
            line-height: 5px
        }

        #map {
            bottom: 0px;
            height: 100%;
            left: 188px;
            position: absolute;
            right: 0px;
        }

        .options-box {
            background: #fff;
            border: 1px solid #999;
            border-radius: 3px;
            height: 100%;
            line-height: 35px;
            padding: 10px 10px 30px 10px;
            text-align: center;
            width: 168px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
<div class="container">
    <div class="options-box">
        <h1>Gower Crags</h1>
        <div>
            <input class="map-filters" id="show-listings" type="button" value="Show All Listings">
            <input class="map-filters" id="hide-listings" type="button" value="Hide All Listings">
            <input class="map-filters" id="filterTrad" type="button" value="Trad Crags">
            <input class="map-filters" id="filterSport" type="button" value="Sport Crags">
            <input class="map-filters" id="filterTidal" type="button" value="Non-Tidal Crags">
            <p class="filterLabel">Tidal Range</p>
            <input class="map-filters" id="filterTidalRange" type="range" value="50">
        </div>
    </div>
    <div id="map"></div>
</div>
<script>
    var map;

    //creates a new blank arry for all the listing markers
    var markers = [];

    function initMap() {
        // Constructor create a new map, only center and zoom are required.
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 51.568552, lng: -4.123009},
            zoom: 12,
            mapTypeControl: true
        });

            /**
            *These are the locations that will be shown to the user.
            *Normally we'd have these in a database instead.
            */


        var apiUrl = ("/api/maps_crags");
        var largeInfoWindow = new google.maps.InfoWindow();

        /*var cragsBasic = $.getJSON(apiUrl);
        //var cragsBasic = JSON.parse(rawJSON.responseText);
        console.log(cragsBasic);
        window.alert(cragsBasic);*/

        $.getJSON(apiUrl, function(json1){
            $.each(json1, function(key, data){
                var position = new google.maps.LatLng(data.lat, data.lng);

                var marker = new google.maps.Marker({
                    map: map,
                    position: position,
                    title: data.name,
                    area: data.area,
                    tidalRange: data.tidalRange,
                    orientation: data.orientation,
                    approachTime: data.approachTime,
                    typeOfClimbs: data.typeOfClimbs,
                    numberOfClimbs: data.numberOfClimbs
                });

                // Push the marker to our array of markers.
                markers.push(marker);
                // Create an onclick event to open an infowindow at each marker.
                marker.addListener('click', function () {
                    populateInfoWindow(this, largeInfoWindow);
                });
            });
        });


        document.getElementById('show-listings').addEventListener('click', showListings);
        document.getElementById('hide-listings').addEventListener('click', hideListings);
        document.getElementById('filterTrad').addEventListener('click', filterTrad);
        document.getElementById('filterSport').addEventListener('click', filterSport);
        document.getElementById('filterTidal').addEventListener('click', filterTidal);
        document.getElementById('filterTidalRange').addEventListener('click', filterTidalRange);
    }

    // This function populates the infowindow when the marker is clicked. We'll only allow
    // one infowindow which will open at the marker that is clicked, and populate based
    // on that markers position.

    function populateInfoWindow(marker, infowindow) {
        // Check to make sure the infowindow is not already opened on this marker.
        if (infowindow.marker != marker) {

            var climbTypesString = ""

            if (marker.typeOfClimbs.length == 0) {
                climbTypesString = "Unknown";
            } else if (marker.typeOfClimbs.length == 1) {
                climbTypesString = marker.typeOfClimbs[0]['name'];            
            } else {
                climbTypesString = "Mixed";   
            }

            var infoWindowContent = '<div id="content">' +

                '<h1 id="infoWindowHeading" class="infoWindowHeading">' +
                marker.title + '</h1>' +
                '<div id="infoWindowContent">' +
                '<p><b>Area: </b>' + marker.area +
                (marker.tidalRange ? '</p><p><b>Tidal Range: </b>' + ((marker.tidalRange) * 2) + ' hours' : "") + 
                '</p><p><b>Orientation: </b>' + marker.orientation +
                '</p><p><b>Approach Time: </b>' + marker.approachTime + ' minutes' +
                '</p><p><b>Climbs: </b>' + marker.numberOfClimbs +
                '</p><p><b>Climb Type(s): </b>' + climbTypesString +
                '</p></div>' +
                '</div>';


            infowindow.marker = marker;
            infowindow.setContent(infoWindowContent);
            infowindow.open(map, marker);
            // Make sure the marker property is cleared if the infowindow is closed.
            infowindow.addListener('closeclick', function () {
                infowindow.marker = null;
            });
        }
    }


    // This function will loop through the markers array and display them all.
    function showListings() {
        var bounds = new google.maps.LatLngBounds();
        // Extend the boundaries of the map for each marker and display the marker
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
            bounds.extend(markers[i].position);
        }
        map.fitBounds(bounds);
    }
    // This function will loop through the listings and hide them all.
    function hideListings() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
    }
    // This function will loop through the listings and hide them all.
    // Then redraws all Trad Crags
    function filterTrad() {
        for (var i = 0; i < markers.length; i++) {
            var display = false;

            for (var j = 0; j < markers[i].typeOfClimbs.length; j++) {

                console.log(markers[i].typeOfClimbs[j]);
                if (markers[i].typeOfClimbs[j]['id'] == 1) {
                    display = true;
                }
            }

            if (display) {
                markers[i].setMap(map);
            } else {
                markers[i].setMap(null);
            }
        }
    }
    // This function will loop through the listings and hide them all.
    // Then redraws all Sport Crags
    function filterSport() {
       for (var i = 0; i < markers.length; i++) {
            var display = false;

            for (var j = 0; j < markers[i].typeOfClimbs.length; j++) {

                console.log(markers[i].typeOfClimbs[j]);
                if (markers[i].typeOfClimbs[j]['id'] == 2) {
                    display = true;
                }
            }

            if (display) {
                markers[i].setMap(map);
            } else {
                markers[i].setMap(null);
            }
        }
    }
    // This function will loop through the listings and hide them all.
    // Then redraws all Non-Tidal Crags
    function filterTidal() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        for (var i = 0; i < markers.length; i++) {
            if (!(markers[i].tidalRange)) {
                markers[i].setMap(map);
            }
        }
    }

    // This function will loop through the listings and hide them all,
    // and checks to find the max tidal range
    // Then redraws all in that tidal range
    function filterTidalRange() {
        var maxTidalRange = 0;
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
            if (markers[i].tidalRange > maxTidalRange) {
                maxTidalRange = markers[i].tidalRange;
            }
        }
        var selectedRange = ((document.getElementById("filterTidalRange").value) / (100)) * (maxTidalRange);
        for (var i = 0; i < markers.length; i++) {
            if ((markers[i].tidalRange > selectedRange)) {
                markers[i].setMap(map);
            }
        }
    }


</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEqJHTFtiiqM5Sq3sQJZ2JyTB4bEqOCIg&v=3&callback=initMap">
</script>

</body>
</html>