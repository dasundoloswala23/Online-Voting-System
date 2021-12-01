<?php
session_start();
?>
<html>

<head>


<link rel ="stylesheet" href = "css/avishkacss1/homeavishka.css">

<title> Teens Got Talent </title>



</head>

<body>

<div class="topic" id="topic">

  <img src="web images/star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT</h1>
  
  <button class = "rbutto"> logout </button>
  
  <a href ="#">
  <img src ="web images/lady.png "  width ="50" height = "50" class ="rbutto2"> </a>
  
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





		
<div  align="center" class="vertical-menu" style="height:105%;">
		
  <video width="100%" height="20%" controls autoplay>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="../images/final.ogg" type="video/ogg">
  
</video>

</br> </br>

</br></br>
   <font size="4px"><a href="results.php">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.php" class="active">Schedule</a></font>
  
  <font size="4px"><a href="how to vote.php">How to Vote</a></font>
  
  <font size="4px"><a href="image gallery loged.php">Image Gallery</a></font>
  
  <font size="4px"><a href="previousvideos.php">Previous Videos</a></font>
</div>

<div style="background-image:url('web images/votebackgound2.jpg');height:100%;">
</br>
	<div>
		<center>
		<a class="shedulebtn" onclick="selection(1)">Qualifier 01</a>
		<a class="shedulebtn" onclick="selection(2)">Qualifier 02</a>
		<a class="shedulebtn" onclick="selection(3)">Qualifier 03</a>
		<a class="shedulebtn" onclick="selection(4)">Qualifier 04</a></br></br>
		<a class="shedulebtn" onclick="selection(5)">Grand Finale</a>
	</center>
	</div>

	</br>

	<div id="down1">
	<center><h3 style="color:white;">Qualifier 01 on 03/10/2020</h3></center>
	<table border="1" width="88%" height="60%" id="tb1" style="border-color:black;background-color: #D5DBDB ;">
			<tr style="background-color:#839192;">
				<th style="color:#838317;font-size:25px;">Round</th>
				<th style="color:#838317;font-size:25px;">Participants</th>
				<th style="color:#838317;font-size:25px;">Time</th>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.01</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer01"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height="100px" width="100px" title="Performer02"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.00pm-8.30pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.02</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer03"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer04" ></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.30pm-9.00pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#6BB88E ;font-size:25px;">Match No.03</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Match No.01"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of match No.02" ></a></center></td>
				<td align="center" style="color:#6BB88E ;font-size:25px;">On 9.00pm-9.30pm</td>
			</tr>
	</table>
	</div>
		
	<div id="down2">
	</br>
	<center><h3 style="color:white;">Qualifier 02 on 04/10/2020</h3></center>
	<table border="1" width="88%" height="60%" id="tb2" style="border-color:Black;background-color: #D5DBDB ;">
			<tr style="background-color:#839192;">
				<th style="color:#838317;font-size:25px;">Round</th>
				<th style="color:#838317;font-size:25px;">Participants</th>
				<th style="color:#838317;font-size:25px;">Time</th>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.04</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer05"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer06"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.00pm-8.30pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.05</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer07"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer08" ></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.30pm-9.00pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#6BB88E ;font-size:25px;">Match No.06</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Match No.04"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of match No.05"></a></center></td>
				<td align="center" style="color:#6BB88E ;font-size:25px;">On 9.00pm-9.30pm</td>
			</tr>
	</table>
	</div>

	<div id="down3">
	</br>
	<center><h3 style="color:white;">Qualifier 03 on 10/10/2020</h3></center>
	<table border="1" width="88%" height="60%" id="tb3" style="border-color:Black;background-color: #D5DBDB ;">
			<tr style="background-color:#839192;">
				<th style="color:#838317;font-size:25px;">Round</th>
				<th style="color:#838317;font-size:25px;">Participants</th>
				<th style="color:#838317;font-size:25px;">Time</th>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.07</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer09"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer10"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.00pm-8.30pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.08</td>
				<td><center><a href="#"><img src="web images../images/avatar.png" height=100px width=100px title="Performer11"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer12"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.30pm-9.00pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#6BB88E ;font-size:25px;">Match No.09</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Match No.07" ></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Match No.08"></a></center></td>
				<td align="center" style="color:#6BB88E ;font-size:25px;">On 9.00pm-9.30pm</td>
			</tr>
	</table>
	</div>

	<div  id="down4">
	</br>
	<center><h3 style="color:white;">Qualifier 04 on 11/10/2020</h3></center>
	<table border="1" width="88%" height="60%" id="tb4" style="border-color:Black;background-color: #D5DBDB ;">
			<tr style="background-color:#839192;">
				<th style="color:#838317;font-size:25px;">Round</th>
				<th style="color:#838317;font-size:25px;">Participants</th>
				<th style="color:#838317;font-size:25px;">Time</th>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.10</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer13"></a><img src="../images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer14"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.00pm-8.30pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Match No.11</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer15" ></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Performer16"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.30pm-9.00pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#6BB88E ;font-size:25px;">Match No.12</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Match No.10"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Match No.11"></a></center></td>
				<td align="center" style="color:#6BB88E ;font-size:25px;">On 9.00pm-9.30pm</td>
			</tr>
	</table>
	</div>

	<div id="down5">
	</br>
	<center><h3 style="color:white;">Grand Finale on 17/10/2020</h3></center>
	<table border="1" width="88%" height="60%" id="tb5" style="border-color:Black;background-color: #D5DBDB ;">
			<tr style="background-color:#839192;">
				<th style="color:#838317;font-size:25px;">Round</th>
				<th style="color:#838317;font-size:25px;">Participants</th>
				<th style="color:#838317;font-size:25px;">Time</th>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Semi Final 01</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Qualifier 01"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Qualifier 02"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.00pm-8.30pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#808B96;font-size:25px;">Semi Final 02</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Qualifier 03"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Qualifier 04"></a></center></td>
				<td align="center" style="color:#808B96;font-size:25px;">On 8.30pm-9.00pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#6BB88E ;font-size:25px;">Bronze match</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Looser of Semi Final 01"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Looser of Semi Final 02"></a></center></td>
				<td align="center" style="color:#6BB88E ;font-size:25px;">On 9.00pm-9.30pm</td>
			</tr>
			<tr>
				<td align="center" style="color:#D98880;font-size:25px;">Finale</td>
				<td><center><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Semi Final 01"></a><img src="web images/vs.png" height=75px width=75px ><a href="#"><img src="web images/avatar.png" height=100px width=100px title="Winner of Semi Final 02"></a></center></td>
				<td align="center" style="color:#D98880;font-size:25px;">On 9.30pm-10.00pm</td>
			</tr>
	</table>

	</br></br></br>

	</div>
	
	<div  width="89%" height="81%" id="final">
	
	</div>

</div>


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