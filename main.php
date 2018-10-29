<?php
include 'round.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Styled Map Types</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
    a {
text-decoration: none;
}
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
   #over 
   { position: absolute;
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    /*background-color: #fff; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */   
    background-color:rgba(255, 255, 255, 1.0)
}
#over h2{
    color: #02c8a7;
    padding: 0;  
    margin-top: 0;
    text-decoration: none;
    font-size: 40px;
    display: block;
    text-align: center;
    font-weight: bold;
    transition: 0.3s;
    overflow: hidden;
    white-space: nowrap;
}
    #map {
        height: 100%;
        /*position: relative;*/
        top: 0;
        left: 0;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        font-size: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Lato', sans-serif;
        user-select: none;
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
         #ronc {
            overflow: hidden;
            white-space: nowrap;
            color: #fff;
            padding-top: 60px;
            display: none;
            content: '';

        }
        
         .bounceInUp {
            -webkit-animation-name: bounceInUp;
            animation-name: bounceInUp;
         }
        #sideNav{
          position: absolute;
          top: 0;
          left: 0;
        }   
        .gm-style .gm-style-iw {
          text-align: center;
          font-family: "Avenir", sans-serif;
          height: 60px !important;
        }     
       /* #over h2{
          font-family: "Lato", sans-serif;
          text-align: center;
          overflow: hidden;
          white-space: nowrap;
          color: #02c8a7;
          font-weight: lighter;
        }*/
        .menuItem{
          color: #02c8a7;
          display: block;
          text-align: left;
          padding-left: 10px;
          font-size: 20px;
          height: 10%;
          line-height: 250%;
          cursor: pointer;
          transition: background-color 0.4s ease;
          transition: color 0.4 ease;
        }
        .menuItem:hover {
          background-color: #02c8a7;
          color: #fff;
        }
.to-top{
    position: absolute;
    top: 0;
   markers left: 0;
    color:white;
    font-size: 180%;
    padding-top:1.8em;
	position:absolute;
	border-color:white;
	text-decoration:none;
	transition:all .5s ease-out;
}
.to-top:before{
	content:'▲';
	transform: rotate(-90deg);
	font-size:.9em;
    position: absolute;
    top: 0;
    left: 0;
	line-height:1.3em;
	transition:transform .5s ease-in;
}
.to-top:hover{
	color:#02c8a7;
}
.to-top:hover:before{
	transform: rotate(450deg);
}

label {
  padding: 4px 6px;
  line-height: 190%;
  outline-style: none;
  transition: all .3s;
  overflow: hidden;
  display: block;
  width: 80px;
  white-space: nowrap;

}

.hiddenCB div {
  display: block;
  margin: 0;
  padding: 0;
  list-style: none;
  width: 100%;
  font-family: "Avenir", sans-serif;
}

.hiddenCB input[type="checkbox"],
.hiddenCB input[type="radio"] {
  display: none;
  
}

.hiddenCB label {
  overflow: hidden;
  cursor: pointer;
  width: 100%;
  padding-left: 5%;
}

.hiddenCB input[type="checkbox"]+label:hover{
  background: rgba(2, 200, 167, .8);
  color: #fff;
}

.hiddenCB input[type="checkbox"]:checked+label {
  background: rgba(193, 64, 77, 61);
  color: #fff;
} /*final effect after click*/

.hiddenCB input[type="checkbox"]:checked+label:hover{
  font-weight: 600;
  overflow: hidden;

}   /*highlight selected 
</style>
  </head>
  <body>
    <div id="map"></div>
    
  <div id="bar"><span class="to-top" onclick="navControl()" id="sideNav"></div>

    <div id="over">
      <h2>JAVAHub</h2>
      <div class="hiddenCB">

  <div>
    <input type="checkbox" name="ronces" id="cb1" /><label for="cb1">Roncesvalles</label>
    <input type="checkbox" name="bws" id="cb2" /><label for="cb2">Choice B</label>
    <input type="checkbox" name="ronces" id="cb3" /><label for="cb3">Choice C</label>
    <input type="checkbox" name="choice" id="cb4" /><label for="cb4">Choice D</label>

  </div>
<!--</div>
      <label class="menuItem" id="cafe"><input type="checkbox" id="ronc" name="checkbox"/><a>Roncesvalles</a></label>
    
      
      
    </div>-->
<script>
var open = false;
function navControl() {
  if (open == false){
  document.getElementById("over").style.width = "20%";
  document.getElementById("bar").style.marginLeft = "20%";
  document.getElementById("sideNav").style.marginLeft = "20%";
  open = true; 
} else if (open == true) {
    document.getElementById("over").style.width = "0";
    document.getElementById("bar").style.marginLeft = "0";    
    document.getElementById("sideNav").style.marginLeft = "0";
    open = false;
    
}
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
function fix2(){     //$str = json string, parse and destroy quotes near square bracks 
    var str = '<?php echo json_encode($response); ?>';  //if alert arr, outputs json string 
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

    function getJSONNeighbourhoods(){
        var n = fix2();
        var hoods = JSON.parse(n);
        return hoods;
    }
    function getJSONMarkers() {
      var x = fix();
      var markers = JSON.parse(x);
          console.log(markers);        
          return markers;
        }
      function initMap() {
        var styledMapType = new google.maps.StyledMapType(
[
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 33
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2e5d4"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5dac6"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5c6c6"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4d7c6"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fbfaf7"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#acbcc9"
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
  {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
              { visibility: "off" }
        ]
    }
  
          ],
            {name: 'Styled Map'});
        const coffeeMarkers = getJSONMarkers(); 
        const hoods = getJSONNeighbourhoods(); 
          var infowindow = new google.maps.InfoWindow({});
        
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
        google.maps.event.addListenerOnce(map, 'idle', function(){
          //alert("Loaded");              //checking if map loaded, works
        });

        var address, page;
        var curr;
        
        $(document).on('change', 'input[type=ronces]', function() {
              if($(this).is(':checked')){
              for(hood of hoods){
                if (($(this).attr('name')) == hood.cont){ 
                  var latLng = new google.maps.LatLng(hood.location[0], hood.location[1]);
                  map.panTo(latLng);
                  map.setZoom(14);
                  
                }
              }
            }
      });
            
            for(cafe of coffeeMarkers) {
              let marker = new google.maps.Marker({
              map: map,
              position: new google.maps.LatLng(cafe.location[0], cafe.location[1]),
              title: cafe.name,
              content: cafe.address + "<br>" + "<a href='" + cafe.page + "'target='_blank'>Homepage</a>",
              visible: false,
              icon: 'bean2.png',
          });
              marker.addListener('click', function() {
                map.setZoom(15);
                map.panTo(marker.getPosition());
                infowindow.setContent(marker.title + "<br>" + marker.content);
                infowindow.open(map, this);             
              });   
          /*            
            var checkbox = document.querySelector("input[id=cb1]");
                        //modify to be selective 
            checkbox.addEventListener('change', function(){
              if(this.checked){
                var latLng = new google.maps.LatLng(43.646316, -79.44905);
                map.panTo(latLng);
                map.setZoom(14);
                marker.setAnimation(google.maps.Animation.DROP);
                marker.setVisible(true);
              } else {
                marker.setVisible(false);
              }
            });*/
        
      }
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
  
}
    /* TEMPLATE
    const hoods = getJSONNeighbourhoods();
    function identify(identifier){
        alert(identifier);
        for(hood of hoods){
            if (identifier == hood.cont) alert(hood.name);
        }
    }
    */

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
</html>


