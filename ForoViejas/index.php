<?php
	include 'conecsion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Foro Viejas :)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="top_bar_index">
	
	<form>
		<input type="text" name="buscar_cosas" placeholder="Buscar cosas de viejas">
	</form>
</div>


<div id="contenedor_posts">
	<form method="GET" action="enviar_insulto.php">
		<textarea id="text_area" name="insultaco"></textarea>
		<input type="submit" value="ENVIAR INSULTO"></input>
	</form>
</div>


<div class="insultos_contenedor">
	<?php

	$coger_datos = mysqli_query($con,"SELECT * FROM insultacos");

	if(mysqli_num_rows($coger_datos)>0){

		while($row = $coger_datos->fetch_assoc()){

			$id = $row['id'];
			$comn = $row['insultos_feos'];

			echo "<a href='mostrados.php?id=".$comn."' style='color:white;'>".$comn."<br>"."<br>"."</a>";
		}
	}

	?>
</div>
</body>
</html>