<html>
<head>
<title>Array3</title></head>
<body>

<?php
	$totCreditos = 0;
	$creditos = array("BD" => 4, "LP" => 4, "IC" => 3, "COMP" => 4, "SO" => 3,
					  "ES1" => 2, "ES2" => 2, "TG" => 3, "IPT" => 2, "EF" => 1,
					  "FG" => 2, "IA" => 2, "TEC1" => 3, "TEC2" => 3);
	
	foreach($creditos as $elemento){
		$totCreditos += $elemento;
	}
	
	echo $totCreditos;
?>
</body>
</html>