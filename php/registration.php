<?php 
	session_start();
	require 'connection.php';
	$status = '';
	
	if (isset ($_POST['submit'])){

	$firstname = $_POST["fname"];
	$lastname = $_POST["lname"];
	$gender = $_POST["gender"];
	$telno = $_POST["telno"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirm = $_POST["confirm"];

	
	$dup = mysqli_query($con,"select * from registration where username = '$username'");
	
	if (mysqli_num_rows($dup)>0)
	{
				$_SESSION['username'] = $username;
				
		
		$status = '<p class="error">Username already taken try entering a new username.</p>';
		function redirect ($location,$delay=0) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('registration.php');
	}

	
	else {
		
		$sql = "INSERT INTO registration (firstname,lastname,gender,address,telno,email,username,password,confirm) 
		VALUES('$firstname', '$lastname', '$gender', '$address', $telno,'$email', '$username', '$password', '$confirm') ";
		
		if($con->query($sql)){
			function redirect ($location,$delay=2) {
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
			
			$sql = "select lastname,address,telno,email from registration where username ='$username'";
				$result = $con->query($sql);

				if ($result->num_rows>0){
				while ($row=$result->fetch_assoc()){
			
				$_SESSION['username'] = $username;
				
				}
				}
		
			redirect ('homepage after login.php');
		
		}
		else{
			echo "Error:". $con->error;
			function redirect ($location,$delay=1) {
				
				echo "<meta http-equiv='refresh'content ='$delay; url=$location'/>";
			}
		
			redirect ('registration.php');
		}
		}
	$con->close();
	}
?>

<html>

<head>


<link rel ="stylesheet" type ="text/css" href = "registration.css">


<style>
 .mySlides {
        display: none
		
		
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 800px;
        position: relative;
        margin: auto;
		align :center;
		top: 0px;
		left :37%;
      }
	  
	  .success {
	background: green;
	color: white;
	padding: 15px;
	text-align: center;
	font-weight: bold;
	}

	.error {
		background: red;
		color: white;
		padding: 15px;
		text-align: center;
		font-weight: bold;
	}

	p.success {
		background: green;
		color: white;
		padding: 15px;
		text-align: center;
	}

	p.error {
		background: red;
		color: white;
		padding: 15px;
		text-align: center;
	}
</style>
<style>
body {
  background-image: url('background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

<title> Teens Got Talent </title>

<script>

	var Myapp = angular.module('ChkTos',[])
	Myapp.controller("clickchk",function($scope)){
		
	});
</script>
</head>

<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:black"> TEENS GOT TALENT </h1>
  
  <button class = "butto"> <a  href="login.html" style="color:white;"> login</a> </button>
  
  <button class = "butto2"><a  href="registration.php" style="color:white;"> register </a> </button>
  
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="please.html">News</a>
  <a  href="homepage.html">Home</a>
  <a href="please.html">Vote</a>
  <a href="sponsor.html">sponsers</a>
  <a href="please.html">Highlights</a>
  <a href="contact-us.php">Contact us</a>
  <a href="Terms and ConditionsLogin.html">Terms and conditions</a>
</div>



		
<div  align="center" class="vertical-menu">
		
   <video width="90%" height="20%" controls>
  
  <source src="final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  
</video>
</br> </br>

<br></br>
  <a href="resultsbefore.php">View Results</a>
  
  <a href="please.html">Schedule</a>
  
  <a href="how to vote.html">How to Vote</a>
  
  <a href="please.html">Image Gallery</a>
  
  <a href="please.html">Previous Videos</a>
</div>

<div>
<h1 align ="center"> REGISTRATION </br> FORM </h1></br>
<?php echo $status; ?>

<form align = "left" method = "post" action ="registration.php">
<div align  = "100px">
<strong>First Name :&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" id="fname" name="fname" style="width:650px" required></br> </br></strong>
<div class = "sub">
  
<strong>Last Name: &nbsp;&nbsp;	&nbsp;&nbsp;<input type="text" id="lname" name="lname" style="width:650px"required></br> </br></strong>
<strong>Gender &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp; &nbsp;&nbsp;<input type ="radio" name = "gender" value = "male" id = "male"required> Male&nbsp;
                   <input type ="radio" name = "gender" value = "female" id = "female"required> Female </br> </br></strong>
<strong>Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;	<input type="text" id="adress" name="address" style="width:650px"required></br> </br></strong>
<strong>Tel No  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" id="telno" name="telno"required></br> </br></strong>
<strong>Email:&nbsp; &nbsp;&nbsp;&nbsp;	<input type="text" id="email" name="email"required></br> </br></strong>
<strong>User Name:&nbsp; &nbsp;&nbsp;&nbsp;	<input type="text" id="username" name="username"required></br> </br></strong>
<strong>Password: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="password" id="password" name="password"class = "password"required></br> </br></strong>
<strong> Confirm Password: 	<input type="password" id="confirmpassword" name="pass2"class ="f1"required> <label> result </label>
</br> </br></strong>
 <div ng-app="ChkTOS" ng-controller="clickchk">
<input type="checkbox" id="confirm" name="confirm"class ="f1" ng-model="chkvalue" required>Agree to all Terms and Conditions</br> </br> 

<input type = "submit" name ="submit" class="fsub" value ="Register"ng-disabled="chkvalue">



</div>
</div>

</form>
</div>
<br></br>
<br></br>


<footer  height = "50">
	<a href="https://www.facebook.com/"> <img src = "facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="https://www.twitter.com"><img src = "twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="https://www.instagram.com"><img src = "instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides">
  
        <img src="coke.jpg" width = "300" height = "80" >
       
      </div>
      <div class="mySlides">
       
   <img src="mac.jpg"width = "300" height = "80">
        
      </div>
</footer>
	  <script src="slide.js"></script>
 <script>

	document.querySelector('.fsub').onclick=function(){
		var password = document.querySelector('.password').value,
		confirmpassword = document.querySelector('.f1').value;
		if (password == ""){
			alert("Field cannot be empty.");
		}
		else if (password != confirmpassword){
			alert("password didn't match!! try again.");
			return false
		}
		else if (password == f1){
			alert("password match.:)");
		}
		return true
	}
</script>
	  
	  </script>
	 

</body>
</html>
	