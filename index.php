<?php
        // Load current color values
	$colorString = file_get_contents('iot-leds/color.txt');
	$r = hexdec(file_get_contents('iot-leds/color.txt', NULL, NULL, 1, 2));
	$g = hexdec(file_get_contents('iot-leds/color.txt', NULL, NULL, 3, 2));
	$b = hexdec(file_get_contents('iot-leds/color.txt', NULL, NULL, 5, 2));
?>

<html lang="en-US">
	<head>
		<title>Michael Darden</title>
		<link href="images/logoGreen.png" rel="shortcut icon">
		<meta charset="UTF-8">
		<meta name="description" content="Koger's personal website v.2">
		<meta name="keywords" content="HTML, CSS, javaScript, Bootstrap, Koger">
		<meta name="author" content="Koger Darden">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Latest compiled and minified JQuery -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		
		<!-- Latest compiled and minified JQuery UI -->
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		
		<!-- LAtest JQuery UI CSS-->
		<link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' type='text/css'>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

		<!-- Font Awesome Icons and Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
				
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="main.css">
		
	</head>
	<body>
		<!-- Color Controls -->
		<nav class="navbar navbar-default text-centered">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-3 text-center">
						<button class="btn btn-info btn-block" style="height:45px;margin:2px;" onClick="javascript:location.href = '/iot-leds/index.php';">More About Colors</button>
					</div>
					
					<div class="col-xs-12  col-sm-3 text-centered" style="height:45px;">
					<div id="swatch" class="ui-widget-content ui-corner-all navbar-brand" style="background-color: <?php echo $colorString; ?>"></div>
					</div>
					
					<div class="col-xs-12 col-sm-6">
						<div id="r" class="slider" data-color="r"></div>
						<div id="g" class="slider" data-color="g"></div>
						<div id="b" class="slider" data-color="b"></div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Jumbotron/Title -->
		<div class="jumbotron">
		    <div class="title text-center">
		        <h1><b>Michael Darden</b></h1>
		        <p><b>Electrical/Computer Engineer</b></p>
			</div>
		</div>

		<!-- Content -->
		<div class="container text-center">
			<!-- About Section -->
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>About</h2>
						</div>
						<div class="panel-body">
							<p>I am a third year ECE student at UT Austin. Please contact me if you're interested in working with me!</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Resume link -->
			<div class="row">
				<div class="col-xs-12">
					<a type="button" class="btn btn-info btn-block btn-lg" href="resume/resume.pdf" target="_blank"><h2>Resume</h2></a>
				</div>
			</div>

			<!-- Contact Info -->
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Contact</h2>
						</div>
						<div class="panel-body">
							<p>Student Email:<br>
							<a href="mailto:mkogerd@utexas.edu?Subject=Hello" target="_blank">mkogerd@utexas.edu</a>
							</p>

							<p>Linkedin:<br>
							<a href="https://www.linkedin.com/in/mkogerd" target="_blank">https://www.linkedin.com/in/mkogerd</a>
							</p>

							<p>
							Github:<br>
							<a href="https://github.com/mkogerd" target="_blank">https://github.com/mkogerd</a><br>(all the code for this website is found <a href="https://github.com/mkogerd/mkogerd.github.io" target="_blank">here!</a>)</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="nav text-center navbar-inverse navbar-bottom">
			<!-- Link Icons -->
			<div class="row icon-list">
				<div class="col-xs-4">
					<a href="mailto:mkogerd@utexas.edu?Subject=Hello" target="_blank"><i class="fa fa-envelope-o fa-3x"></i></a>
				</div>
				<div class="col-xs-4">
					<a href="https://www.linkedin.com/in/mkogerd" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
				</div>
				<div class="col-xs-4">
					<a href="https://github.com/mkogerd" target="_blank"><i class="fa fa-github fa-3x"></i></a>
				</div>
			</div>

			<!-- Copyright -->
			<div class="row">
				<div class="copyright">
					© 2016 Michael Koger Darden
				</div>
			</div>
		</footer>
	</body>
</html>
<script>
	function refreshSwatch() {
		var red = $('#r').slider('value'),
		green = $('#g').slider('value'),
		blue = $('#b').slider('value');
		$('#swatch').css( 'background-color', "rgb("+red+", "+green+", "+blue+")");
	}

// Pre-made functions for loading title color
       function hexFromRGB(r, g, b) {
		var hex = [
			r.toString( 16 ),
			g.toString( 16 ),
			b.toString( 16 )
		];
		$.each( hex, function( nr, val ) {
			if ( val.length === 1 ) {
				hex[ nr ] = "0" + val;
			}
		});
		return hex.join( "" ).toUpperCase();
	}

	$(function () {
		// Preload color values
		var rgb = {
			r: <?php echo $r; ?>,
			g: <?php echo $g; ?>,
			b: <?php echo $b; ?> 
		}

		// Set up JS sliders	
		$('.slider').each(function() {
			$(this).slider({
				orientation: "horizontal",
				range: "min",
				max: 255,
				value: rgb[$(this).data('color')],
				slide: refreshSwatch,
				change: refreshSwatch
			});
		});

		// Update colors on swatch-click
		$('#swatch').click(function() {
			var url = "iot-leds/form.php";
			var color = "#"+hexFromRGB($("#r").slider("value"),$("#g").slider("value"),$("#b").slider("value"));
			var params = "color="+encodeURIComponent(color);
			var http = new XMLHttpRequest();

			http.open("GET", url+"?"+params, true);
			http.onreadystatechange = function()
			{
				    if(http.readyState == 4 && http.status == 200) {
						    alert(http.responseText);
							}
			}
			http.send(null);
		});
	});
</script>
