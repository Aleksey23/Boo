<!DOCTYPE html>
<html>
	<head>
		<title>Hello!</title>
		<link rel="stylesheet" href="styles.css" />
		<script src= "index.js"></script>
	</head>
	<body>
	<div id = "label">
		<h1>Woo!!!</h1>
	</div>

		<div><h1>Hello</h1></div>
		<p><h1 >мир!</h1></p>
		<span class = "test">Строка</span></body> 
		<span>Строка 2</span><br/>
		<img onclick = "test()" src = "http://alt-sector.net/uploads/posts/2011-06/1307594333_rock_wallpaper_by_allthekillernofiller.jpg" width="300" height = "200">
		<img src = "images/images.jpg">
<a href = "http://www.google.com" target = "_blank"><img src = "images/1.jpg"></a><br/>
<button class = "test"  onclick = "test()">Press me!</button>
<input type = "text" onkeyup = "test()"><br/>
<input type = "email"><br/>
<input  id="boo" type = "number"><br/>
	<input type = "date"><br/>
	<input type = "checkbox"><br/>
	<input type = "button" value = "Hi"><br/>
	<?php 
		function bel2USD ($sum){
			$result = $sum / 1.9;
			return round($result, 2);
		} 

		$result = bel2USD(20);
		echo "<h1>$result</h1>"
	?>
	</body>
</html>