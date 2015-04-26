<html>
<head>
<title>Fat2</title></head>
<body>

<?php
	function fat($inteiro, &$fat){
		if($inteiro == 0){
			$fat = 1;
		} else {
			$fat=1;
			for($i=1 ; $i<=$inteiro ; $i++){
				$fat = $fat*$i;
			}
		}
		if($fat <= 1000){
				return 'fatorial inexpressivo';
			} else {
				return 'fatorial expressivo';
			}
	}

	function chama_varias_vezes($n){
		for($i=0 ; $i<=$n ; $i++){
			$resp = fat($i, $resultado);
			echo ("Fatorial de ".$i." = ".$resultado." com retorno = ".$resp.".<br>");
		}
	}
	
	chama_varias_vezes(10);
?>
</body>
</html>