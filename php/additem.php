<?php
include('server.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Add Item
		</title>
		<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
		<link rel="stylesheet" type="text/css" href="../css/additem.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="autocomplete.js"></script>
	</head>
	<body>
	 <div class="header" style="height:100px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 </p>
 <ul style="margin-left:800px;"> 
   <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Log out</a></li>
   <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
  <li><a href="About.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
  <li><a href="current.php"><i class="fa fa-cloud"></i>&nbsp;Weather</a></li></div> 
  <div style="background:#f4f5f7">
 

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <div class="bg"><div id="google_translate_element" style="margin-left:1170px;"></div>
 <h2 align="center" style="color:#919191;font-size:30px;">Details Of Item to be sold</h2>
 <div class="itemform" style="background:white;color:#151719;border-style: solid;
	border-radius:10px;
	border-width:1px;
	border-color:#e5e5e5;">
	
	
	<form id="form" action="uploadaction.php" method="post" enctype="multipart/form-data" >
		 <div><table align="center">
                        <tr>
                            <td align="right"><label for="cname">Input Name</label></td><td>:</td>
                            <td><input type="radio" id="cname" name="cname" value="Fertilizers">Fertilizers<br>
                          <input type="radio" id="cname" name="cname" value="Pesticides">Pesticides<br>
                            <input type="radio" id="cname" name="cname" value="Vegetative Plating Material">Vegetative Plating Material<br>
                            <input type="radio" id="cname" name="cname" value="Bio Pesticides">Bio Pesticides<br>
                            <input type="radio" id="cname" name="cname" value="Animal Feeds">Animal Feeds<br>
                            <input type="radio" id="cname" name="cname" value="Poultry Feeds">Poultry Feeds<br>
                            <input type="radio" id="cname" name="cname" value="Bio Control Agents">Bio Control Agents
                        </td>
                        </tr>     
                       <tr>
                                <td align="right"><label for="description">Description</label></td><td>:</td>
                                <td><textarea id="description" name="description" rows="3" cols="40">
                                </textarea></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="sprice">Start Price( per kg )</label></td><td>:</td>
                            <td><input type="text" style="border-width: thin;border-style:solid ;border-color:grey;" placeholder="Eg.10"id="sprice" name="sprice" required></td>
                        </tr> 
                        <tr>
                            <td align="right"><label for="quantity">Quantity( in kgs )</label></td><td>:</td>
                            <td><input type="text" style="border-width: thin;border-style:solid ;border-color:grey;"placeholder="Eg.20" id="quantity" name="quantity" required></td>
                        </tr> 
                        <tr>
                            <td align="right"><label for="mdate">Manufacturing Date</label></td><td>:</td>
                            <td><input type="date" id="mdate" name="mdate"  value="<?php echo date('Y-m-d'); ?>" required></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="enddate">Expiry Date</label></td><td>:</td>
                            <td><input type="date" id="edate" name="edate"  value="<?php echo date('Y-m-d'); ?>" required></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="image">Input Picture</label></td><td>:</td>
                            <td><input type="file" id="files" name="files" ></td> 
                        </tr>
                        <tr>
                            <td align="right">Image Preview</td><td>:</td>
						    <td> <img id="image" src="#" alt="image" height="100px"/></td>
							<script>
							document.getElementById("files").onchange = function () {
						    var reader = new FileReader();

						    reader.onload = function (e) {
						        // get loaded data and render thumbnail.
						        document.getElementById("image").src = e.target.result;
						    };

						    // read the image file as a data URL.
						    reader.readAsDataURL(this.files[0]);
						};
						</script>
                            <!-- Lil Javascript for showing image -->
                        </tr>
                        <tr>
                            <td align="right"><label for="currency">Currency</label></td><td>:</td>
                        	<td><select id="currency" name="currency">
                        	<option value="Dollars">$ Dollars</option>
                        	<option value="Rupees">Rupees</option>
                        	</select></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="country">Country</label></td><td>:</td>
                        	<td><select id="country" name="country">
                        	<option value="India">India</option>
                        	<option value="USA">USA</option>
                        	</select></td>
                        </tr>
                        <tr>
                                <td align="right"><label for="address">Address</label></td><td>:</td>
                                <td><input type="text" style="border-style:solid ;border-color:grey;border-width: thin;" id="location" name="location"></td>
                            </tr>
                        <tr>
                            <td align="right"><label for="payoptions">Payment Options</label></td><td>:</td>
                            <td><input type="radio" id="payoptions" name="payoptions" value="On Delivery">On Delivery <br>
                            <input type="radio" id="payoptions" name="payoptions" value="Credit Card" >Credit Card<br>
                            <input type="radio" id="payoptions" name="payoptions" value="Debit Card" >Debit Card<br>
                            <input type="radio" id="payoptions" name="payoptions" value="Net Bamking" >Net Bamking</td>
                        </tr>
                        <tr>
                                <td><label for="contact">Method to contact you</label></td><td>:</td>
                                <td><input type="checkbox" id="contact" name="contact[]" value="Email">Email <br>
                                <input type="checkbox" id="contact" name="contact[]" value="Whatsapp">Whatsapp<br>
                                    <input type="checkbox" id="contact" name="contact[]" value="In-app chat">In-app chat</td>
                            </tr>  
                     </table>
                </div>  <hr style="background:grey"></hr> <br><br>
                <center><input type="submit" value="Submit" name="item" id="item" ></center>
        </form>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeMQgP036S3bA1yPmzGABcVN-COuYIHLc&libraries=places&callback=initAutocomplete" async defer></script>
	</div>
	</div>
	<div class="Contact" id="contact1">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;DigitalKisaan@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 align="center">Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div> 
	</body>

</html>