<?php

	require 'connection.php';
	session_start();
	if (isset ($_POST['submit'])){
		
	$username = $_POST["username"];
	$nfirstname = $_POST["nfirstname"];
	$nlastname = $_POST["nlastname"];
	$naddress = $_POST["naddress"];
	$ntelno = $_POST["ntelno"];
	$nemail = $_POST["nemail"];
	
	$query = "UPDATE registration SET firstname='$_POST[nfirstname]',lastname='$_POST[nlastname]',address='$_POST[naddress]',telno='$_POST[ntelno]',email='$_POST[nemail]' where username='$_POST[username]' ";
	
	$query_run = mysqli_query($con,$query);
	
	if($query_run){
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


<link rel ="stylesheet" type ="text/css" href = "updateprofile.css">

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
		left :40%;
      }
</style>

<title> Teens Got Talent </title>



</head>

<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT</h1>
  
<button class = "butto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="butto2"> </a>

  
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a class="active" href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>





		
<div  align="center" class="vertical-menu">
		
  <video width= "90%" height ="20%" controls>
  
  <source src="final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  
</video>

</br> </br>

</br></br>
   <font size="4px"><a href="#">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.html">Schedule</a></font>
  
  <font size="4px"><a href="#">How to Vote</a></font>
  
  <font size="4px"><a href="#">Image Gallery</a></font>
  
  <font size="4px"><a href="#">Previous Videos</a></font>
</div>

<div>
<h1 align ="center"> UPADATE PROFILE </h1>

<form action="" method = "post"   align = "center">
<p><b>Please enter your username in order to change your details</b></br>
</p>: <input type="text" id="username" name="username"></br> </br>
<p>First Name</p>: <input type="text" id="name" name="nfirstname"></br> </br>
<p>Last Name</p>: <input type="text" id="name" name="nlastname"></br> </br>
<p>Address:</p><input type="text" id="address" name="naddress"></br> </br>
<p>Tel No:</p> <input type="text" id="telno" name="ntelno"></br> </br>
<p>Email Adress:</p><input type="text" id="email" name="nemail"></br> </br>
<input type="checkbox" id="confirm" name="confirm"class ="f1">Save and make all changes</br> </br>

&nbsp; &nbsp;&nbsp;<a href = "useraccountdetails.php">
&nbsp; &nbsp;&nbsp;<input type = "submit" name ="submit" value ="Save Changes"> </a>
</form>

</div>

</br> </br> </br> </br> </br></br>
<footer  height = "50">
	<a href="https://www.facebook.com/"> <img src = "facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="https://www.twitter.com"><img src = "twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="https://www.instagram.com"><img src = "instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides">
 
        <img src="coke.jpg" width = "272" height = "80" >
       
      </div>
      <div class="mySlides">
       
   <img src="mac.jpg"width = "272" height = "80">
        
      </div>
</footer>
	  
 <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>

</body>
