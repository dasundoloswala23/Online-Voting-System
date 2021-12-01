<?php

require 'connection.php';
	
	if (isset ($_POST['submit'])){


	$performer = $_POST["performer"];
	

		$sql = "INSERT INTO performer(performer) 
		VALUES('$performer') ";
		
		if($con->query($sql)){
			echo "success";
		
		}
		else{
			echo "Error:". $con->error;
		}
	$con->close();
	}
?>

<html>

<head>


<form align = "left" method = "post" action ="testing.php">

<strong>Gender &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp; &nbsp;&nbsp;<input type ="radio" name = "performer" value = "performer 1" id = "male"> Male&nbsp;
                   <input type ="radio" name = "performer" value = "performer 2" id = "female"> Female </br> </br></strong>

<input type = "submit" name ="submit" value ="submit">

</body>

</html>



</form>

</body>
</html>

		