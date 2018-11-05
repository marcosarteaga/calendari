<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
<?php 
		echo "<h1>Elige los ingredientes de tu pizza</h1>";
		echo "<input type='radio' name='oregan' >Oregano </input>\n<br>";
		echo "<input type='radio' name='masa' >Masa </input>\n<br>";
		echo "<input id='toma' type='radio' name='tomate' >Tomate </input>\n<br>";
		echo "<input type='radio' name='queso'>Queso </input>\n<br>";
		echo "<input type='radio' name='bacon'>Bacon </input>\n<br>";
		echo "<input type='radio' name='champiñones'>Champiñones</input>\n<br>";
		echo "<input type='radio' name='carne'>Carne</input>\n<br>";
		echo "<input type='radio' name='pollo'>Pollo</input>\n<br>";
		$preu = 5;
		if (isset($_POST["oregan"]) && isset($_POST["masa"])) {
			$preu=$preu+1;
			if (isset($_POST["tomate"])) {
				$preu=$preu+0.5;

			}
			if (isset($_POST["queso"])) {
				$preu=$preu+0.5;

			}
			if (isset($_POST["bacon"])) {
				$preu=$preu+0.5;

			}
			if (isset($_POST["champioñones"])) {
				$preu=$preu+0.5;

			}
			if (isset($_POST["carne"])) {
				$preu=$preu+0.5;

			}
			if (isset($_POST["pollo"])) {
				$preu=$preu+0.5;

			}
			echo "<br>";
			echo "El precio es: ".$preu;
			echo "<br>";

		}elseif (isset($_POST["Oregano"])==false && isset($_POST["masa"])==false) {
			echo "oregano no esta selecionado";
		}{
			
		}


?>	
<input type="submit"/>
</form>
</body>
</html>