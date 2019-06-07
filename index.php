<html>
<head>
</head>
<body>

<p>Проверка штрихкода по стандартам EAN International.</p>

<form name="test" method="get" action="index.php">
	<input type="text" size="12" placeholder="Введите номер" name="a">
	<input type="submit" value="проверить">
</form>
</body>
<html>

<?php
$a = $_GET['a'];
$b = str_split($a);
	
if ($a != 0) {
	//Проверка штрихкода
	$e = $b[12];

	For ($i = 0; $i <= 11; $i=$i+2) {
		$c = $c + $b[$i];
	}
		
	For ($i = 1; $i <= 11; $i=$i+2) {
		$d = $d + $b[$i];
	}

	$d = $d * 3;

	$j = $c + $d;

	$j = str_split($j);

	$j = $j[1];

	$j = 10 - $j;

	echo 'Результат проверки: ';
	
	if ($j==$e) {
		echo "подленный товар,";
		
			//Проверка производителя
			$f = array(460,461,462,463,464,465,466,467,468,469);
			$g = $b[0].$b[1].$b[2];

			for ($i = 0; $i < 11; $i++){	
				if($g == $f[$i]){
					$f = 1;
				}
			}	
			
			if($f == 1){
				echo " произведено в России.";
			}else{
				echo " произведено за границей.";
			}	
		
	}else {
		echo "подделка.";
	}
	
}else {
	echo "";
}
?>

