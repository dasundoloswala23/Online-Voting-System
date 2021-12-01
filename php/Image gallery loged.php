<?php

session_start();

?>

<html>

<head>


<link rel ="stylesheet" href = "css/tharinducss4/home2.css">

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
        margin: center;
		align :center;
		top: 0px;
		left :40%;
      }
h1 {
    color: #004085;
}
h1 {
    color: #fdfdfe;
}
h1 {
    color: #000000;
}
</style>

<title> Teens Got Talent </title>
</head>

<body background="web images/background2.jpg">

<div class="topic">
  
<img src="web images/star.png" alt="Snow" style="width:15%">
<h1 class="heading" style="color:white"> &nbsp; &nbsp; &nbsp; <strong>TEENS GOT TALENT</strong></h1>
 <button class = "rbutto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="rbutto2"> </a>
  
</div>
<hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>





		
<div  align="center" class="vertical-menu">
		
  <video width="100%" height="10%" controls>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="web images/final.ogg" type="video/ogg">
  
</video>

</br> </br>

</br></br></br>
</br></br>
  <font size="4px"><a href="results.php">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.php" class="active">Schedule</a></font>
  
  <font size="4px"><a href="how to vote.php">How to Vote</a></font>
  
  <font size="4px"><a href="image gallery logef.php">Image Gallery</a></font>
  
  <font size="4px"><a href="previousvideos.php">Previous Videos</a></font>
    <a href="#"></a>
	 <a href="#"></a>

</div>

<div>
<table border="0.1" width="88%" height="60%"  >
			
			  <td><center>
		   <p color:"blue"; ><h1>Image Gallery </h1>    <a href="News loged.php">
    <img src="web images/singer 1.jpg"
       onmouseover="this.src='web images/singer11.jpg' ;"
       onmouseout="this.src='web images/singer 1.jpg';"   alt="" width="900" height="400">
    </img  >
</a>		    		     
</table>
&nbsp;</div>


  <tr>
   <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}


</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">


<center>
<h2>&nbsp;</h2>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('Singers')"> Singers</button>
  <button class="btn" onclick="filterSelection('Hall')"> Hall</button>
  <button class="btn" onclick="filterSelection('Events')"> Events</button>
</div>
</center>
<!-- button-->
	<br> &nbsp; &nbsp; &nbsp;<hr></br>

  <div class="column Singers" style="width:30% ; height=20% ; margin-left:3%" >
    <div class="content" style="width:100%" height="100%" >
      <img src="web images/singer 2.jpg" alt="Yoona" style="width:100%" height="20%">
      <h4>Yoona</h4>
      <p>Im Yoon-ah (Hangul: 임윤아; born May 30, 1990), known mononymously as Yoona, is a South Korean singer and actress. After training for five years, she debuted as a member of girl group Girls' Generation (and later its subgroup Girls' Generation-Oh!GG) in August 2007, which went on to become one of the best-selling artists in South Korea and one of South Korea's most popular girl groups worldwide</p>
    </div>
  </div>
  
  <div class="column Singers" style="width:30% ; height= 20% ; margin-left:3%">
    <div class="content" style="width:100%" height="100%">
    <img src="web images/so.jpg" alt="Lights"  style="width:100%" height="20%">
      <h4>Sonu Nigam</h4>
      <p>Sonu Nigam (born 30 July 1973)[2] is an Indian singer and composer.[3] He sings predominantly in Hindi and Kannada language films but has also sung in English, Bengali, Oriya, Gujarati, Tamil, Telugu, Marathi, Nepali, Maithili, Malayalam and other Indian languages.[4] Nigam has also released numbers of Indian pop albums and acted in a number of Hindi films</p>
    </div>
  </div>
  
  <div class="column Singers" style="width:30% ; height= 20% ; margin-left:3%">
    <div class="content" style="width:100%" height="100%">
    <img src="web images/singer41.jpg" alt="Singer 3"  style="width:100%" height="20%" >
      <h4>Chrissy Costanza</h4>
      <p>  CostChrissy Costanza was introduced to Dan Gow and Will Ferri through a mutual friend in 2011, joining their band. Against The Current soon started to write original songs, whose lyrics were mostly written by Chrissy. They also started to post covers of popular songs on YouTube. Against The Current released their first single "Thinking" in 2012. Meanwhile, Chrissy made a self-titled YouTube channel and started posting beauty videos.     </p>
    </div>
  </div>
  



	</div></div>
	<div class="row">
	<div class="column Hall" style="width:25%" height="20%" >
		<div class="content"style="width:100%" height="100%">
		<img src="web images/h2.jpg" alt="hall1"  style="width:100%" height="20%">
		<h4>Hall 1</h4>
      <p>The American version introduced a new mechanism in the blind auditions on the fourteenth season, the Block button. When a coach wants to get the specific contestant but does not want another coach to do so, he/she may press the block button to block them from getting the contestant, and then turn around at the same time. The coach who is blocked, will not know until he/she presses the main button, and after that he/she will get the word stating that he/she is blocked, instead of his/her name in the LED floor. </p>
		</div>
	</div>
  
  
	<div class="column Hall"style="width:25%" height="20%">
		<div class="content"  style="width:100%" height="100%">
		<img src="web images/h.jpg" alt="Hall2" style="width:100%" height="20%">
		<h4>Hall 2</h4>
			<p>mainstage was a step in the right direction to the future designs. As the festival expanded to two days for the first time in it’s history, the mainstage had to become bigger to accommodate two days of festival-goers. Featuring even more screens on the stage, they had started to make more of a focus on visuals and this was the last time that the mainstage would feature such a similar design as the previous years.</p>
		</div>
	</div>


	<div class="column Hall" style="width:25%" height="20%">
		<div class="content" style="width:100%" height="100%" >
		<img src="web images/h3.jpg" alt="Hall 2" style="width:100%" height="20%">
		<h4>Hall 3</h4> 
			<p> has a large above-ground cylinder-shaped lobby with stairs down to the auditorium. The theater has 350 parking spaces on North Tantau Avenue and a pedestrian path leading to the main campus located northwest of the theater.

The theater's lobby has cylindrical-shaped glass walls and no support columns, which give an unhindered 360-degree view of the surrounding campus. The 80-short-ton (73-metric-ton) carbon fiber roof, made of 44 identical panels, was supplied by the Dubai-based company, Premier Composite Technologies. </p>
		</div>
	</div>
	
	
	 
	 <br></br><br></br>
		<div class="row">
			<div class="column Events" style="width:30%" height="20%">
				<div class="content"style="width:100%" height="100%"  >
				<img src="web images/e1.jpg" alt="event" style="width:100%" height="20%">
				<h4>Tomorrowland 2018</h4>
				<p>The 2018 edition of Tomorrowland saw an attendance of 400,000 people for the second year running across the two weekends. The festival took place on Friday 20 to Sunday 22 July and Friday 27 to Sunday 29 July with tickets for the two weekends selling out in an hour.</p>
				</div>
			</div>
			
			<div class="column Events" style="width:30%" height="22%">
				<div class="content" style="width:100%" height="100%" >
				<img src="web images/e2.jpg" alt="event2" style="width:100%" height="22%">
				<h4>Tomorrowland 2019</h4>
				<p>Tomorrowland is an EDM and electronic music festival held in Boom, Belgium. Tomorrowland is the world's biggest dance music festival, bringing an A-list lineup of DJs from across the dance music spectrum to Boom in Belgium each summer.</p>
		
				</div></tr>
			</div></table>
		</div></div>
<!-- END GRID -->


<!-- END MAIN -->
</div>
</center>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


  


  
</center>


<footer  height = "50">
	<a href="https://www.facebook.com/"> <img src = "web images/facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="https://www.twitter.com"><img src = "web images/twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="https://www.instagram.com"><img src = "web images/instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides"align = "right">
  
        <img src="web images/coke.jpg" width = "272" height = "80" >
       
      </div>
      <div class="mySlides"align = "right">
       
   <img src="web images/mac.jpg"width = "272" height = "80">
        
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
