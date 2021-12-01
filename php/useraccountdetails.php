<?php

require 'connection.php';
session_start();

?>

<html>

<head>


<link rel ="stylesheet" href = "useraccount.css">

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
  <a  href="homepage after login.php">Home</a>
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
  <font size="4px"><a href="results.php">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.php">Schedule</a></font>
  
  <font size="4px"><a href="how to vote.php">How to Vote</a></font>
  
  <font size="4px"><a href="image gallery loged.php">Image Gallery</a></font>
  
  <font size="4px"><a href="previousvideos.php">Previous Videos</a></font>
  
</div>


<div>
</br> </br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<img src ="lady2.jpg "  width ="150" height = "150" >
	
	<div class ="vertical"> </div> <h1 class =h2c> <?php echo ($_SESSION['username']);?> </h1>
	<h2 class ="h2d">User Details </h2> </br> </br> </br> <hr class ="hr"></br> </br>
	
  <div class="topnavb" align="center">
  
  <a  href="useraccountdetails.php" class ="active2">Personal Details</a>
  
  <a href="favouriteperformer.php">Favourite Performers</a>
  
  <a href="loginactivity.php">Login Activity</a>
  
  <a href="report.php">Reports</a>
</div>
<ul type ="disc" class ="h3">
<?php

$username = $_SESSION['username'];
	
$sql = "select firstname,lastname,address,telno,email from registration where username ='$username'";
$result = $con->query($sql);

if ($result->num_rows>0){
		while ($row=$result->fetch_assoc()){
		 echo "<li>Name -" ;
		 echo $row["firstname"] ." ".$row["lastname"] ; 
		 echo "</li> </br>";
		 
		echo "<li>Telephone Number -" ;
		 echo $row["telno"] ; 
		 echo "</li> </br>";
		 
		echo "<li>Address -" ;
		 echo $row["address"] ; 
		 echo "</li> </br>";
		 
		echo "<li>Email Adress -" ;
		 echo $row["email"] ; 
		 echo "</li> </br>";
		
		
			echo "</br>";
		}
}
		else{
			echo "no results";
		}
	
		$con->close();

?>
 <a href ="updateprofile.php">
  <button class = "butto3"> Edit Profile </button></a>
  
  <button class = "butto4"> Reset Profile to Default </button> 
</div>

</br> </br> </br> </br></br> </br> </br></br> </br> </br> </br> </br> </br>
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
<script src="slide.js"></script>
</body>
