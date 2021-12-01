<?php 
	require 'connection.php';
	
	$status = '';
	// checking if the form is submit
	if ( isset($_POST['submit']) ) {
		$email		= $_POST['email'];
		$dup = mysqli_query($con,"select * from registration where email = '$email'");
	
	if (mysqli_num_rows($dup)>0)
	{	
		$to	 		  = $email;
		$mail_subject = 'Message from Website';
		$email_body   = "<a href =http://localhost/iwt%20assignment/IT20088514%20IWT%20assignment%202%20MLB_PG.02.01_10/reset-password.php>Reset your password using this link </a> <br>";
		

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);
		

		if ( $send_mail_result ) {
			$status = '<p class="success">Message Sent Successfully.</p>';
		} 
	} else {
		$status = '<p class="error">Error: Could not find this email address in our database.</p>';
	}
		$con->close();

	}		
	
 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reset Paasword</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="home3.css">
	
</head>
<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:black"> TEENS GOT TALENT </h1>
  
  <button class = "butto"> <a  href="#" style="color:white;"> login</a> </button>
  
  <button class = "butto2"><a  href="registration.html" style="color:white;"> register </a> </button>
  
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="#home">News</a>
  <a  href="#news">Home</a>
  <a href="#contact">Vote</a>
  <a href="#about">sponsers</a>
  <a href="#about">Highlights</a>
  <a href="#about">Contact us</a>
  <a href="#about">Terms and conditions</a>
</div>


		
<div  align="center" class="vertical-menu">
		
   <video width="90%" height="20%" controls>
  
  <source src="final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  
</video>
</br> </br>

<br></br>
  <a href="results.html">View Results</a>
  
  <a href="#">Schedule</a>
  
  <a href="how to vote.html">How to Vote</a>
  
  <a href="#">Image Gallery</a>
  
  <a href="#">Previous Videos</a>
</div>

	<div class="container">
		<h1>Reset Password</h1>
		<?php echo $status; ?>
		
		<form action="forgot pw test.php" method="post">
			

			<p>
				<label for="email">Email *:</label>
				<input type="email" name="email" id="email" required>
			</p>

				<button type="submit" name="submit">Send Message</button>
			</p>


		</form>


	</div> <!-- .container -->
	
	
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
<script src="slide.js"></script>
</body>
</html>