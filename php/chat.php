<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
	 <link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/wprofile.css">
<link rel="stylesheet" type="text/css" href="../css/search.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<script type="text/javascript" src="autocomplete.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<style>
.sendmsg input[type=submit]
{
	width:80px;
	padding:5px;
	font-size:15px;
	border-radius:5px;
	border:none;
	font-family: sans-serif;
	text-align: center;
	color:#919191;
	background-color:#494949;

}
.sendmsg input[type=submit]:hover{
	color:white;
	background-color:#1eaa83;

}
.sendmsg{
	padding:10px;
	top:530px;
	
	position:absolute;
	width:375px;
	margin-left:490px;
	margin-right:auto;	
	display:inline-block;
	border-radius:5px;
	background:#d4d4d6;

}
table{
	padding:10px;
	width:400px;
	height:300px;
	margin-left:auto;
	margin-right:auto;
	margin-top:20px;	
	color: white;
	border-radius:5px;
}
h2{
	color:#919191;
	font-size:30px;
}
	</style>
</head>
<body>
<body style="background:#f4f5f7;"> 
<div class="header" style="height:80px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
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
<h2   align="center">Chat Room</h2>
<form action="process.php" id="form" method="post" name="form" style="margin-top: 5%;" >
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "digital_kisan") or die ("could not connect to mysql");  
if(isset($_SESSION['email'])){
	$username = $_SESSION['username'];
}
else {
    header('Location: login.php');
   die();
}
	$user_active =$_SESSION['username'];
	$sqlCommand="select * from chat";
	$query=mysqli_query($conn, $sqlCommand) or die(mysql_error()) ;
echo "<div><table style = \"color:white; background: #151719  ;overflow:auto;display:flex;flex-direction:column;\">";
		if($query) {
                while($row = mysqli_fetch_assoc($query) ) {
      if($row['status']==1){ 
			echo '<tr><td style="color:white;"><div class="bullet" ></div></td>';
	 } 
	 else {
	 	echo '<tr><td><div class="bye"></div></td>';
	 
	 }         	
echo '<td colspan="300px">
	'.$row["name"] .'</td> <td>:</td> <td>' .$row["msg"].'</td></tr></div>';
	}
}

echo "</table>";
?>
<br><br>
<div class="sendmsg" >
<textarea id="msg" name="message" cols="47" placeholder="Message"></textarea><br><br>
<input  type="submit" style="width:80px;padding:5px;font-size:15px;border-radius:5px;border:none;font-family: sans-serif;text-align: center;color:white;"value="Submit" name="submit" id="submit" required="">
</form>
<form action="logout.php" style="float:right">
	<input type="submit" style="background:#d62626;width:80px;padding:5px;font-size:15px;border-radius:5px;border:none;font-family: sans-serif;text-align: center;color:white;"value="Logout" name="submit" id="submit" value="logout" >
	</form>
</div>
</body>

</html>