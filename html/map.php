<?php include 'top.php'; ?>
<?php include 'navBar.php'; ?>

    -MAP-
		<br>
    <a href = "businesslist.html"> Organizations </a> | <a href= "list.html"> Recommended | </a> <b> Map </b>

<div class="container">
  <div class="starter-template">

	<!-- MAP -->
<h1>My First Google Map</h1>

<div id="map" style="width:100%;height:540px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(39.7, -75.5),
    zoom: 11  
}
  var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({
          position: google.maps.LatLng(39.7, -75.5),
          map: map,
          title: 'Hello World!'
		}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<br>
<a href= "welcome.html"> Quit</a>

</div>
</div>

<?php include 'bottom.php' ?>