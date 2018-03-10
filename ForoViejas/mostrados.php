<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="hola">
	<?php
	
	$hola = $_GET['id'];




	for($x = 0; $x < 2000; $x++){

		echo $hola."<br>";
	}
?>
</div>
</body>
</html>