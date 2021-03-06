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
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">

    <style>
    a {
text-decoration: none;
}
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
   #over 
   { position: relative;
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    color: white;
    /*background-color: #fff; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */   
    background-image: linear-gradient(to bottom right, #663300 ,#1a0d00 );

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
    -webkit-text-stroke-width: 0.1px;
   -webkit-text-stroke-color: white;
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
  font-family: "Cormorant Garamond", sans-serif;
  font-size: 1.35vw;
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
  background: #b35900;
  color: #fff;
}

.hiddenCB input[type="checkbox"]:checked+label {
  background: rgba(193, 64, 77, 61);
  color: #fff;
} /*final effect after click*/

.hiddenCB input[type="checkbox"]:checked+label:hover{
  font-weight: 600;
  overflow: hidden;

}    
#menuSelectors {
  overflow: hidden;
    white-space: nowrap; 
}
#menu1 {
  transition: all ease-in-out 0.5s;
  margin-top: 80%;
    opacity: 0;
  position: absolute;
}
.menuBtn {
  transition: background-color 0.4s ease;
  transition: color 0.4 ease;
  width: 100%;
  text-align: left;
  height: 100%;
  display: inline-block;
  font-family: 'Cormorant Garamond';
  font-weight: bold;
  font-size: 1.35vw;
  cursor: pointer;
  transition: all 0.5s ease;
  left: 300px;
 }
.menuBtn:hover {
  background-color:#b35900
;
 }
.menuBtn:before {
  background-color: 
}
#catSelect {
  margin: 0;
  text-align: center;
  overflow-x: hidden;
  white-space: nowrap;  
}
#main {
  display: inline-block;
  vertical-align: middle;
   text-align: center;
}
#left {
  margin: 0;
  text-align: center;
  overflow-x: hidden;
  white-space: nowrap;
  visibility:hidden;
}
#left:hover {
  color: #e74c3c;
}
#buttons {
  position: absolute;
}

 
</style>


  </head>
  <body>
    <div id="map"></div>
    
  <div id="bar"><span class="to-top" onclick="navControl()" id="sideNav"></div>

    <div id="over">
      <h2>JAVAHub</h2>
      <h3 id="catSelect">Select Search Method</h3>
      <h3 id="left" onclick="menuControl(this.id);">Back</h3>
      
      <div id="buttons">
          <label class="menuBtn" id="btn1" onclick="menuControl(this.id)">Search By Area</label>
          <label class="menuBtn" id="btn2" onclick="menuControl(this.id)">Search By Cafe</label>
          <label class="menuBtn" id="btn3" onclick="menuControl(this.id)">Search By Point</label>
          <label class="menuBtn" id="btn4" onclick="menuControl(this.id)">Search for Near Me</label>
          
          

      </div>


      <div class="hiddenCB">

  <div id="menu1">
    <input type="checkbox" name="choice" id="1cb" /><label for="1cb">Roncesvalles (1)</label>
    <input type="checkbox" name="choice" id="2cb" /><label for="2cb">Bloor West Village (2)</label>
    <input type="checkbox" name="choice" id="3cb" /><label for="3cb">Bloordale & Bloorcourt<br>Village (3)</label>
    <input type="checkbox" name="choice" id="4cb" /><label for="4cb">Junction & Junction<br>Triangle (4)</label>
    <input type="checkbox" name="choice" id="5cb" /><label for="5cb">Liberty Village (5)</label>
    <input type="checkbox" name="choice" id="6cb" /><label for="6cb">West Queen West (6)</label>    
    <input type="checkbox" name="choice" id="7cb" /><label for="7cb">Brockton Village (7)</label>    
    <input type="checkbox" name="choice" id="8cb" /><label for="8cb">Parkdale (8)</label>   
    <input type="checkbox" name="choice" id="9cb" /><label for="9cb">Harbord Village (9)</label>
    <input type="checkbox" name="choice" id="10cb" /><label for="10cb">Koreatown (10)</label>           
    <input type="checkbox" name="choice" id="11cb" /><label for="11cb">The Annex (11)</label>  
    <input type="checkbox" name="choice" id="12cb" /><label for="12cb">Little Italy (12)</label> 
    <input type="checkbox" name="choice" id="13cb" /><label for="13cb">Dundas West (13)</label>
    <input type="checkbox" name="choice" id="14cb" /><label for="14cb">Fashion District (14)</label>
    <input type="checkbox" name="choice" id="15cb" /><label for="15cb">Kensington Market (15)</label>
    <input type="checkbox" name="choice" id="16cb" /><label for="16cb">China Town (16)</label>
    <input type="checkbox" name="choice" id="17cb" /><label for="17cb">Baldwin Village (17)</label>
    <input type="checkbox" name="choice" id="18cb" /><label for="18cb">Entertainment District (18)</label>
    <input type="checkbox" name="choice" id="19cb" /><label for="19cb">Yorkville (19)</label>
    <input type="checkbox" name="choice" id="20cb" /><label for="20cb">U of T (20)</label>
    <input type="checkbox" name="choice" id="21cb" /><label for="21cb">Financial District (21)</label>
    <input type="checkbox" name="choice" id="22cb" /><label for="22cb">Yonge & Bloor (22)</label>
    <input type="checkbox" name="choice" id="23cb" /><label for="23cb">Church Street (23)</label>
    <input type="checkbox" name="choice" id="24cb" /><label for="24cb">Cabbagetown (24)</label>
    <input type="checkbox" name="choice" id="25cb" /><label for="25cb">Ossington Village (25)</label>
    <input type="checkbox" name="choice" id="26cb" /><label for="26cb">Harbourfront (26)</label>




    <input type="checkbox" name="choice" id="" /><label for="" style="visibility: hidden">placeholder</label> 
 

  </div>
</div>
      <!--<label class="menuItem" id="cafe"><input type="checkbox" id="ronc" name="checkbox"/><a>Roncesvalles</a></label>-->
    
      
      
    </div>
<script>
var open = false;
var selected = false; 

var menu2arr = new Array();
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


function func(elem){elem.style.visibility = "hidden";}
function menuControl(menu){

  if (selected == false){

  var arr = document.querySelectorAll('.menuBtn');
  
  for (i = 0;i < arr.length; i++){
      arr[i].style.opacity = "0";
      arr[i].style.marginLeft = "-54%";
        
  }

  document.getElementById(menu).style = 'inherit';
  document.getElementById(menu).style.marginLeft = "100%";
  document.getElementById(menu).style.backgroundColor = '#b35900';  
  document.getElementById(menu).style.height = "100%";
  document.getElementById("left").style.visibility = 'visible';
  document.getElementById("catSelect").innerHTML = document.getElementById(menu).innerHTML;
  
  if(menu == "btn1"){
    //document.getElementById("menu1").style.visibility = 'visible';
    document.getElementById("menu1").style.marginTop = '0';
    document.getElementById("menu1").style.opacity = '1.0';  
  } else if(menu == "btn2"){
  console.log("List cafes bro");
}
    
  
  selected = true; 

  } else {

  document.getElementById("menu1").style.opacity = '0';
  document.getElementById("menu1").style.marginTop = '80%';
  
  document.getElementById(menu).style.marginLeft = "0";
  document.getElementById(menu).style = 'inherit';
  document.getElementById("catSelect").innerHTML = "Search by:";
  var arr = document.querySelectorAll('.menuBtn');



  for (i = 0;i < arr.length; i++){
      arr[i].style = 'inherit';
  }
  selected = false; 
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

    function getJSONeighbourhoods(){
        var n = fix2();
        var hoods = JSON.parse(n);
        console.log(hoods);
        return hoods;
    }

    function getJSONMarkers() {
      var x = fix();
      var markers = JSON.parse(x);
          console.log(markers.name);        
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
        const neighHoods = getJSONeighbourhoods();  
        var infowindow = new google.maps.InfoWindow({});
        var boxes = document.getElementsByName('choice');
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
if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
            };
            let marker = new google.maps.Marker({
              map: map,
              position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
              visible: true,
              title: '<h1 style="font-family:helvetica neue;font-weight:200;">You!</h1>',
            });

            marker.addListener('click', function() {
                //console.log(marker.meta);       extracting the neighbourhood id
                //map.setZoom(15);
                map.panTo(marker.getPosition());
                infowindow.setContent(marker.title);
                infowindow.open(map, this);  
              });   

            map.setCenter(marker.getPosition());
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } 
        google.maps.event.addListenerOnce(map, 'idle', function(){
          //alert("Loaded");              //checking if map loaded, works
        });
        var check;

        var posMarkers = {};
        for(cafe of coffeeMarkers) {                                    //Loop through ALL entries; if need to make array of names, here is where to extract a singular variable
              let marker = new google.maps.Marker({
              map: map,
              position: new google.maps.LatLng(cafe.location[0], cafe.location[1]),
              title: cafe.name,
              content: cafe.address + "<br>" + "<a href='" + cafe.page + "'target='_blank'>Homepage</a>",
              visible: false,
              icon: 'bean2.png',
              meta: cafe.nhid,                  //extracting neighbourhood id into marker tag 
          });
              menu2arr.push(cafe.name);
              //console.log(cafe.name);
              marker.addListener('click', function() {
                //console.log(marker.meta);       extracting the neighbourhood id
                //map.setZoom(15);
                map.panTo(marker.getPosition());
                infowindow.setContent(marker.title + "<br>" + marker.content);
                infowindow.open(map, this);  
              });   
          
            for(var i = 0; i < boxes.length; ++i)
            {
              
              /*if(boxes[i].checked){
                
              }*/
                var checkbox = boxes[i];
                checkbox.addEventListener('change', function runner(){
               if(this.checked){
               //console.log(this.id);                         //extract id of checkbox
                //console.log(marker.meta);                     //extract tag of markers!
                //console.log(parseInt(this.id));*/
                check = parseInt(this.id);

                for(hood of neighHoods) {
                  if(hood.nhid == check){
                    var latLng = new google.maps.LatLng(hood.location[0], hood.location[1]);
                    //var latLong = new google.maps.LatLng(hood.location[0], hood.location[1]);
                    //console.log(latLong);
                  }
                }
                //var latLng = new google.maps.LatLng(43.646316, -79.44905); //fix panTo for each neighbourhood 
                map.panTo(latLng);
                map.setZoom(15);
                marker.setAnimation(google.maps.Animation.DROP);                
                if (check == marker.meta){                      //If the neighbour box is checked, set all the markers (cafes) with the id of the neighbourhood to visible
                   marker.setVisible(true);
                }    
                } else {
                check = parseInt(this.id);
                if (check == marker.meta){
                   marker.setVisible(false);
                   infowindow.close();
                }   
                //marker.setVisible(false);
              }
       });
            }
        
      }
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
  
}
    function hide(){
      var x = document.getElementById("map");
      x.style.display = "none";
      /*var arr = '<?php echo json_encode($posts); ?>';  //if alert arr, outputs json string 
      //var fix = JSON.parse(arr);*/
    }
    console.log(menu2arr);   
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGPhu1XonG82a8PPIGbX_554Mhqo7wvJU&callback=initMap">    
</script>
</body>
</html>


