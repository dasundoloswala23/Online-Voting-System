<?php
	require 'connection.php';
	
	if ( isset($_POST['submit']) ) {
	
		$username		= $_POST['username'];
		$npassword      = $_POST['npassword'];
		
		$sql ="UPDATE registration SET password='$npassword' WHERE username='$username'";
		
		if($con->query($sql)){
		
		echo "</br>it worked";
			
		
		}
		else{
		
		echo "</br>oh no";
			
		}
		}
		
?>

<html>
<head>
</head>

<body>

<form action = "reset password.php" method = "post">

<strong>User Name:&nbsp; &nbsp;&nbsp;&nbsp;	<input type="text" id="username" name="username"required></br> </br></strong>
<strong>User Name:&nbsp; &nbsp;&nbsp;&nbsp;	<input type="password" id="npassword" name="npassword"required></br> </br></strong>

<input type = "submit" name ="submit" value ="change password">

</form>

</body>
</html>