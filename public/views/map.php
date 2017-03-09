<!--/**
* Created by PhpStorm.
* User: philr
* Date: 21/02/2017
* Time: 20:34
*/-->

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rock Advisor Map</title>

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,600,700,900|Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link href="../css/map.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92612290-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body>
<!--
    ==========
    Navigation
    ==========
              -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button"
                        class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#rockAdvisorNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/">Rock Advisor</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="rockAdvisorNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/map">Crag Map</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/finder">Crag Finder</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/blog">Development</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<!--
    ==========
       Map
    ==========
              -->

    <div id="map" class="map"></div>
    <script>
        var map;
        //creates a new blank array for all the listing markers
        var markers = [];

        function initMap() {
            // Constructor create a new map, only center and zoom are required.
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 51.600000, lng: -4.150000},
                zoom: 12,
                mapTypeControl: true,

                mapTypeControlOptions: {
                    position: google.maps.ControlPosition.LEFT_BOTTOM
                },
                streetViewControl: false,
                mapTypeId: 'terrain'

            });
           /**
            * Move Street View Address Controls from underneath nav bar.
            * Control formatting is broken for unknown reason.
            * Likely due to a bootstrap conflict - street view disabled for now.
            */
            /*map.get('streetView').setOptions({
                addressControlOptions: {
                    position: google.maps.ControlPosition.BOTTOM_CENTER
                },
                fullscreenControl: false
            });*/


            // Create Markers array and populate it from API
            var apiUrl = ("/api/maps_crags");
            var largeInfoWindow = new google.maps.InfoWindow();

            $.getJSON(apiUrl, function(json1){
                $.each(json1, function(key, data){
                    var position = new google.maps.LatLng(data.lat, data.lng);

                    var marker = new google.maps.Marker({
                        map: map,
                        position: position,
                        id: data.id,
                        title: data.name,
                        area: data.area,
                        tidalRange: data.tidalRange,
                        orientation: data.orientation,
                        approachTime: data.approachTime,
                        typeOfClimbs: data.typeOfClimbs,
                        numberOfClimbs: data.numberOfClimbs,
                        animation: google.maps.Animation.DROP
                    });

                    // Push the marker to our array of markers.
                    markers.push(marker);
                    // Create an onclick event to open an infowindow at each marker.
                    marker.addListener('click', function () {
                        populateInfoWindow(this, largeInfoWindow);
                    });
                });
            });


            // Create the DIV to hold the control and call the CenterControl()
            // constructor
            // passing in this DIV.
            var mapFilterControlsDiv = document.createElement('div');
            var mapFilterControls = new MapFilterControls(mapFilterControlsDiv, map);

            mapFilterControlsDiv.index = 1;
//            mapFilterControlsDiv.style['padding-top'] = '10px';
            map.controls[google.maps.ControlPosition.LEFT_CENTER].push(mapFilterControlsDiv);

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers,
                {imagePath: "../resources/images/markerClusterer/m"});

        }

        /**
         *  This function populates the infowindow when the marker is clicked. We'll only allow
         * one infowindow which will open at the marker that is clicked, and populate based
         * on that markers position.
         */

        function populateInfoWindow(marker, infowindow) {
            // Check to make sure the infowindow is not already opened on this marker.
            if (infowindow.marker != marker) {


                //If no climbs set climbTypesString to null
                //If more tha one climb type set it to mixed

                var climbTypesString = ""

                if (marker.typeOfClimbs.length == 0) {
                    climbTypesString = null;
                } else if (marker.typeOfClimbs.length == 1) {
                    climbTypesString = marker.typeOfClimbs[0]['name'];
                } else {
                    climbTypesString = "Mixed";
                }


                //add information to info window
                var infoWindowContent = '<div id="content">' +

                    '<h2 id="infoWindowHeading" class="infoWindowHeading">' +
                    '<a href="/finder#/crag/' + marker.id + '">' + marker.title + '</a></h2>' +
                    '<div id="infoWindowContent" class="infoWindowContent">' +
                    '<p><b>Area: </b>' + marker.area +
                    (marker.tidalRange ? '</p><p><b>Tidal Range: </b>' + ((marker.tidalRange) * 2) + ' hours' : "") +
                    '</p><p><b>Orientation: </b>' + marker.orientation +
                    '</p><p><b>Approach Time: </b>' + marker.approachTime + ' minutes' +
                    '</p><p><b>Climbs: </b>' + marker.numberOfClimbs +
                    (climbTypesString  ? '</p><p><b>Climb Type(s): </b>' + climbTypesString : "") +
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


        /**
         * These functions control all the map filters.
         * Any marker property can be used to filter
         * Require click listeners to work
         * something else because these are pretty darn important
         */

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
        // Then redraws all Bouldering Crags
        function filterBouldering() {
            for (var i = 0; i < markers.length; i++) {
                var display = false;

                for (var j = 0; j < markers[i].typeOfClimbs.length; j++) {

                    console.log(markers[i].typeOfClimbs[j]);
                    if (markers[i].typeOfClimbs[j]['id'] == 3) {
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
                var display = !markers[i].tidalRange;

                if (display) {
                    markers[i].setMap(map);
                } else {
                    markers[i].setMap(null);
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



        /**
         * Adds controls for map filters
         * Each control has a border, an interior and an event listener
         * the rest should be obvious
         */
        function MapFilterControls(controlDiv, map, center) {

            //          //
            // SHOW ALL //
            //          //
            // Set CSS for the SHOW ALL control border
            var showAllUI = document.createElement('div');
            showAllUI.id = 'showAllUI';
            showAllUI.title = 'Show all listings';
            controlDiv.appendChild(showAllUI);

            // Set CSS for the SHOW ALL control interior
            var showAllText = document.createElement('div');
            showAllText.id = 'showAllText';
            showAllText.innerHTML = 'Show All';
            showAllUI.appendChild(showAllText);

            //          //
            // HIDE ALL //
            //          //
            // Set CSS for the HIDE ALL control border
            var hideAllUI = document.createElement('div');
            hideAllUI.id = 'hideAllUI';
            hideAllUI.title = 'Hide all listings';
            controlDiv.appendChild(hideAllUI);

            // Set CSS for the HIDE ALL interior
            var hideAllText = document.createElement('div');
            hideAllText.id = 'hideAllText';
            hideAllText.innerHTML = 'Hide All';
            hideAllUI.appendChild(hideAllText);

            //             //
            // FILTER TRAD //
            //             //
            // Set CSS for the FILTER TRAD control border
            var filterTradUI = document.createElement('div');
            filterTradUI.id = 'filterTradUI';
            filterTradUI.title = 'Show Crags with Trad Routes';
            controlDiv.appendChild(filterTradUI);

            // Set CSS for the FILTER TRAD interior
            var filterTradText = document.createElement('div');
            filterTradText.id = 'filterTradText';
            filterTradText.innerHTML = 'Show Trad';
            filterTradUI.appendChild(filterTradText);

            //              //
            // FILTER SPORT //
            //              //
            // Set CSS for the FILTER SPORT control border
            var filterSportUI = document.createElement('div');
            filterSportUI.id = 'filterSportUI';
            filterSportUI.title = 'Show Crags with Sport Routes';
            controlDiv.appendChild(filterSportUI);

            // Set CSS for the FILTER SPORT interior
            var filterSportText = document.createElement('div');
            filterSportText.id = 'filterSportText';
            filterSportText.innerHTML = 'Show Sport';
            filterSportUI.appendChild(filterSportText);

            //            //
            // BOULDERING //
            //            //
            // Set CSS for the FILTER BOULDERING control border
            var filterBoulderingUI = document.createElement('div');
            filterBoulderingUI.id = 'filterBoulderingUI';
            filterBoulderingUI.title = 'Show Crags with Bouldering';
            controlDiv.appendChild(filterBoulderingUI);

            // Set CSS for the FILTER BOULDERING interior
            var filterBoulderingText = document.createElement('div');
            filterBoulderingText.id = 'filterBoulderingText';
            filterBoulderingText.innerHTML = 'Bouldering';
            filterBoulderingUI.appendChild(filterBoulderingText);

            //              //
            // FILTER TIDAL //
            //              //
            // Set CSS for the FILTER TIDAL control border
            var filterTidalUI = document.createElement('div');
            filterTidalUI.id = 'filterTidalUI';
            filterTidalUI.title = 'Show all non-tidal crags';
            controlDiv.appendChild(filterTidalUI);

            // Set CSS for the FILTER TIDAL interior
            var filterTidalText = document.createElement('div');
            filterTidalText.id = 'filterSportText';
            filterTidalText.innerHTML = 'Hide Tidal';
            filterTidalUI.appendChild(filterTidalText);


            // Set up click listeners for all the controls
            showAllUI.addEventListener('click', showListings);
            hideAllUI.addEventListener('click', hideListings);
            filterTradUI.addEventListener('click', filterTrad);
            filterSportUI.addEventListener('click', filterSport);
            filterBoulderingUI.addEventListener('click', filterBouldering);
            filterTidalUI.addEventListener('click', filterTidal);
        }
        $(".controlDiv").on('click', 'div', function(e) {
            $(this).parent().find('div.active').removeClass('active');
            $(this).addClass('active');
        });


    </script>

    <script type="text/javascript" src="../js/markerClusterer/markerclusterer.js"></script>


    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEqJHTFtiiqM5Sq3sQJZ2JyTB4bEqOCIg&v=3&callback=initMap">
    </script>


    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>



</body>
</html>