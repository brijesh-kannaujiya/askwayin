<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Google Maps JavaScript API with Places Library Autocomplete Address Field</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAjsK7kPLSRl8kVv5koly5ORTyXlsD5Dh8"></script>
 
<style>
#search_input {font-size:18px;}
.form-group{
 margin-bottom: 10px;margin-top:50px;
}
.form-group label{
 font-size:18px;
 font-weight: 600;
}
.form-group input{
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-group input:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p><h1>Google Maps JavaScript API with Places Library Autocomplete Address Field</h1></p>
   <!-- Autocomplete location search input --> 
   <div class="form-group">
    <label>Location:</label>
    <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
   </div>
   <!-- Address input -->
   <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Address" readonly />
   </div>
   <!-- Latitude input -->
   <div class="form-group">
    <label>Latitude:</label>
    <input type="text" class="form-control" id="latitude" placeholder="Latitude" readonly />
   </div>
   <!-- Longitude input -->
   <div class="form-group">
    <label>Longitude:</label>
    <input type="text" class="form-control" id="longitude" placeholder="Longitude" readonly />
   </div>
     </div>
   </div>
</div>
 
<script>
    var searchInput = 'search_input';
    var address = 'Dubai;'
    $(document).ready(function () {
      var autocomplete;
      autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
      });

      google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var nearPlace = autocomplete.getPlace();
        if (!nearPlace.geometry) {
          return;
        }
        var address = nearPlace.formatted_address;
        var locationLat = nearPlace.geometry.location.lat();
        var locationLng = nearPlace.geometry.location.lng();

        // Set values in input fields
        document.getElementById('address').value = address;
        document.getElementById('latitude').value = locationLat;
        document.getElementById('longitude').value = locationLng;

        // Show selected location on the map
        initialize(locationLat, locationLng, address);
      });
    });

    function initialize(latitude, longitude, address) {
      var latLng = new google.maps.LatLng(latitude, longitude);
      var map = new google.maps.Map(document.getElementById('map'), {
        center: latLng,
        zoom: 13
      });

      var marker = new google.maps.Marker({
        map: map,
        position: latLng,
        draggable: false,
        animation: google.maps.Animation.BOUNCE,
        anchorPoint: new google.maps.Point(0, -29)
      });

      var infowindow = new google.maps.InfoWindow();
      google.maps.event.addListener(marker, 'click', function () {
        var iwContent = '<div id="pop_window"><div><b>Location:</b> ' + address + '</div><div><b>Latitude:</b> ' + latitude + '</div><div><b>Longitude:</b> ' + longitude + '</div></div>';
        infowindow.setContent(iwContent);
        infowindow.open(map, marker);
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

    <!-- Google Map container -->
    <div id="map" style="width: 60%; height: 400px;"></div>
  </div>

</body>
</html>
<?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/map.blade.php ENDPATH**/ ?>