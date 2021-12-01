<?php 
	require 'connection.php';
	session_start();
	
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
  
 <button class = "rbutto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="rbutto2"> </a>
  
  </div>
  
  <hr class="horizontal">
  


<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a  href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php"class="active">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>


		
<div  align="center" class="vertical-menu">
		
   <video width="100%" height="50%" controls>
  
  <source src="final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  
</video>
</br> </br> </br> </br> </br>


  <font size="4px"><a href="results.php">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.php">Schedule</a></font>
  
  <font size="4px"><a href="how to vote.php">How to Vote</a></font>
  
  <font size="4px"><a href="image gallery loged.php">Image Gallery</a></font>
  
  <font size="4px"><a href="previousvideos.php">Previous Videos</a></font>
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