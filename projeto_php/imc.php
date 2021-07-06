<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculo do IMC</title>
	</head>

	<body>
		<?php
		$peso = 70;
		$altura = 1.87;
		$imc;
		$imc1 = 18.5;
		$imc2 = 24.9;
		$imc3 = 29.9;
		$imc4 = 39.9;
		
		$imc = ($peso /($altura * $altura));
		
		if ($imc < $imc) {
			
			echo "magreza";
			
		}elseif ($imc1 < $imc && $imc < $imc2) {
			
			echo "normal";
			
		}elseif ($imc2 < $imc && $imc < $imc3) {
			
			echo "sobrepeso";
			
		}elseif ($imc3 < $imc && $imc < $imc4) {
			
			echo "obesidade";
			
		}elseif ($imc4 < $imc) {
			
			echo "obesidade grave";
			
		}
		echo '<br>'.$imc;
		
		?>
		</body>
</html>