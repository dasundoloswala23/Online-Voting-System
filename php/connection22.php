<?php 

$con = new mysqli("localhost","root","","testing");

if ($con->connect_error){
 die ("connection failed:" .$con->connect_error);

}

//echo "conneceted"
?>
