<html>
<head>
<title>Array2</title></head>
<body>

<?php
	$vetor = array();
	
	$vetor[11] = "DAW";
	$vetor[] = "OS";
	$vetor[] = "ED2";
	$vetor[] = "SIG";
	$vetor[] = "ESM";

	for($i = 11 ; $i <= max(array_keys($vetor)) ; $i++){
		echo "\$vetor[$i] = $vetor[$i]\n";
	}
?>
</body>
</html>