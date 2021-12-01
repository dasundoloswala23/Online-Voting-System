<?php

require 'connection.php';
session_start();
$username = $_SESSION['username'];
	
$sql = "select lastname,address,telno,email from registration where username ='$username'";
$result = $con->query($sql);

if ($result->num_rows>0){
		while ($row=$result->fetch_assoc()){
			echo  $row["lastname"].$row["address"] .$row["email"] .$row["telno"] ;
		
			echo "</br>";
		}
}
		else{
			echo "no results";
		}
	
		$con->close();

?>