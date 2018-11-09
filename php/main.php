<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "digital_kisan") or die ("could not connect to mysql");  
if(isset($_SESSION['email'])){
	$username = $_SESSION['username'];
	$location = $_SESSION['location'];
}
else {
    header('Location: login.php');
   die();
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/search.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

<title>Digital Kisaan</title>
<style type="text/css">
	#bck img {
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	height: 20%;
	display: block;
}
</style>
</head>
<body style="background:#e0e1e2;"> 
<div class="header" style="height:80px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 </p>
 <ul style="margin-left:800px;"> 
   <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Log out</a></li>
 <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
  <li><a href="About.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
  <li><a href="current.php"><i class="fa fa-cloud"></i>&nbsp;Weather</a></li></div> 
 <marquee behavior=scroll direction="left" scrollamount="5" style="position:relative;background:#d3d3d3">Flat 10% on purchase more than 5500 Rs.
Buy Any products, If your cart value is more than 5500 Rs ,
you can avail a discount of 10% on your cart value.</marquee>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="bg"><div id="google_translate_element" style="margin-left:1170px;"></div>
  
 </div> 
 <div class="store" style="background:#e0e1e2;">
 		 
    <div class="containr" style="background:#4c4c4c;border-radius:0px">
        <ul> 
        <li><div class="butn">
		<a href="#">Seeds</a>
	<!--	<div class="dd">
		<a href="">Ajinkya Seeds</a>
		<a href="">Ankur Seeds </a>
		<a href="">Balaji Seed</a>
		<a href="">Bhadra Hybrid Seeds Co</a>
		<a href="">Burdwan Seed Production Co-op.Society Ltd.</a>
		</div>
		</div> -->
		</li>
         <li><div class="butn">
		<a href="#">Pesticides</a>
	<!--	<div class="dd">
		<a href="">Sulphur (fungicide)</a>
		<a href="">Endosulfan (insecticide)</a>
		<a href="">Mancozeb (fungicide)</a>
		<a href="">Cypermethrin (insecticide)</a>
		<a href="">Copper oxychloride</a>
		<a href="">Chlorpyrifos (insecticide)</a>
		<a href="">Carbendazim (fungicide)</a>
		<a href="">Dichlorvos (insecticide)</a>
		</div> -->
		</div></li>
         <li><div class="butn">
		<a href="#">Micronutrients</a>
	<!--	<div class="dd">
		<a href="">Individual Micronutrients</a>
		<a href="">Micronutrient Mixture</a>
		<a href="">Micronutrients Spray</a>
		</div> -->
		</div></li>
         <li><div class="butn">
		<a href="#">Fertlizers</a>
	<!--	<div class="dd">
		<a href="">Waterbsoluble fertilizers</a>
		<a href="">Secondary Fertilizers</a>
		</div> -->
		</div></li>
         <li ><div class="butn">
		<a href="#">Organic products</a>
	<!--	<div class="dd">
		<a href="">Organic couted granuels</a>
		<a href="">Organic neem product</a>
		<a href="">Organic PGR technical product</a>
		<a href="">Organic Premium PGR product</a>
		<a href="">Organic Stimulant</a>
		</div>  -->
		</div></li>
		 <li><a class="switch"  href="#cart" onMouseOver="this.style.color='#1eaa83'" onMouseOut="this.style.color='#FFFFFF'"style="background:none;border-radius:2px;border:none;height:22px;margin-left:180px;">
		 <i class="fa fa-shopping-cart"></i>&nbsp;My cart&nbsp;<span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li>
		 <li ><a onMouseOver="this.style.color='#1eaa83'" onMouseOut="this.style.color='#FFFFFF'" href="../php/fprofile.php" style="background:none;border-radius:2px;border:none;height:22px;"><i class="fa fa-address-book"></i>&nbsp;<?php echo ucfirst($_SESSION["username"]); ?></a></li>
    </div>
	 <div class="frames" style="background:#f4f5f7;border-style:solid;border-width:1px;border-color:#e5e5e5;">
	 <div class="left" style="background:#e8e9ea;border-style:solid;border-width:1px;border-color:#edf2f4">
	 
	 <div class="prices" style="background:#e8e9ea;">
	 <h4><font color="#6a6c6d"><b>Current Market Prices</b></font></h4>
	 <p style="color:black;">
	 Amaranth leaves:₹ 13Kg / Pcs<br>
	 Ash gourd:₹ 10Kg / Pcs<br>
	 Banana flower:₹ 20Kg / Pcs<br>
	 Beetroot:₹ 29Kg / Pcs<br>
	 Bitter gourd:₹ 80Kg / Pcs<br>
	 Bell Pepper :₹ 33Kg / Pcs<br>
	 Bottlegourd:₹ 23Kg / Pcs<br>
	 Cabbage:₹ 44Kg / Pcs<br>
	Carrot:₹ 11Kg / Pcs<br></p>
	 </div>
	 </div>
	 <div class="right" style="overflow-y: scroll;
  overflow-x:hidden;
  height:80%;background:white;border-style:solid;border-width:1px;border-color:#e5e5e5;width: 80%;display: flex-wrap:wrap;padding-bottom: 1%;">
	 	<div id="Items">
	 		<?php
	 		$query = "SELECT * FROM items ORDER BY name ASC";
	 		$result = mysqli_query($conn,$query);
	 		while($row = mysqli_fetch_array($result))
	 		{
	 		?>
	 		<div class="col-md-4" style="margin-top:12px; ">
	 			<div id="bck" style="border: 1px solid #d6d7d8;background-color:#f1f1f1;border-radius: 3px;padding: 3%;">
	 				<img src="<?php echo $row["img"]; ?>" class="img-responsive" style="width:70%;"align="center"/><br>
	 				<p class="text-info"><b>Type: </b><?php echo $row["name"]; ?></p>
	 				<p class="text-info"><b>Owner ID: </b><?php echo $row["owner"]; ?></p>
	 				<h4 class="text-danger">Rs. <?php echo $row["sprice"]; ?></h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["sprice"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;height:auto;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" /> 
                        <!--       <form method="POST">-->
                                <input type="button" name="mid" id="<?php echo $row["id"]; ?>" style="margin-top:5px;height:auto;" class="btn btn-info view_data" value="Quick View"/></input>
                        <!--       </form> -->
	 			</div>
	 		</div>
	 		<?php } ?>
	 	</div>
	 	</div>

	 	<div id="cart" style="margin-bottom: 2%;overflow-y:scroll;position:relative;width: 100%;height:20%;">  <br><br>
                          <div id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">Rs. <?php echo $values["product_price"]; ?></td>  
                                         <td align="right">Rs. <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">Rs. <?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                        <td colspan="5" align="center">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>    

 </div>
<div class="Contact1" id="contact" style="margin-top: 3%;">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;DigitalKisaan@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
<br></p>
<h4>Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div>
</div></ul></div></div></ul></div>

<script>  
 $(document).ready(function(data){  

 $.fn.scrollView = function () {
  return this.each(function () {
    $('html, body').animate({
      scrollTop: $(this).offset().top
    }, 1000);
  });
}
$('.switch').click(function (event) {
  event.preventDefault();
  $('.Contact1').scrollView();
});
  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>
</body>
</html>

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Product Details</h4>  
                </div>  
                <div class="modal-body" id="item_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){ 

        var id= $(this).attr("id");
        $.ajax({
          url:"select.php",
          method:"post",
          data:{id:id},
          success:function(data){
            $('#item_detail').html(data);
            $('#dataModal').modal("show");
          }
        });                 
      });    
 });  
 </script>