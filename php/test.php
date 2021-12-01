<?php 
	session_start();
	require 'connection.php';
	
	if (isset ($_POST['submit'])){

	$firstname = $_POST["fname"];
	$lastname = $_POST["lname"];
	$gender = $_POST["gender"];
	$telno = $_POST["telno"];
	$address = $_POST["address"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirm = $_POST["confirm"]; 
	
	
	$dup = mysqli_query($con,"select * from registration where username = '$username'");
	
	if (mysqli_num_rows($dup)>0)
	{
		echo "username already taken retry enterig a different username";
		function redirect ($location,$delay=3) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('registration.php');
	}
	
	else {
		
		$sql = "INSERT INTO registration (firstname,lastname,gender,address,telno,username,password,confirm) 
		VALUES('$firstname', '$lastname', '$gender', '$address', $telno, '$username', '$password', '$confirm') ";
		
		if($con->query($sql)){
			function redirect ($location,$delay=0) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('homepage after login.php');
		
		}
		else{
			echo "Error:". $con->error;
			function redirect ($location,$delay=0) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('registration.php');
		}
		}
	$con->close();
	}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div>
        <strong>Password: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="password" id="pass1" name="password"></br> </br></strong>
<strong> Confirm Password: 	<input type="password" id="pass2" name="confirm" class ="f1"> <label> result </label> </br> </br></strong>
    </div>
    
    <script src="confirmpassword.js"></script>
</body>
</html>