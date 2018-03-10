<?php

include 'conecsion.php';

$insulto_de_la_vieja = $_GET['insultaco'];


mysqli_query($con,"INSERT INTO insultacos(insultos_feos) values('$insulto_de_la_vieja')");

header("location:index.php");

?>