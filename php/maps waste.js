<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "digital_kisan"); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Locate the closest shop</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
       <link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
    <link rel="stylesheet" type="text/css" href="../css/wprofile.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <script type="text/javascript" src="autocomplete.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
  body{
    background:#f4f5f7;
  }
    #map{
      height: 70%;
    }
   html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <div class="header" style="height:80px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 <input type="text" placeholder="Search By Type"style="width:400px;" >
 <input type="submit" value="Search" >
 </p>
 <ul style="margin-left:800px;"> 
   <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Log out</a></li>
 <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
  <li><a href="About.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
  <li><a href="current.php"><i class="fa fa-cloud"></i>&nbsp;Weather</a></li></div> 
  <body onload="initMap()">
  <div class="lmap" style="margin-left:auto;
    margin-right:auto;
  margin-top:10px;
  width:1200px;
  background:white;
  border-style: solid;
  border-radius:20px;
  border-width:1px;
  border-color:#e5e5e5;height:500px;">
    <?php

    $result = "SELECT * FROM salerdetails";
    $sel=mysqli_query($connect,$result) or die(mysql_error()); 
  $storeArray = Array();
  $phone = Array();
  $shopid = Array();
  while ($row = mysqli_fetch_array($sel)) {
    $storeArray[] =  $row['location'];
    $phone[] = $row['phone'];
    $shopid[] = $row['shopid'];  
  }
  echo '<div class="card-block" align="center" style="font-size:20px;"><b>Your Location:</b> '.$_SESSION['location'].'</div>';
    ?>
  
    <div id="map" class="card-block" style="margin:0% 5%;"></div>
  </div>
     <div class="card-block" ><br><center>
          <input type="button" style="font-size:15px;" value="Your Location" onclick="codeAddress()" class="btn btn-success">
          <input type="button" style="font-size:15px;"value="Show nearby shops" onclick="showshop()" class="btn btn-success">
          <input type="button" style="font-size:15px;"value="Back" class="btn btn-danger" onclick="location='main.php'">
        </div>
    <br>
   <div class="Contact1" id="contact" style="margin-top: 3%;">
<p style="color:white;font-size:15px">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;DigitalKisaan@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
<br></p>
<h4 align="center">Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div>
    <script>
      var map;
  var geocoder;   
  function initMap() {
    var mapLayer = document.getElementById("map");
    var centerCoordinates = new google.maps.LatLng(19.0952,74.7496);
    var defaultOptions = { center: centerCoordinates, zoom: 8 }

    map = new google.maps.Map(mapLayer, defaultOptions);
    geocoder = new google.maps.Geocoder();

      google.maps.event.addEventListener(map, "load", function(){
        google.maps.event.trigger(map, 'resize'); 
        map.setZoom( map.getZoom() );
    });
    
}

function showshop(){
  <?php
  foreach($storeArray as $keys => $values)  
  { 
    foreach($phone as $index => $ph) 
    {
      foreach($shopid as $x => $y) 
      {
    ?>
    var address = '<?php echo $values; ?>';
    var icon = {
    url: "../images/pin_1-512.png", 
    scaledSize: new google.maps.Size(50, 50),
    origin: new google.maps.Point(0,0), 
    anchor: new google.maps.Point(0, 0) 
};
      geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            animation: google.maps.Animation.DROP,
            title: "<?php echo $values; ?>",
            icon:icon
        });
         var infowindow = new google.maps.InfoWindow({
         content: "<h2><?php echo $values ?></h2><br><h4><?php echo 'shop id: '.$y ?></h4><br><h4><?php echo 'Phone No. '.$ph ?></h4>"
         });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
});
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
<?php } } } ?>
}

function codeAddress(){
   var address = '<?php echo $_SESSION['location']; ?>';
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            animation: google.maps.Animation.BOUNCE,
            title: "<?php echo $_SESSION['username']; ?>'s Location"
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });

} 
  </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMNq3nuw5whsc1fdAbwX4bHWMLgCt4C6E&callback=initMap"
    async defer></script>
  </body>
</html>