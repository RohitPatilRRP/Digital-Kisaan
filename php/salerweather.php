<?php 
include('server.php');
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Forecast</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
	<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/wprofile.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="style.css"> 
    <script type="text/javascript" src="autocomplete.js"></script>  

</head>
<body>
<div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)), url('../images/background7.jpg');
background-size:cover;
background-attachment: fixed;	">
<div class="header" style="height:100px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 </p>
 <ul style="margin-left:800px;"> 
   <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Log out</a></li>
 <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
  <li><a href="About.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
  <li><a href="current.php"><i class="fa fa-cloud"></i>&nbsp;Weather</a></li></div> 
  
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div id="google_translate_element" style="margin-left:1170px;"></div>


<div class="container" style="height:650px;">
    <div class="row" >
        <div class="col-md-12" style="margin-bottom:10px;">
            <h3 class="text-center text-primary" style="color:white;">Current weather in your area</h3>
            <span id="error" class="text-center"></span>
        </div>
        
        <div class="row form-group form-inline" id="cityDiv">
           
            <input type="text" name="city" id="city" class="form-control" value='<?php echo(htmlspecialchars($_SESSION["location"], ENT_QUOTES)); ?>' >
            <button id="submitCity" class="btn btn-primary" style="background-color:#1eaa83;border-color:#1eaa83;">Click me</button>
        </div>

    </div><br>
    <div id="showWeather" style="background:white;
	border-style: solid;
	border-radius:10px;
	border-width:1px;
	border-color:#e5e5e5;color:grey;font-size:10px;font-weight:normal;"></div><br>
</div>
<br><br>
        </div>
    </div>
</div>
            <div class="Contact" id="contact1">
<p style="color:white;font-size:15px;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;DigitalKisaan@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 align="center">Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>        
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   
<script src="weather.js"></script>   
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeMQgP036S3bA1yPmzGABcVN-COuYIHLc&libraries=places&callback=initAutocomplete" async defer></script>
       <script type="text/javascript">
document.getElementById("submitCity").click();
</script>
</div>
</body>
</html>