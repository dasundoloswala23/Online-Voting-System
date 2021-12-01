<?php

	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message'] = "you have successfully logged out";
	header("location:homepage.html",$delay = 0);
	
?>