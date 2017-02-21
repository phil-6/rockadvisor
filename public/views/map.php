
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

        var locations = [
            {
                location: {lat: 51.5654710, lng: -4.1012290},
                title: 'Anemone Wall',
                area: 'Shire Combe To Watch House East',
                type: 'Trad',
                tidal: true,
                tidalRange: 0.5,
                orientation: 'ssw',
                approachTime: 20,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 1,
                    vdiff: 1,
                    severe: 1,
                    hs: 1,
                    vs: 2,
                    hvs: 2
                },
                restrictions: false
            },

            {
                location: {lat: 51.5619470, lng: -4.0782820},
                title: 'Bacon Hole',
                area: 'Southgate',
                type: 'Sport',
                tidal: true,
                tidalRange: 2,
                orientation: 's',
                approachTime: 20,
                seepage: true,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 0,
                    hs: 0,
                    vs: 0,
                    hvs: 0
                },
                restrictions: true
            },

            {
                location: {lat: 51.5861193, lng: -4.0580303},
                title: 'Barland Quarry',
                area: 'Kittle',
                type: 'Sport',
                tidal: false,
                tidalRange: 0,
                orientation: 'n',
                approachTime: 5,
                seepage: true,
                midges: false,
                grades: {
                    mod: 1,
                    diff: 1,
                    vdiff: 1,
                    severe: 2,
                    hs: 3,
                    vs: 4,
                    hvs: 3
                },
                restrictions: true
            },

            {
                location: {lat: 51.5658020, lng: -4.3023240},
                title: 'Black Buttress Left',
                area: 'Rhosili',
                type: 'Trad',
                tidal: false,
                tidalRange: 0,
                orientation: 'w',
                approachTime: 15,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 2,
                    severe: 0,
                    hs: 0,
                    vs: 0,
                    hvs: 0
                },
                restrictions: false
            },

            {
                location: {lat: 51.5654740, lng: -4.3026560},
                title: 'Black Buttress Right',
                area: 'Rhosili',
                type: 'Sport',
                tidal: false,
                tidalRange: 0,
                orientation: 'w',
                approachTime: 15,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 0,
                    hs: 0,
                    vs: 2,
                    hvs: 2
                },
                restrictions: false
            },

            {
                location: {lat: 51.5692640, lng: -4.2941050},
                title: 'Black Wall',
                area: 'Rhosili',
                type: 'Sport',
                tidal: true,
                tidalRange: 1,
                orientation: 'n',
                approachTime: 45,
                seepage: true,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 1,
                    vdiff: 1,
                    severe: 2,
                    hs: 1,
                    vs: 0,
                    hvs: 2
                },
                restrictions: false
            },

            {
                location: {lat: 51.5610530, lng: -4.2823130},
                title: 'Block Buttress',
                area: 'Fall Bay to Mewslade',
                type: 'Trad',
                tidal: true,
                tidalRange: 2,
                orientation: 's',
                approachTime: 30,
                seepage: false,
                midges: false,
                grades: {
                    mod: 1,
                    diff: 1,
                    vdiff: 0,
                    severe: 1,
                    hs: 3,
                    vs: 1,
                    hvs: 3
                },
                restrictions: false
            },

            {
                location: {lat: 51.5427040, lng: -4.2362980},
                title: 'Boiler Slab',
                area: 'Hollow Top To Port Eynon',
                type: 'Trad',
                tidal: false,
                tidalRange: 0,
                orientation: 'sw',
                approachTime: 40,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 1,
                    vdiff: 1,
                    severe: 3,
                    hs: 0,
                    vs: 5,
                    hvs: 3
                },
                restrictions: false
            },

            {
                location: {lat: 51.5620600, lng: -4.0800950},
                title: 'Bosco\'s Den Area',
                area: 'Minchen Hole to Hunts Bay',
                type: 'Sport',
                tidal: true,
                tidalRange: 2.5,
                orientation: 'e',
                approachTime: 20,
                seepage: true,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 0,
                    hs: 0,
                    vs: 0,
                    hvs: 0
                },
                restrictions: true
            },

            {
                location: {lat: 51.5618230, lng: -4.0827030},
                title: 'Bowen\'s Parlour',
                area: 'Minchen Hole to Hunts Bay',
                type: 'Sport',
                tidal: false,
                tidalRange: 0,
                orientation: 's',
                approachTime: 25,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 0,
                    hs: 0,
                    vs: 0,
                    hvs: 0
                },
                restrictions: false
            },

            {
                location: {lat: 51.5623040, lng: -4.0792050},
                title: 'Bucketland',
                area: 'Minchen Hole to Hunts Bay',
                type: 'Trad',
                tidal: true,
                tidalRange: 1,
                orientation: 'aaa',
                approachTime: 35,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 0,
                    hs: 2,
                    vs: 2,
                    hvs: 2
                },
                restrictions: false
            },

            {
                location: {lat: 51.5690450, lng: -4.2955400},
                title: 'Castaway Cove',
                area: 'Rhosili',
                type: 'Sport',
                tidal: true,
                tidalRange: 1.5,
                orientation: 'n',
                approachTime: 40,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 0,
                    hs: 0,
                    vs: 0,
                    hvs: 0
                },
                restrictions: false
            },

            {
                location: {lat: 51.5682950, lng: -4.0372120},
                title: 'Caswell Bay - Far South Slab',
                area: 'Caswell',
                type: 'Trad',
                tidal: true,
                tidalRange: 1.5,
                orientation: 's',
                approachTime: 15,
                seepage: false,
                midges: false,
                grades: {
                    mod: 1,
                    diff: 7,
                    vdiff: 1,
                    severe: 0,
                    hs: 0,
                    vs: 2,
                    hvs: 0
                },
                restrictions: false
            },

            {
                location: {lat: 51.5687150, lng: -4.0366110},
                title: 'Caswell Bay - Great Slab',
                area: 'Caswell',
                type: 'Trad',
                tidal: true,
                tidalRange: 2,
                orientation: 'se',
                approachTime: 10,
                seepage: false,
                midges: false,
                grades: {
                    mod: 1,
                    diff: 1,
                    vdiff: 1,
                    severe: 3,
                    hs: 2,
                    vs: 2,
                    hvs: 1
                },
                restrictions: false
            },

            {
                location: {lat: 51.5684800, lng: -4.0368930},
                title: 'Caswell Bay - Yellow Flecked Slab',
                area: 'Caswell',
                type: 'Trad',
                tidal: true,
                tidalRange: 1.5,
                orientation: 's',
                approachTime: 10,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 1,
                    vdiff: 7,
                    severe: 1,
                    hs: 0,
                    vs: 2,
                    hvs: 1
                },
                restrictions: false
            },

            {
                location: {lat: 51.5612890, lng: -4.2816520},
                title: 'Catacomb Gully',
                area: 'Fall Bay to Mewslade',
                type: 'Trad',
                tidal: false,
                tidalRange: 0,
                orientation: 's',
                approachTime: 40,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 3,
                    vdiff: 1,
                    severe: 1,
                    hs: 2,
                    vs: 2,
                    hvs: 2
                },
                restrictions: false
            },

            {
                location: {lat: 51.6466250, lng: -4.0649930},
                title: 'Cefnstylle Quarry',
                area: 'Gowerton',
                type: 'Sport',
                tidal: false,
                tidalRange: 0,
                orientation: 'ne',
                approachTime: 5,
                seepage: true,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 0,
                    hs: 0,
                    vs: 0,
                    hvs: 0
                },
                restrictions: true
            },

            {
                location: {lat: 51.5720600, lng: -3.9906000},
                title: 'Conservative Club Crag',
                area: 'Mumbles to Langland',
                type: 'Trad',
                tidal: false,
                tidalRange: 0,
                orientation: 'se',
                approachTime: 5,
                seepage: true,
                midges: true,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 1,
                    hs: 0,
                    vs: 0,
                    hvs: 2
                },
                restrictions: true
            },

            {
                location: {lat: 51.5646300, lng: -3.9983500},
                title: 'Crab Island',
                area: 'Mumbles to Langland',
                type: 'Trad',
                tidal: true,
                tidalRange: 2.5,
                orientation: 's',
                approachTime: 15,
                seepage: false,
                midges: false,
                grades: {
                    mod: 0,
                    diff: 0,
                    vdiff: 0,
                    severe: 2,
                    hs: 3,
                    vs: 5,
                    hvs: 2
                },
                restrictions: false
            },
        ];


        var largeInfoWindow = new google.maps.InfoWindow();

        // The following group uses the location array to create an array of markers on initialize.
        for (var i = 0; i < locations.length; i++) {
            // Get the position from the location array.
            var position = locations[i].location;
            var title = locations[i].title;
            var type = locations[i].type;
            var tidal = locations[i].tidal;
            var tidalRange = locations[i].tidalRange;
            var orientation = locations[i].orientation;
            var approachTime = locations[i].approachTime;
            // Create a marker per location, and put into markers array.
            var marker = new google.maps.Marker({
                map: map,
                position: position,
                title: title,
                type: type,
                tidal: tidal,
                tidalRange: tidalRange,
                orientation: orientation,
                approachTime: approachTime,
                id: i
            });
            // Push the marker to our array of markers.
            markers.push(marker);
            // Create an onclick event to open an infowindow at each marker.
            marker.addListener('click', function () {
                populateInfoWindow(this, largeInfoWindow);
            });
        }
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
            var infoWindowContent = '<div id="content">' +

                '<h1 id="infoWindowHeading" class="infoWindowHeading">' +
                marker.title + '</h1>' +
                '<div id="infoWindowContent">' +
                '<p><b>Type: </b>' + marker.type +
                '</p><p><b>Tidal: </b>' + marker.tidal +
                '</p><p><b>TidalRange: </b>' + ((marker.tidalRange) * 2) + ' hours' +
                '</p><p><b>Orientation: </b>' + marker.orientation +
                '</p><p><b>approachTime: </b>' + marker.approachTime + ' minutes' +
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
            markers[i].setMap(null);
        }
        for (var i = 0; i < markers.length; i++) {
            if (markers[i].type == 'Trad') {
                markers[i].setMap(map);
            }
        }
    }
    // This function will loop through the listings and hide them all.
    // Then redraws all Sport Crags
    function filterSport() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        for (var i = 0; i < markers.length; i++) {
            if (markers[i].type == 'Sport') {
                markers[i].setMap(map);
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
            if (!(markers[i].tidal)) {
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