<html>
<head>
<title>Array5</title></head>
<body>

<?php
	define("FATOR", 1.2);
	
	$pessoas[1]["MATRICULA"] = "RA444444";
	$pessoas[2]["MATRICULA"] = "RA555555";
	$pessoas[3]["MATRICULA"] = "RA666666";
	$pessoas[4]["MATRICULA"] = "RA777777";
	$pessoas[5]["MATRICULA"] = "RA888888";
	$pessoas[6]["MATRICULA"] = "RA999999";
	
	$pessoas[1]["NOME"] = "Capitu";
	$pessoas[2]["NOME"] = "Cotrim";
	$pessoas[3]["NOME"] = "Quincas Borba";
	$pessoas[4]["NOME"] = "Bras Cubas";
	$pessoas[5]["NOME"] = "Iaia Garcia";
	$pessoas[6]["NOME"] = "Virgilia";
	
	$pessoas[1]["SALARIO"] = 100;
	$pessoas[2]["SALARIO"] = 120;
	$pessoas[3]["SALARIO"] = 200;
	$pessoas[4]["SALARIO"] = 500;
	$pessoas[5]["SALARIO"] = 80;
	$pessoas[6]["SALARIO"] = 250;
	
	var_dump($pessoas);
	
	for($i=1 ; $i<=sizeof($pessoas) ; $i++){
		$pessoas[$i]["NOVO SALARIO"] = FATOR * $pessoas[$i]["SALARIO"];
	}
	
	var_dump($pessoas);
	
	echo("<table>
			<tr><td>MATRICULA</td>
				<td>NOME</td>
				<td>SALARIO</td>
				<td>NOVO_SALARIO</td></tr>");
	foreach($pessoas as $individuo){
		echo("<tr>");
		foreach ($individuo as $elemento){
				echo("<td>".$elemento."</td>");
		}
		echo("</tr>");
	}
	echo("</table>");
?>
</body>
</html>