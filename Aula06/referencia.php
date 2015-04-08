<html>
<head>
<title>Referencia</title></head>
<body>

<?php
	$x = 10;
	$x_ref = 20;
	
	echo($x."\n");
	echo($x_ref."\n\n");
	
	$x_ref = &$x;
	
	$x = 30;
	
	echo($x."\n");
	echo($x_ref."\n");
	
?>
</body>
</html>