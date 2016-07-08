<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="libs\jssor.slider.min.js"></script>
	</head>
	<body>
		<div id="slider_container" style="position:relative; top:0px; left:0px; width:600px; height:300px;">
			<!-- Slides Container -->
			<div u="slides" style="cursor: move; position: absolute; overflow:hidden; left:0px; top:0px; width:600px;height:300px;">
				<div><img u="image" src=""/></div>
				<div><img u="image" src=""/></div>
				<div><img u="image" src=""/></div>
				<div><img u="image" src=""/></div>
			</div>
		</div>
		<script>
			jQuery(document).ready(function($){
				var options = {$AutoPlay: true};
				var jssor_slider_home = new  $JssorSlider$('slider_container',options);
			});
		</script>
	</body>
</html>
