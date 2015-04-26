<html>
<head>
<title>Fat1</title></head>
<body>

<?php
	function fat($inteiro){
		if ($inteiro < 1) {
			return 1;
		} else { 
			return ($inteiro * fat($inteiro-1)); 
		}
	}

	function chama_varias_vezes($n){
		for($i=0 ; $i<=$n ; $i++){
			echo ("Fatorial de ".$i." = ".fat($i)."<br>");
		}
	}
	
	chama_varias_vezes(10);
?>
</body>
</html>