<html>
<head>
<title>Soma2</title></head>
<body>

<?php
	function soma($m, $n){
		if($m>$n){ //O primeiro valor sempre será o menor
			$aux = $n;
			$n = $m;
			$m = $aux;
		}
		if($m<$n){
			return $n + soma($m, $n-1);
		} else {
			return $m;
		}
	}
	
	function chama_varias_vezes($p){
		for($i=1 ; $i<=$p ; $i++){
			echo soma(1, $i);
			echo "<br>";
		}
	}
	
	chama_varias_vezes(100);
?>
</body>
</html>