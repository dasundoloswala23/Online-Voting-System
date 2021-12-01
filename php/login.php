<?php 

	session_start();
	if (isset($_POST['submit'])){
	$username= $_POST['username'];
	$password= $_POST['password'];

	$con = new mysqli("localhost","root","","votingsystem");

				
				
	if ($con->connect_error){
	die ("connection failed:" .$con->connect_error);

	} else {
		$stmt = $con->prepare("select * from registration where username = ?");
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc(); 
			
			if($data['password']===$password) {
				echo "login sucessful";
				$sql = "select lastname,address,telno,email from registration where username ='$username'";
				$result = $con->query($sql);

				if ($result->num_rows>0){
				while ($row=$result->fetch_assoc()){
			
				$_SESSION['username'] = $username;
				
				}
				}
				function redirect ($location,$delay=1) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('homepage after login.php');
				
			} 
			else {
				echo "<h2> invalid username or password </h2>"; 
		
				function redirect ($location,$delay=2) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('login.html');
				
			}
			}
		 else {
			echo "<h2> invalid username or password </h2>";
			
				function redirect ($location,$delay=2) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('login.html');
				
			}
	}
	}
	
?>
