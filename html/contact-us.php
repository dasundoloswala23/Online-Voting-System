<?php 
	require 'connection.php';
	
	$status = '';
	// checking if the form is submit
	if ( isset($_POST['submit']) ) {
		$fullname	= $_POST['fullname'];
		$email		= $_POST['email'];
		$subject	= $_POST['subject'];
		$message	= $_POST['message'];
		
		$sql = "INSERT INTO contact(fullname,email,subject,message) 
		VALUES('$fullname','$email', '$subject', '$message') ";
		
		if($con->query($sql)){
			echo "success";
		
		}
		else{
			echo "Error:". $con->error;
		}
		
		$to	 		  = $email;
		$mail_subject = 'Message from Website';
		$email_body   = "Message from Contact Us Page of the Website: <br>";
		$email_body   .= "<b>From:</b> {$fullname} <br>";
		$email_body   .= "<b>Subject:</b> {$subject} <br>";
		$email_body   .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);
		

		if ( $send_mail_result ) {
			$status = '<p class="success">Message Sent Successfully.</p>';
		} else {
			$status = '<p class="error">Error: Message Was Not Sent.</p>';
		}
		$con->close();
	
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tharinducss3/home3.css">
	
</head>
<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:black"> TEENS GOT TALENT </h1>
  
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
</div>


		
<div  align="center" class="vertical-menu">
		
   <video width="100%" height="50%" controls>
  
  <source src="final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  
</video>
</br> </br> </br> </br> </br>


  <a href="results.html">View Results</a>
  <a href="resultsbefore.php">View Results</a>
  
  <a href="please.html">Schedule</a>
  
  <a href="how to vote.html">How to Vote</a>
  
  <a href="please.html">Image Gallery</a>
  
  <a href="please.html">Previous Videos</a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  

  
</div>

	<div class="container">
		<h1>Contact Us</h1>
		<?php echo $status; ?>
		<form action="contact-us.php" method="post">
			<p>
				<label for="fullname">Full Name *:</label>
				<input type="text" name="fullname" id="fullname" required>
			</p>

			<p>
				<label for="email">Email *:</label>
				<input type="email" name="email"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" required>
			</p>

			<p>
				<label for="subject">Subject *:</label>
				<input type="text" name="subject" id="subject" required>
			</p>

			<p>
				<label for="message">Message *: </label>
				<textarea name="message" id="message" cols="30" rows="10" required></textarea>
			</p>
			<p>
				<button type="submit" name="submit">Send Message</button>
			</p>


		</form>


	</div> <!-- .container -->
	
	
<footer  height = "50">
	<a href="https://www.facebook.com/"> <img src = "facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="https://www.twitter.com"><img src = "twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="https://www.instagram.com"><img src = "instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides"align = "right">
  
        <img src="coke.jpg" width = "300" height = "80" >
       
      </div>
      <div class="mySlides" align = "right">
       
   <img src="mac.jpg"width = "300" height = "80">
        
      </div>
</footer>
<script src="slide.js"></script>
</body>
</html>