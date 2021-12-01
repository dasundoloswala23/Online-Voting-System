<?php

require 'connection.php';
session_start();

?>

<html>

<head>


<link rel ="stylesheet" href = "css/jehancss3/loginactivity.css">

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
<style>

.butto a{
	text-decoration: none;
	color: white;
}</style>

<title> Teens Got Talent </title>



</head>

<body>

<div class="topic">

  <img src="web images/star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT  </h1>
  
  <button class = "butto"><a href = "logout.php"> logout </a> </button>
  
  <a href ="useraccountdetails.php">
  <img src ="web images/lady.png "  width ="50" height = "50" class ="butto2"> </a>

  
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a  href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>




		
<div  align="center" class="vertical-menu">
		
  <video width= "90%" height ="20%" controls>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  
</video>

</br> </br>

</br></br>
  <font size="4px"><a href="results.php">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.php">Schedule</a></font>
  
  <font size="4px"><a href="how to vote.php">How to Vote</a></font>
  
  <font size="4px"><a href="image gallery loged.php">Image Gallery</a></font>
  
  <font size="4px"><a href="previousvideos.php">Previous Videos</a></font>
</div>


<div>

</br> </br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<img src ="web images/lady2.jpg "  width ="150" height = "150" >
	
	<div class ="vertical"> </div> <h1 class ="h2c"> <?php echo ($_SESSION['username']);?> </h1>
	<h2 class ="h2d">User Details </h2> </br> </br> </br> <hr class ="hr"></br> </br>
	
  <div class="topnavb" align="center">
 
  <a  href="useraccountdetails.php">Personal Details</a>
  
  <a href="favouriteperformer.php">Favourite Performers</a>
  
  <a href="loginactivity.php" class ="active2">Login Activity</a>
  
  <a href="report.php">Reports</a>
  </div>
  
<table border="1" width="86.5%" height="60%" class = "tb">
	<tr> <th> Date </th> <th> time</th> <th> Past Activities </th>
	</tr>
	<tr> <td> 15/02/2020 </td> <td> 1945hrs </td> <td> <ul type = "disc"> <li>Watched a livestream </li> <li> visited the news </li> <li>checked the schedule </li>
	</td> </tr>
	<tr> <td> 22/02/2020 </td> <td> 1805hrs </td> <td> <ul type = "disc"> <li>Visited the previous videos </li> <li> visited the image gallery </li> <li>checked some highlights </li>
	</td> </tr>
	<tr> <td> 25/02/2020 </td> <td> 2000hrs </td> <td> <ul type = "disc"> <li>Watched a livestream </li> <li> viewed results</li> <li>checked the schedule </li>
	</td> </tr>
	<tr> <td> 08/03/2020 </td> <td> 2105hrs </td> <td> <ul type = "disc"> <li>Watched a livestream </li> <li> viewed the results </li> <li>Voted for Nayomi Silvs </li>
	</td> </tr>
</table>
</div>


</br> </br> </br> </br></br> </br> </br></br> </br> </br> </br> </br> </br></br> </br> </br> </br></br> </br> </br></br> </br> </br> </br> </br>
<footer  height = "50">
	<a href="https://www.facebook.com/"> <img src = "web images/facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="https://www.twitter.com"><img src = "web images/twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="https://www.instagram.com"><img src = "web images/instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides">
  
        <img src="web images/coke.jpg" width = "272" height = "80" >
       
      </div>
      <div class="mySlides">
       
   <img src="web images/mac.jpg"width = "272" height = "80">
        
      </div>
</footer>
	  
<script src="slide.js"></script>
</body>

</html>
