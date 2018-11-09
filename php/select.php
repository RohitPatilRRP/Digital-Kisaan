<?php 
if(isset($_POST["id"]))
{
	$output='';
	$conn = mysqli_connect("localhost","root","","digital_kisan");
	$query = "SELECT * FROM items WHERE id = '".$_POST["id"]."'";
	$result = mysqli_query($conn,$query);
	$output .='
		<div class="row">
                    <div class="col-md-6 product_img">';
     while($row = mysqli_fetch_array($result))
     {
     	$output .='
     	<img src='.$row["img"].' class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Product Type: <span>'.$row["name"].'</span></h4>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>
                        <p>'.$row["description"].'</p>
                        <h3 class="cost"><span><i class="fa fa-inr"></i></span>'.$row["sprice"].'<small class="pre-cost"> per Kg.</small>
                          <br><br>
                          <h4>Manufacturing Date : '.$row["mdate"].'</h4>
                          <h4>Expiry Date : '.$row["edate"].'</h4>
                          <h6>Owner : '.$row["owner"].'</h6>
                          <h6>Location : '.$row["location"].'</h6>
                  
     	';
     }
     $output .='</div></div>';
     echo $output;
}






 ?>