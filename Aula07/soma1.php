<html>
<head>
<title>Soma1</title></head>
<body>

<?php
	function soma($m, $n){
		$result = 0;
		
		if($m>$n){ //O primeiro valor sempre será o menor
			$aux = $n;
			$n = $m;
			$m = $aux;
		}
		for($i = $m ; $m<=$n ; $m++){
			$result += $m;
		}
		return $result;
	}

	echo (soma(5, 10));
?>
</body>
</html>