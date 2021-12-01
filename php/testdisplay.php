<?php
require 'connection.php';
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	
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
}	
		$con->close();

?>
<html>
<head>
</head>

<body>

<form action = "" method = "POST">

<input type = "text" name ="username">

<input type = "submit" name = "submit" value = "search">

</form>.
</body>
</html>
