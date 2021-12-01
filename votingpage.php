<?php

session_start ();

require 'connection.php';
	
	if (isset ($_POST['submit'])){


	$performer = $_POST["performer"];
	

		$sql = "INSERT INTO performerscount(performer) 
		VALUES('$performer') ";
		
		//$sql = "INSERT INTO performer (username)SELECT username FROM registration";

		
		if($con->query($sql)){


		}
		else{
			echo "Error:". $con->error;
		}
	$con->close();
	}
?>


<html>

<head>
<script>
funtion fetchog(){

let data = new URLSehParans();

data.append( document.getElementbyId("male").value);
data.append( document.getElementbyId("male2").value);
data.append(document.getElementbyId("fmale").value);
data.append( document.getElementbyId("fmale2").value);

fetch ("voting page.php",{
method:"post",
body:data
})
.then (function(response){
return reponse.text();
})
.then (function(text){
console. log(text);
})
.catch (function(error){
console.log(error);
});

return false;
}
</script>

<link rel ="stylesheet" href = "homeavishka.css">



<title> Teens Got Talent </title>



</head>

<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT</h1>
  
<button class = "rbutto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="rbutto2"> </a>
  
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a  href="homepage after login.php">Home</a>
  <a href="voting page.php"class="active">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>





		
<div  align="center" class="vertical-menu" style="height:95%;">
		
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
  <a></a>
  <a></a>
  <a></a>
  <a></a>
  <a></a>

  
</div>
<script src="slide.js"></script>
<div style="background-image:url('votebackgound2.jpg');">
<table border="1" width="88%" height="60%">
	<tr>
	<td> 
	<form method = "post" onsubmit="return fetchog()"></br>
	
		<h3 style="color:#F9E79F;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Semi Final 01</h3>
		<center>
		<img src="avatar.png"  height=100px width=100px >
		
		<input type ="radio" name = "performer" value = "performer1" id = "male" onclick="confirm1" required> 
		
		<label for="perform1" style="color:white;">Performer 01</label>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		<img src="avatar.png"  height=100px width=100px >
		
		<input type ="radio" name = "performer" value = "performer2" id = "male2" onclick="confirm2"> 
		
		<label for="perform2" style="color:white;">Performer 02</label>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		<input type="submit" name = "submit" value="Submit" class="submitbtn">
		</center>
	</br>
		<h3 style="color:#F9E79F;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Semi Final 02</h3>
		<center>
		<img src="avatar.png"  height=100px width=100px >
		
		<input type ="radio" name = "performer" value = "performer3" id = "fmale"onclick="confirm3"required disabled> 
		
		<label for="perform2" style="color:white;">Performer 03</label>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		<img src="avatar.png"  height=100px width=100px >
		
		<input type ="radio" name = "performer" value = "performer4" id = "fmale2"onclick="confirm4"required disabled> 
		
		<label for="perform2" style="color:white;">Performer 04</label>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name = "submit" value="Submit" class="submitbtn">
		</center>
		
		<h3 style="color:#F9E79F;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Bronze Match</h3>
		<center>
		
		<img src="web images/avatar.png"  height=100px width=100px >
		
		<input type="radio" id="perform3" name="round2" value="perform3" onclick="confirm(3)"required>
		
		<label for="perform3" style="color:white;">Looser of semi final 01</label>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		<img src="web images/avatar.png"  height=100px width=100px >
		
		<input type="radio" id="perform4" name="round2" value="perform4" onclick="confirm(4)">
		
		<label for="perform4" style="color:white;">Looser of semi final 02</label>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" value="Submit" class="submitbtn" onclick="confirm(5)">
		
		</center>
		
		<h3 style="color:#B2BABB;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Grand finale</h3>
		<center>
		
		<img src="web images/avatar.png"  height=100px width=100px >
		
		<input type="radio" id="loose1" name="round3" value="loose1" required disabled>
		
		<label for="loose1" style="color:white;">Winner of round 1</label>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<img src="web images/avatar.png"  height=100px width=100px >
		
		<input type="radio" id="loose2" name="round3" value="loose2" disabled>
		
		<label for="loose1" style="color:white;">Winner of round 02</label>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		<input type="submit" value="Submit" class="submitbtn" disabled>
		
		
		
		</center>
	</form>
	
	
	
	</td>
	</tr>
</table>
</div>
<script src="slide.js"></script>


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
<script src="time.js"> </script>
<script src="slide.js"></script>


</body>
</html>