<?php

session_start();
	$errors = array(); 

	$conn = mysqli_connect('localhost', 'root', '', 'digital_kisan') or die ("could not connect to mysql"); 

	//signup for farmers
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password =$_POST['password'];
		$email = $_POST['email'];
		$confirmpassword=$_POST['confirmpassword'];
		$phone =$_POST['phone'];
		$aadhar = $_POST['aadhar'];
		$jandhan = $_POST['jandhan'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$pincode = $_POST['pincode'];
	
		
		if (empty($username)) { array_push($errors, "username is required."); }
		if (empty($password)) { array_push($errors, "password is required."); }
		if (empty($confirmpassword)) { array_push($errors, "confirm password is required."); }
		if (empty($phone)) { array_push($errors, "Phone number is required."); }
		if (empty($aadhar)) { array_push($errors, "aadhar is required."); }
		if (empty($jandhan)) { array_push($errors, "jandhan is required."); }
		if (empty($location)) { array_push($errors, "location is required."); }
		if (empty($date)) { array_push($errors, "date is required."); }
		if (empty($pincode)) { array_push($errors, "pincode is required."); }

		if ($password != $confirmpassword) {
			echo "<script>alert('The two passwords do not match.')</script>";
		}

		if (count($errors) == 0) {
		$query = "INSERT INTO farmerdetails (username,password,email,phone,aadhar,jandhan,location,date_now,pincode) 
		VALUES('$username','$password','$email','$phone','$aadhar','$jandhan','$location','$date','$pincode')";
		$sql = mysqli_query($conn, $query);
		echo "<script>alert('Succefully registered.')</script>";
		}	
	}


	//signup for wholesaler
	if (isset($_POST['wsubmit'])) {

		$username = $_POST['username'];
		$password =$_POST['password'];
		$email = $_POST['email'];
		$confirmpassword=$_POST['confirmpassword'];
		$phone =$_POST['phone'];
		$aadhar = $_POST['aadhar'];
		$shopid = $_POST['shopid'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$pincode = $_POST['pincode'];
	
		
		if (empty($username)) { array_push($errors, "username is required."); }
		if (empty($password)) { array_push($errors, "password is required."); }
		if (empty($confirmpassword)) { array_push($errors, "confirm password is required."); }
		if (empty($phone)) { array_push($errors, "Phone number is required."); }
		if (empty($aadhar)) { array_push($errors, "aadhar is required."); }
		if (empty($shopid)) { array_push($errors, "shop id is required."); }
		if (empty($location)) { array_push($errors, "location is required."); }
		if (empty($date)) { array_push($errors, "date is required."); }
		if (empty($pincode)) { array_push($errors, "pincode is required."); }

		if ($password != $confirmpassword) {
			echo "<script>alert('The two passwords do not match.')</script>";
		}

		if (count($errors) == 0) {
		$query = "INSERT INTO salerdetails (username,password,email,phone,aadhar,shopid,location,date_now,pincode) 
		VALUES('$username','$password','$email','$phone','$aadhar','$shopid','$location','$date','$pincode')";
		$sql = mysqli_query($conn, $query);
		echo "<script>alert('Succefully registered.')</script>";
		}	
	}


	// farmer login
	if (isset($_POST['login'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];

		if (empty($email)) { array_push($errors, "Email ID is required."); }
	    if (empty($password)) { array_push($errors, "Password is required."); }

		if (count($errors) == 0) {
			$query = "SELECT * FROM farmerdetails WHERE email='$email' AND password='$password' ";
			$results = mysqli_query($conn, $query);
			$arr=mysqli_fetch_array($results);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['id'] = $arr['farmerid'];
				$_SESSION['location'] = $arr['location'];
				$_SESSION['username'] = $arr['username'];
				header('location: main.php');
			}else {	
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	

	//wholesaler login
	if (isset($_POST['loginw'])) {

		$emailw = $_POST['emailw'];
		$passwordw = $_POST['passwordw'];

		if (empty($emailw)) { array_push($errors, "Email ID is required."); }
	    if (empty($passwordw)) { array_push($errors, "Password is required."); }

		if (count($errors) == 0) {
			$query = "SELECT * FROM salerdetails WHERE email='$emailw' AND password='$passwordw' ";
			$results = mysqli_query($conn, $query);
			$arr=mysqli_fetch_array($results);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $emailw;
				$_SESSION['location'] = $arr['location'];
				$_SESSION['id'] = $arr['id'];
				$_SESSION['username'] = $arr['username'];
				header('location: wprofile.php');
			}else {	
				array_push($errors, "Wrong username/password combination");
		}
	}
}




//feedback
if(isset($_POST['send']))
{
	$sender=$_POST['sender'];
	$msg=$_POST['msg'];

	if (count($errors) == 0) {
		$query = "INSERT INTO feedback (sender,msg) VALUES('$sender','$msg')";
		$sql = mysqli_query($conn, $query);
		echo "<script>alert('Feedback was sent Succefully.')</script>";
		}	
		else{
			echo "<script>alert('An error was encountered.')</script>";
		}

}


//items


?>