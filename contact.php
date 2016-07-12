<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="js\currentPage.js"></script>
	</head>
	<body>
		<?php include 'nav.php';?>
		<div id="contact_container">
			<h2>Contact Information</h2>
			<p></p>
			<p>Mobile Number : +44 7530 727034</p>
			<p>Email Address : placeholder@email.com</p>
		</div>
		
		
		<div id="contact_form">
			<?php
			$name = (isset($_POST['name']) ? $_POST['name'] : '');
			$email = (isset($_POST['email']) ? $_POST['email'] : '');
			$message = (isset($_POST['message']) ? $_POST['message'] : '');
			$from = 'From: TimWeb';
			$to = 'house_of_wolves@hotmail.co.uk';
			$subject = 'Hello from $name!';
			$human = (isset($_POST['human']) ? $_POST['human'] : '');
			
			$body = "From: $name\n E-Mail: $email\n Message: $message";
			
			if(isset($_POST['submit'])){
				if($name != '' && $email != ''){
					if($human == '4'){
						if(mail ($to,$subject,$body,$from)){
							echo '<p>Your message has been sent.</p>';
						}else{
							echo '<p>Something went wrong, please reload the page and try again.</p>';
						}		
					}else if ($_POST['submit'] && $human != '4'){
						echo '<p> You have answered the anti-spam question incorrectly!</p>';
					}		
				} else{
					echo '<p>You need to fill in all required fields!</p>';
				}		
			}	
			?>
			<form method="post" action="contact.php">
				<label>Name*</label>
				<input name="name" placeholder="Type Here">
				
				<label>Your Email*</label>
				<input name="email" type="email" placeholder="Type Here">
				
				<label>Message</label>
				<textarea name="message" placeholder="Type Here"></textarea>
				
				<label>What is 2+2? (Anti-spam)*</label>
				<input name="human" placeholder="Type Here">
				
				<input id="submit" name="submit" type="submit" value="Submit">
			</form>
			
		</div>
		
	</body>