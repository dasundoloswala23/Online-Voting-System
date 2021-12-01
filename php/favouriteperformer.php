<?php
session_start();
?>

<html>

<head>


<link rel ="stylesheet" href = "css/jehancss2/favperformer.css">



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

  <img src="web images/star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT  </h1>
  
   <button class = "butto"> <a href="logout.php">logout </a></button>
  
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
	
	<div class ="vertical"> </div> <h1 class ="h2c"><?php echo ($_SESSION['username']);?> </h1>
	<h2 class ="h2d">User Details </h2> </br> </br> </br> <hr class ="hr"></br> </br>
	
  <div class="topnavb" align="center">
  
  <a  href="useraccountdetails.php">Personal Details</a>
  
  <a href="favouriteperformer.php" class ="active2">Favourite Performers</a>
  
  <a href="loginactivity.php">Login Activity</a>
  
  <a href="report.html">Reports</a>
  </div>
<table border="0.1" width="88%" height="60%" class ="tb">
	<tr><td>
<div id="btnContainer">
  <button class="btn active" onclick="listView()"><i class="fa fa-bars"></i> Grid</button> 
  <button class="btn" onclick="gridView()"><i class="fa fa-th-large"></i> List</button>
</div>

  <div class="row">
  <div class="column" style="background-color:#2E86C1  ;">
    <img src ="web images/singer1.jpg" width ="150" height = "100">  
	<h2>Anita Fonseka</h2>

  </div>
  <div class="column" style="background-color:#5DADE2 ;">
        <img src ="web images/singer2.jpg" width ="80" height = "100">  
    <h2>Nayomi Silva</h2>
    
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#AED6F1 ;">
      <img src ="web images/singer3.jpg" width ="100" height = "100">
    <h2>mike Perera</h2>
    
  </div>
  <div class="column" style="background-color:#D6EAF8 ;">
        <img src ="web images/singer4.jpg" width ="150" height = "100">
	<h2>Ben Hamilton</h2>
    
  </div>
</div>
	</td> </tr> 
	</table>
</div>

</br> </br> </br> </br></br> </br> </br></br> </br> </br> </br> </br> </br></br> </br> </br> </br></br> </br> </br></br> </br> </br> </br> </br>
</br> </br> </br></br> 	</br> </br> </br> </br> </br> </br></br> </br> </br></br> </br> </br> </br> </br> </br></br> </br>

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
<script src = "favperformer.js"> </script>
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
	  
	  // Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// list View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
    </script>

</body>
