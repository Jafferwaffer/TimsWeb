<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="libs\jssor.slider.min.js"></script>
	</head>
	<body>
		<?php include 'nav.php'; ?>
		<main>
			<ul class="rslides">
				<li><img src="img/slider_1.jpg" alt="higgggggggggggggggggggggggh"></li>
				<li><img src="img/slider_2.jpg" alt="luxury toilet hire"></li>
				<li><img src="img/slider_3.jpg" alt="luxury toilet hire"></li>
				<li><img src="img/slider_4.jpg" alt="luxury toilet hire"></li>
				<li><img src="img/slider_5.jpg" alt="luxury toilet hire"></li>
				<li><img src="img/slider_6.jpg" alt="luxury toilet hire"></li>
			</ul>
		</main>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>

	<script>
		$(function() {
			$(".rslides").responsiveSlides();
		});
		$(".rslides").responsiveSlides({
			auto: true,             // Boolean: Animate automatically, true or false
			speed: 500,            // Integer: Speed of the transition, in milliseconds
			timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			pager: false,           // Boolean: Show pager, true or false
			nav: false,             // Boolean: Show navigation, true or false
			random: false,          // Boolean: Randomize the order of the slides, true or false
			pause: false,           // Boolean: Pause on hover, true or false
			pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			prevText: "Previous",   // String: Text for the "previous" button
			nextText: "Next",       // String: Text for the "next" button
			maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
			navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			manualControls: "",     // Selector: Declare custom pager navigation
			namespace: "rslides",   // String: Change the default namespace used
			before: function(){},   // Function: Before callback
			after: function(){}     // Function: After callback
		});
	</script>
	<footer>
		<p>Tim Hines Photography<p>
		<a href="contact.php" id="home_contact"><p>Contact</p></a>
	</footer>
	</body>
	
</html>

