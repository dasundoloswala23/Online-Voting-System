<?php
require 'connection.php';

$sql="select count(id) as total from performerscount where performer = 'performer1' ";


$result = mysqli_query($con,$sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];

$sql = "UPDATE vote 
	SET votes=('$num_rows') 
	WHERE id = '1'";
		
		if($con->query($sql)){
			echo "success";
		
		}
		else{
			echo "Error:". $con->error;
		}
		
		
echo $num_rows;


$sql="select count(id) as total from performerscount where performer = 'performer2' ";

$result = mysqli_query($con,$sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];

$sql =  "UPDATE vote 
	SET votes=('$num_rows') 
	WHERE id = '2'";
		
		if($con->query($sql)){
			echo "success";
		
		}
		else{
			echo "Error:". $con->error;
		}



echo $num_rows;

?>