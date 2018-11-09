<?php
include('server.php');
    if (isset($_POST['item'])) {
		if(isset($_POST['cname'])) {
			$c_name= $_POST['cname'];
		}
  		$desc = $_POST['description'];
      $owner=$_SESSION['email'];
  		$start_price = $_POST['sprice'];
  		$quant = $_POST['quantity'];
  		$start_date = date('Y-m-d', strtotime($_POST['mdate']));
  		$end_date = date('Y-m-d', strtotime($_POST['edate']));
  		$curr = $_POST['currency'];
  		$count = $_POST['country'];
  		$add = $_POST['location'];
  		$pay = $_POST['payoptions'];
  		$contact = implode(',', $_POST['contact']);
  		$path="uploaded_imgs/";
		$path=$path.$_FILES['files']['name'];
		    
		if(move_uploaded_file($_FILES['files']['tmp_name'],$path))
		{
		echo " ".basename($_FILES['files']['name'])." has been uploaded<br/>";
		echo '<img src="./uploaded_imgs/'.$_FILES['files']['name'].'" width="100" height="100"/>';
		$img=$_FILES['files']['name'];   
		}
		$conn = mysqli_connect("localhost","root","","digital_kisan") or die ("could not connect to mysql");
		$sql="INSERT INTO items (`name`,`description`,`sprice`,`quantity`,`mdate`,`edate`,`img`,`currency`,`country`,`location`,`payment`,`contact`,`owner`) values ('$c_name','$desc','$start_price','$quant','$start_date','$end_date','$path','$curr','$count','$add','$pay','$contact','$owner')";
		$query=mysqli_query($conn, $sql) or die(mysql_error()) ;
		if($sql){
     echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Added Succesfully ');
      </SCRIPT>");
     header('Location: wprofile.php');
}		
    }
?>
<html>
<body class="hold-transition login-page">
<?php
header("wprofile.php");
?>
</body>
</html>