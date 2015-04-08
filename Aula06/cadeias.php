<html>
<head>
<title>Cadeias</title></head>
<body>

<?php
	$string1 = "ABCDE";
	$string2 = "12345";
	$string3 = "Q\nW\nE\nR\nT\n";
	
	echo "ZZZ$string1\n";
	echo 'zzz$string1'."\n";
	echo "$string1"."FGHIJ\n";
	echo $string1.$string2."\n";
	echo $string3;
	
	for($i=0; $i<strlen($string1); $i++) {
        if($i % 2 == 0)
            $string1[$i] = strtolower($string1[$i]);
		else {
			$string1[$i] = strtoupper($string1[$i]);
		}
    }                
    echo $string1;
?>
</body>
</html>