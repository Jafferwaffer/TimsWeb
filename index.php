<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="libs\jssor.slider.min.js"></script>
	</head>
	<body>
		<nav>
			<ul>
				<li>Home</li>
				<li>Prices</li>
				<li>About</li>
				<a href="contact.php"><li id="end">Contact</li></a>
			</ul>
		</nav>
		<main>
				<!--slider here-->
				<ul class="rslides">
					<li><img src="img/mountain_1.jpg"></li>
					<li><img src="img/mountain_2.jpg"></li>
					<li><img src="img/skate_1.jpg"></li>
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
	</body>
</html>

