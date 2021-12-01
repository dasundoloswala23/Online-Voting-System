<?php
require 'connection.php';
?>

<html>

<head>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		  ['id', 'votes'],
         <?php
         $sql = "SELECT * FROM vote";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['id']."',".$result['votes']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Voting results',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
<link rel ="stylesheet" type ="text/css" href = "results.css">


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
</style>
<style>
body {
  background-image: url('pngtree-cool-music-festival-carnival-character-silhouette-background-design-backgroundcolorfullivelycharacter-carnivalholiday-backgroundmusic-image_70553.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<style>
.butto a{
	text-decoration: none;
	color: white;
}
</style>

<title> Teens Got Talent </title>
<style>
	.chart {
		padding-left: 30%;
	}
	</style>



</head>

<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT </h1>
  
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


		
<div  align="center" class="vertical-menu">
		
 <embed src="Final.mp4" width="100%" height="20%"></embed>
</br> </br>

<br></br>
  <a href="resultsbefore.php">View Results</a>
  
  <a href="please.html">Schedule</a>
  
  <a href="how to vote.html">How to Vote</a>
  
  <a href="please.html">Image Gallery</a>
  
  <a href="please.html">Previous Videos</a>
</div>
<div>
<center>
<h1 class="font"><b>Results of the Event</b></h1></center>

<img src = "avatar.png" class ="win1" width = "200" height ="200">
<img src = "lady.png" class ="win2" width = "200" height ="200">
<img src = "avatar2.png" class ="win3" width = "180" height ="180">

<img src = "gold1.jpg" class ="trophie1" width = "200" height ="200">
<h2 class = "w1"> WINNER </h2>
<img src = "silver.png" class ="trophie2" width = "180" height ="180">
<h2 class = "w2"> 1<sup>ST</sup> RUNNERS UP </h2>
<img src = "bronze.png" class ="trophie3" width = "180" height ="180">
<h2 class = "w3"> 2 <sup>ND </sup> RUNNERS UP </h2>

</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br>

</br> </br>


<div  class="chart" id="donutchart" align ="center" style="width:1000px; height: 400px;"></div>


<!--<ul>
<li><p class = "p1"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WINNER</b> </p>
<div class="container">
  <div class="skills html">90%</div>
</div></li>

</br> </br> 
<li><p class = "p2"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1ST RUNNERS UP</b></p>
<div class="container">
  <div class="skills css">80%</div>
</div></li>

</br> </br>
<li><p class = "p3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;2ND RUNNERS UP</b> </p>
<div class="container">
  <div class="skills js">65%</div>
</div></li></ul>
</div>-->

</br> </br> </br> </br> 



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
</html>