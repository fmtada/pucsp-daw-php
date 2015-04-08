<html>
<head>
<title>Array4</title></head>
<body>

<?php
	$pessoas = array(RA444444 => "Capitu", RA555555 => "Cotrim", RA666666 => "Quincas Borba",
					 RA777777 => "Brás Cubas", RA888888 => "Iaiá Garcia", RA999999 => "Virgília");

	$saossep = array();
			
	foreach($pessoas as $indice => $elemento){
		$saossep[$elemento] = strtolower($indice);
		$pessoas[$indice] = strtoupper($elemento);
	}
	
	var_dump($pessoas);
	var_dump($saossep);
?>
</body>
</html>