<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
</head>
<body>
	<h1>Calendari Octubre</h1>
	<?php 
	echo"<link href='estilos.css' type='text/css' rel='stylesheet'>";
	$dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
	$dia = date(d);
	$con = 1;
	echo"<table border='3x' height='400' width='800'>";
	foreach ($dias as $d) {
		echo"<td>$d";
		echo"</td>";
	}
	for ($i=0; $i <5 ; $i++) { 
		echo "<tr class='tr'>";
		for ($u=0; $u < 7; $u++) { 
			if ($con<=31) {
				echo "<td>$con</td>";	
				$con = $con + 1;
			}
		}echo "</tr>";
	}
	echo "</table>";

	?>
</body>
</html>