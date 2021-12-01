<?php
session_start();
?>

<html>

<head>

<link rel ="stylesheet" href = "previousvideos.css">

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
.butto a{
	text-decoration: none;
	color:white;
}
</style>
<title> Teens Got Talent </title>



</head>

<body>

<div class="topic">

  <img src="web images/star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT </h1>
  
<button class = "butto"><a href = "logout.php"> logout </a> </button>
 
  <a href ="useraccountdetails.php">
  <img src ="web images/lady.png"  width ="50" height = "50" class ="butto2"> </a>

  
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


 <h1 align = "center"> Latest Episode </h1> </br>
  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp &nbsp; &nbsp; &nbsp  &nbsp; &nbsp;<video width= "70%" height ="63%" controls>
  
   &nbps&nbps&nbps&nbps&nbps&nbps&nbps&nbps; <source src="web images/latest episode.mp4" class ="vid2" type="video/mp4" class = "vid">
  
  <source src="final.ogg" type="video/ogg">
  
</video>
</br> </br> </br></br> </br> </br></br> </br> </br></br> </br> </br></br> </br> </br></br> </br> </br>

<h2 class ="header2"> Featured Videos </h2>
 <video width= "20%" height ="40%" class = "vid" controls>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  </video>
  <p style ="position:absolute;left:38%;top:163%;">The Crowd and the judges </br>were stunned by the </br> peformance of lewis witon</p>	
  <span class = "vertical-line"> </span>
  
  </br> </br> </br> </br> </br> </br> </br> </br> </br>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
<h2 class ="header22"> Special Moments </h2>
<video width= "20%" height ="40%" class = "vid2" controls>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  </video> </br>
   <p style ="position:absolute;left:64%;top:167%;">The Crowd and the judges were stunned by the </br> &nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peformance of lewis witon</p>	

<div class="paginationb">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div> </br> </br> </br> 

  <div class = "align0">
    <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
      </div>
    </div>
	</div>

    <script src="calender.js"></script>
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
</br> </br> </br>
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