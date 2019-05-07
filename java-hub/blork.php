<?php
include 'tester.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Styled Map Types</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
   #over { position: absolute;
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */   
}
#over a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

#over a:hover {
    color: #f1f1f1;
}
    #map {
        height: 90%;
        /*position: relative;*/
        top: 0;
        left: 0;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Mina', sans-serif;
      }
      .gmnoprint a, .gmnoprint span, .gm-style-cc {
        display:none;
      }
      .gmnoprint div {
        background:none !important;
      }
      @-webkit-keyframes bounceInUp {
            0% {
               opacity: 0;
               -webkit-transform: translateY(2000px);
            }
            60% {
               opacity: 1;
               -webkit-transform: translateY(-30px);
            }
            80% {
               -webkit-transform: translateY(10px);
            }
            100% {
               -webkit-transform: translateY(0);
            }
         }
         
         @keyframes bounceInUp {
            0% {
               opacity: 0;
               transform: translateY(2000px);
            }
            60% {
               opacity: 1;
               transform: translateY(-30px);
            }
            80% {
               transform: translateY(10px);
            }
            100% {
               transform: translateY(0);
            }
         }
         
         .bounceInUp {
            -webkit-animation-name: bounceInUp;
            animation-name: bounceInUp;
         }
        #sideNav{
         transition: 0.3s;

          position: absolute;
          top: 0;
          left: 0;
        }   
                
</style>
  </head>
  <body>
    <div id="map"></div>
  <div id="bar"><span id="sideNav" onclick="openNav()">open</span></div>

    <div id="over">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>
<script>
function openNav() {
  document.getElementById("over").style.width = "250px";
  document.getElementById("bar").style.marginLeft = "250px";
  document.getElementById("sideNav").style.marginLeft = "250px";
  
  
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("over").style.width = "0";
    document.getElementById("bar").style.marginLeft = "0";    
    document.getElementById("sideNav").style.marginLeft = "0";
    
}
  function fix(){     //$str = json string, parse and destroy quotes near square bracks 
    var str = '<?php echo json_encode($posts); ?>';  //if alert arr, outputs json string 
    var one, two;       
      for(var i = 0; i < str.length; i++) {
          one = str.charAt(i);
          two = str.charAt(i + 1);
          if (one == "\"" && two == "["){
            //alert(str.charAt(i+2));
            str = str.slice(0, i) + str.slice(i+1, str.length);
          }
          if (one == "]" && two =="\""){
            str = str.slice(0, i+1) + str.slice(i+2, str.length);
          }
      }
      return str; 
    }

    function getJSONMarkers() {
      var x = fix();
      var markers = JSON.parse(x);
          console.log(markers);        
          return markers;
        }
      function initMap() {

        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var styledMapType = new google.maps.StyledMapType(
          [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8ec3b9"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1a3646"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#4b6878"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#64779e"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#4b6878"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#334e87"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#283d6a"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#6f9ba5"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3C7680"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#304a7d"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#98a5be"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#2c6675"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#255763"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#b0d5ce"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#98a5be"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#283d6a"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3a4762"
      }
    ]
  },
          
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#0e1626"
      }
    ]
  },
  
              {
            "featureType": 'poi.business',
            "elementType": 'labels.icon',
            "stylers": [{"visibility": 'off'}]
              },
            {
            "featureType": 'highway',
            "elementType": 'labels.icon',
            "stylers": [{"visibility": 'off'}]
              },
  
            {
            "featureType": 'transit',
            "elementType": 'labels.con',
            "stylers": [{"visibility": 'off'}]
            },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#4e6d70"
      }
    ]
  },
  
          ],
            {name: 'Styled Map'});
        const coffeeMarkers = getJSONMarkers();  
        var infowindow = new google.maps.InfoWindow({});
        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 43.653, lng: -79.383},
          zoom: 12,
          fullscreenControl:false,
          streetViewControl: false,
          zoomControl: true,
          mapTypeControlOptions: {
            mapTypeIds: ['']
          }
        });
            for(cafe of coffeeMarkers) {
            let marker = new google.maps.Marker({
              map: map,
              position: new google.maps.LatLng(cafe.location[0], cafe.location[1]),
              title: cafe.name
            });
              marker.addListener('click', function() {
                map.setZoom(15);
                map.panTo(marker.getPosition());
                infowindow.setContent(marker.title);
                infowindow.open(map, this);             
              });        
      }
                //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
      }
    function hide(){
      var x = document.getElementById("map");
      x.style.display = "none";
      /*var arr = '<?php echo json_encode($posts); ?>';  //if alert arr, outputs json string 
      //var fix = JSON.parse(arr);*/ 
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGPhu1XonG82a8PPIGbX_554Mhqo7wvJU&callback=initMap">
    </script>
</body>
<button onclick="hide();">CLICK</button>
</html>


