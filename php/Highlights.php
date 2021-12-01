<?php

session_start();

?>

<html>

<head>


<link rel ="stylesheet" href = "css/ranshikacss1/home.css">
<link rel="stylesheet" href=""https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script defer src="listgrid.js"></script>
<link rel ="stylesheet" href = "listgrid.css">
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

    <style>
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: black;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: black;
}
</style>


</head>

<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT </h1>
  
 <button class = "rbutto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="rbutto2"> </a>
  
  </div>
&nbsp;
<hr class="horizontal">
  


<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a  href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php"class="active">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>






		
<div  align="center" class="vertical-menu" style="height:195.5%;">
		
  <video width="90%" height="30%" controls autoplay>
  
  <source src="web images\final.mp4" type="video/mp4">
  
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
<table table border="0" width="88%" height="195.5%" background="web images\sgotb.jpg">
<td>
<div id="btnContainer" >
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="row">
  <div class="column">
    <h2 style="color:white;">Past Events</h2>
   <center><a href="#"><img src="web images\sponsor1.png" height=150px width=200px><img src="web images\ceramony.jpg " height=150px width=200px></a><p style="color:white;"><b>Thanks For Sponsoring our Season 2 performers on that Event.A moment where we had our musical performace with our season 2 Winners</b></p></center>
   <!--<center><a href="#"> <img src="..\images\ceramony.jpg " height=150px width=200px></a><p style="color:white;"><b>A moment where we had our musical performace with our season 2 Winners</b></p></center>-->
  </div>
  <div class="column">
    <h2 style="color:white;">Grand Finale Aword ceramony</h2>
    <center><a href="#"> <img src="web images\school.jpg" height=150px width=200px><img src="web images\sponsor2.jpg" height=150px width=200px></a><p style="color:white;"><b>A moment we had our Season 3 Finale Award Ceramony with the winners.Thanks For Sponsoring to our Award Ceramony of Season 3 Finale</b></p></center>
    <!--<center><a href="#"> <img src="..\images\sponsor2.jpg" height=150px width=200px></a><p><b>Thanks For Sponsoring to our Award Ceramony of Season 3 Finale</b></p></center>-->
  </div>
</div>

<div class="row">
  <div class="column">
    <h2 style="color:white;">Oncoming Events</h2>
    <center><a href=="#"><img src="web images\sponsor3.png" height=150px width=200px><img src="web images\shawn.jpg" height=150px width=200px></a><p style="color:white;"><b>Thanks for joining up with us for our oncoming event by sponsoring it.Oncoming Event to celebrate our 15th Annivasary of our show with stars</b></p></center>
    <!--<center><a href="#"> <img src="..\images\shawn.jpg" height=150px width=200px></a><p><b>Oncoming Event to celebrate our 15th Annivasary of our show with stars</b></p></center>-->
  </div>
  <div class="column">
    <h2 style="color:white;">Battle Of the Stars</h2>
    <center><a href=="#"><img src="web images\sponsor4.jpg" height=150px width=200px><img src="web images\shawn.jpg" height=150px width=200px></a><p style="color:white;"><b>Thanks for joining up with us for our trending event <i>"Battle of the stars"</i> by sponsoring it.These stars are ready to rock and roll for the sake of their audience</b></p></center>
    <!--<center><a href="#"> <img src="..\images\shawn.jpg" height=150px width=200px></a><p><b>These stars are ready to rock and roll for the sake of their audience</b></p></center>-->
  </div>
</div>
</td>
</table>
</div>


<footer  height = "50">
	<a href="www.facebook.com"> <img src = "web images\facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="www.twitter.com"><img src = "web images\twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="www.instagram.com"><img src = "web images\instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides">
  
        <img src="web images\coke.jpg" width = "272" height = "80" >
       
      </div>
      <div class="mySlides">
       
   <img src="web images\mac.jpg"width = "272" height = "80">
        
      </div>
</footer>
</div>

	  
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
