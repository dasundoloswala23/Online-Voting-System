<?php
$con= mysqli_connect("localhost","root","","votingsystem");

if (isset($_POST['upload'])){
	$file = $_FILES['image']['name'];
	
	$target = 'image/' . $file;
	
	$query = "INSERT INTO uploadimage(image) values ('$file')";
	
	$res = mysqli_query($con,$query);
	
	if ($res)
	{
		move_uploaded_file($_FILES['image']['tmp_name'],"$target");
	}
}
?>


<html>
<head>	
</head>

<body>
<form action ="?" method = "post" enctype = "multipart/form-data">
<input type = "file" name = "image" id = "file">
<input type ="submit" name = "upload" value = "upload">
</form>

<?php 
 /*
$sel = "SELECT * FROM uploadimage";
$que = mysqli_query($con,$sel);

$output = "";

if (mysqli_num_rows($que)<1){
	$output .="<h3> no image uploaded </h3>";
}

while ($row = mysqli_fetch_array($que))
{
	$output = "<img src ='".$row['image']."'>";
}
*/
?>
</body>
</html>