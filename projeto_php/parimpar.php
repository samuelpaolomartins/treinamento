<?php
//exercicio vetor 
//crie um vetor com 10 keys onde cada key possui um valor
//apos mostre na tela qual é par e qual é impar 
//saida
//vetor[0]: 15 - impar
//vetor[1]: 2 - par
//autor: Nairo A. J. Sanches
//data 09/06/2021
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>parimpar</title>
</head>
	<?php
	//entrada
	$arrayValor[0] = 1;
	$arrayValor[1] = 2;
	$arrayValor[2] = 3;
	$arrayValor[3] = 4;
	$arrayValor[4] = 5;
	$arrayValor[5] = 6;
	$arrayValor[6] = 7;
	$arrayValor[7] = 8;
	$arrayValor[8] = 9;
	$arrayValor[9] = 10;
	?>
<body>
	<?php		
		//processamento
		foreach($arrayValor as $key=>$concat){
			
			if($concat %2 == 0){
				$numero = 'par';
			}else{
				$numero = 'impar';
			}
			
			echo 'vetor['.$key.']::'.$concat.' - '.$numero.'<br>';
		}
	?>
</body>
</html>