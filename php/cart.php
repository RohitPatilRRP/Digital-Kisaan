<?php  
 //cart.php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "digital_kisan");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Order</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   <link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
		<link rel="stylesheet" type="text/css" href="../css/wprofile.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		.container h3{
			color:grey;
		}
		</style>
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
 

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="bg" style="height:auto;"><div id="google_translate_element" style="margin-left:1170px;"></div>
            
           <div class="container" style="overflow-y:scroll;position:relative;height:500px;width:900px;background:green;background:white;
	border-style: solid;
	border-radius:10px;
	border-width:1px;
	border-color:#e5e5e5;">  

                <?php  
                  $subject = "From Digital-Kisaan: Order summary";
                  $headers = "From:Digital-Kisaan";
                if(isset($_POST["place_order"]))  
                {  
                     $insert_order = "  
                     INSERT INTO tbl_order(farmerid, creation_date)  
                     VALUES('".$_SESSION['id']."', '".date('Y-m-d')."')  
                     ";  
                     $order_id = "";  
                     if(mysqli_query($connect, $insert_order))  
                     {  
                          $order_id = mysqli_insert_id($connect) or die(mysql_error());  
                     }  
                     $_SESSION["order_id"] = $order_id;  
                     $order_details = "";  
                     foreach($_SESSION["shopping_cart"] as $keys => $values)  
                     {  
                          $order_details .= "  
                          INSERT INTO tbl_order_details(order_id, product_name, product_price, product_quantity)  
                          VALUES('".$order_id."', '".$values["product_name"]."', '".$values["product_price"]."', '".$values["product_quantity"]."');  
                          ";  
                     }  
                     if(mysqli_multi_query($connect, $order_details))  
                     {  
                          unset($_SESSION["shopping_cart"]); 
                          echo '<script>alert("You have successfully place an order...Thank you.Bill summary is sent to you via mail. ")</script>';  
                          echo '<script>window.location.href="cart.php"</script>';  
                     }  
                }  
                if(isset($_SESSION["order_id"]))  
                {  
                     $customer_details = '';  
                     $order_details = '';  
                     $total = 0;  
                      $query = '  
                     SELECT * FROM tbl_order  
                     INNER JOIN tbl_order_details  
                     ON tbl_order_details.order_id = tbl_order.order_id  
                     INNER JOIN farmerdetails  
                     ON farmerdetails.farmerid = tbl_order.farmerid  
                     WHERE tbl_order.order_id = "'.$_SESSION["order_id"].'"  
                     ';  
                     $result = mysqli_query($connect, $query);   
                     while($row = mysqli_fetch_array($result) )  
                     {  
                          $customer_details = '  
                          <label>'.$row["username"].'</label>  
                          <p>'.$row["location"].'</p>  
                          <p>'.$row["email"].'</p>  
                          <p>'.$row["phone"].'</p>  
                          ';  
                          $order_details .= "  
                               <tr>  
                                    <td>".$row["product_name"]."</td>  
                                    <td>".$row["product_quantity"]."</td>  
                                    <td>".$row["product_price"]."</td>  
                                    <td>".number_format($row["product_quantity"] * $row["product_price"], 2)."</td>  
                               </tr>  
                          ";  
                          $total = $total + ($row["product_quantity"] * $row["product_price"]);  
                     }
                     echo '  
                     <h3 align="center">Order Summary for Order No.'.$_SESSION["order_id"].'</h3>  
                     <div class="table-responsive">  
                          <table class="table">  
                               <tr>  
                                    <td><label>Customer Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>'.$customer_details.'</td>  
                               </tr>  
                               <tr>  
                                    <td><label>Order Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>  
                                         <table class="table table-bordered">  
                                              <tr>  
                                                   <th width="50%">Product Name</th>  
                                                   <th width="15%">Quantity</th>  
                                                   <th width="15%">Price</th>  
                                                   <th width="20%">Total</th>  
                                              </tr>  
                                              '.$order_details.'  
                                              <tr>  
                                                   <td colspan="3" align="right"><label>Total</label></td>  
                                                   <td>'.number_format($total, 2).'</td>  
                                              </tr>  
                                         </table>  
                                    </td>  
                               </tr>  
                          </table>
                     </div>  
                     ';  
                }  
                   $message =  $order_details;
                          mail($_SESSION['email'], $subject, $message, $header);

                ?>  
</div> <br>
                <div class="map_section">
				<center>
                  <a href="maps.php" class="btn btn-success" role="button">Locate the sellers on Map</a>
                  <a href="buy.php" class="btn btn-success" role="button">Proceed to online payment</a>
                  <div>
           </div>  </div> <br><br>
		   <div class="Contact" id="contact1">
<p>
<img src="../images/toll.png" width="30px">Toll Free 1800-274-3131
<img src="../images/email.png" width="30px">DigitalKisaan@service.com
<img src="../images/franchize.png" width="30px">Franchise
</p>
<h4 align="center">Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div> 
      </body>  
 </html> 
