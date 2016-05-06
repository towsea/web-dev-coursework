<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'adam_towse@live.com'; 
		$to = 'addz.towse@gmail.com'; 
		$subject = 'Message from contact form ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if the name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email that has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message is entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
 
		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
	}
		}
    echo '<script type="text/javascript">alert("Thank you for your message, we will be in contact shortly.");</script>';
    echo '<script type="text/javascript">location.replace("/index.html");</script>';
?>