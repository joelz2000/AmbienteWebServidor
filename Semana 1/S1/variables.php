<!DOCTYPE html>
<html>
	<head>
	<title>Variables</title>
		<meta charset="utf-8">
	</head>
</html>

<?php
	echo "<h1>Variables</h1>";
	$nombre = "Joel";
	$edad = 19;
	echo "<h3>Me llamo $nombre y tengo $edad años </h3>";
	echo "<h2> Si uso comilla simple, no se leen variabes</h2>";
	echo '<h3> Me llamo $nombre y tengo $edad años </h3>';

	$edadMeses = $edad*12;
	echo "<p> Edad en meses: $edadMeses</p>";
?>