<?php
		session_start();
			$myConnection= mysqli_connect("localhost","root","", "digital_kisan") or die ("could not connect to mysql"); 
			$msg= $_POST['message'];

			if (strlen($msg) != 0){
					$sqlCommand="insert into chat (user_id,name,msg,status) values (".$_SESSION["id"].",'".$_SESSION["username"]."','$msg',1)";
				$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;
				echo $sqlCommand;
				header('Location: chat.php');
	}
	else{

		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Enter some text!');
    window.location.href='../php/chat.php';
    </script>");
	}
?>
