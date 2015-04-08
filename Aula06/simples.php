<html>
<head>
<title>Simples</title></head>
<body>

<?php
	$cli_ip = getenv("REMOTE_ADDR");
	$cli_prt= getenv("REMOTE_PORT");
	$srv_ip = getenv("SERVER_ADDR");
	$srv_prt= getenv("SERVER_PORT");

	echo "$cli_ip";
	echo "$cli_prt";
	echo "$srv_ip";
	echo "$srv_prt";
?>

</body>
</html>






<?php
	$cli_ip = getenv("REMOTE_ADDR");
	$cli_prt= getenv("REMOTE_PORT");
	$srv_ip = getenv("SERVER_ADDR");
	$srv_prt= getenv("SERVER_PORT");
	echo "<html>
		  <head><title>Simples</title></head>
		  <body>";
		  	echo "$cli_ip";
			echo "$cli_prt";
			echo "$srv_ip";
			echo "$srv_prt";
	echo "</body>
		  </html>";
?>