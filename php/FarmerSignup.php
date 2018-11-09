<?php
include('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<title>Signup</title>
<script type="text/javascript" src="autocomplete.js"></script>
</head>
<body> 
<div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)), url('../images/background4.jpg');
background-size:cover;
background-attachment: scroll;	">
<div class="header" style="height:100px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan</p>
 <div id="google_translate_element" style="margin-left:1170px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <ul style="margin-left:900px;"> 
  <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
  <li><a href="About.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
  <li><a href="current.php"><i class="fa fa-cloud"></i>&nbsp;Weather</a></li>
 </div> <br><br>
 <div class="Signup" style="margin-left: 25%;margin-top: 2%;">
  <form method="POST"> <?php include('errors.php'); ?>
     <table cellspacing="5px" cellpadding="5px" align="center">
<tr >
<td colspan="2">
<p align="center">Farmer SignUp</p>
</td>

<tr>
<td>
<input type="text" placeholder="Create username*" name="username">
</td>
<td>
<input type="text" placeholder="Mobile Number*" name="phone">
</td>

<tr>
<td>
<input type="password" placeholder="Enter password*" name="password">
</td>
<td>
<input type="text" placeholder="Aadhar Number*" name="aadhar">
</td>

<tr>
<td>
<input type="password" placeholder="Confirm password*" name="confirmpassword">
</td>
<td>
<input type="text" placeholder="Jandhan Account Number*" name="jandhan">
</td>

<tr>
<td>
<input type="email" placeholder="Enter your email*" name="email">
</td>
<td>
<input type="text" id="location" placeholder="City/District*" name="location">
</td>

<tr>
<td>
<input type="text" id="pincode" placeholder="PIN Code*" name="pincode">
</td>
<td>Date of birth* - <input type="date" name="date"></td>

</table>

     <input  type="submit" value="Sign Up" name="submit" id="submit">
     <div id="terms"><br>By signing up, you agree to the <a href="../php/terms.php">Terms</a> of Service and <a href="../php/privacy.php">Privacy Policy.</a></div> </form> 
   <div class="footr">
     <p>Already have account ? Click <a href="./login.php">here</a> to login</p>    
  </div>
 </div> <br><br><br><br><br>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeMQgP036S3bA1yPmzGABcVN-COuYIHLc&libraries=places&callback=initAutocomplete" async defer></script>

 <div class="Contact" id="contact1">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;DigitalKisaan@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 >Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div></body>
 </div> </div>
</html>