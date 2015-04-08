<html>
<head>
<title>Casting</title></head>
<body>

<?php
	$boolean = false;
	$inteiro = 10;
	$inteiro1 = 0;
	$float = 1.2;
	$cadeia="abcd";
	$cadeia1="";
	
	echo "&#36;boolean = ";
	echo $boolean ? 'true' : 'false';
	echo "; <br>";
	
	echo "&#36;inteiro = $inteiro;<br>";
	
	echo "&#36;inteiro1 = $inteiro1;<br>";
	
	echo "&#36;float = $float;<br>";
	
	echo "&#36;cadeia = $cadeia;<br>";
	
	echo "&#36;cadeia1 = $cadeia1;<br>";
	
	var_dump($boolean);
	var_dump($inteiro);
	var_dump($inteiro1);
	var_dump($float);
	var_dump($cadeia);
	var_dump($cadeia1);
	
	var_dump((boolean)$boolean);
	var_dump((boolean)$inteiro);
	var_dump((boolean)$inteiro1);
	var_dump((boolean)$float);
	var_dump((boolean)$cadeia);
	var_dump((boolean)$cadeia1);
?>
</body>
</html>