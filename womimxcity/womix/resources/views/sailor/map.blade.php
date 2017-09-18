@extends('layout.master')

@section('content')
<div id="map"></div>



<script src="https://unpkg.com/leaflet@1.1.0/dist/leaflet.js"
integrity="sha512-mNqn2Wg7tSToJhvHcqfzLMU6J4mkOImSPTxVZAdo+lcPlk+GhZmYgACEe0x35K7YzW1zJ7XyJV/TT1MrdXvMcA=="
crossorigin=""></script>


<script type="text/javascript">


function InitialiserCarte() {

    var map = L.map('map').setView([43.10424159435386,3.1547927856445312], 12);

    // create the tile layer with correct attribution
    var tuileUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';

    var attrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';

    var osm = L.tileLayer(tuileUrl, {
        minZoom: 6,
        maxZoom: 17,
        attribution: attrib
    });
    osm.addTo(map);

//     var circle = L.circle([43.631725, 0.588503], 500, {
// color: 'red',
// fillColor: '#f03',
// fillOpacity: 0.5
// }).addTo(map);


    // var coord = ;
    // console.log(coord);
    // var markers = [];
    // var rue = [];


    // for (var i = 0; i < coord.length; i++) {
    //
    //   markers.push(marker);
    //
    // }

  //   for (var i = 0; i < ; i++) {
  //     // markers[i].addTo(map);
  //
  //
var marker4 =
L.marker([43.062868070571454, 3.269805908203125]).bindPopup("un bateau").addTo(map);

marker4.on('mouseover', function (e) {
  this.openPopup();
});
marker4.on('mouseout', function (e) {
  this.closePopup();
});

  var marker3 =
  L.marker([43.1182102, 3.111774100000048]).bindPopup("intermarché gruissan").addTo(map);

  marker3.on('mouseover', function (e) {
    this.openPopup();
  });
  marker3.on('mouseout', function (e) {
    this.closePopup();
  });


  var marker2 =
    L.marker([43.062868070571454, 3.269805908203125]).bindPopup("un bateau").addTo(map);

    marker2.on('mouseover', function (e) {
      this.openPopup();
    });
    marker2.on('mouseout', function (e) {
      this.closePopup();
    });


    var marker =


     L.marker([43.1020963, 3.094488599999977]).bindPopup("port de gruiissan").addTo(map);

    marker.on('mouseover', function (e) {
      this.openPopup();
    });
    marker.on('mouseout', function (e) {
      this.closePopup();
    });

      //console.log(marker)

  }


 // };



document.addEventListener('DOMContentLoaded',
InitialiserCarte());
</script>

@endsection
