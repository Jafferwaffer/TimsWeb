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
				<li id="end">Contact</li>
			</ul>
		</nav>
		<main>
				<!--slider here-->
			<div id="slider_container" style="position:relative; top:0px; left:0px; width:600px; height:300px;">
				<!-- Slides Container -->
				<div u="slides" style="cursor: move; position: absolute; overflow:hidden; left:0px; top:0px; width:600px;height:300px;">
					<div><img u="image" src="img/mountain_1.jpg"/></div>
					<div><img u="image" src="img/mountain_2.jpg"/></div>
					<div><img u="image" src="img/skate_1.jpg"/></div>
					<div><img u="image" src=""/></div>
				</div>
			</div>
			<script>
				jQuery(document).ready(function($){
					var options = {$AutoPlay: true};
					var jssor_slider_home = new  $JssorSlider$('slider_container',options);
				});
				 //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                //responsive code end
            };

			</script>
		</main>
	</body>
</html>
