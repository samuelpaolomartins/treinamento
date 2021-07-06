<?php
//exercicio vetor 
//autor: Nairo A. J. Sanches
//data 09/06/2021
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vetor</title>
</head>
	<?php
	//entrada
	$arrayInfo['Nome']  = 'Samuel';
	$arrayInfo['Idade'] = '21';
	$arrayInfo['Sexo']  = 'Masculino';
	//processamento
	?>

	<body>
		<?php
		//saida de dados
		/*for($i=0; $i<3; $i++){
		
			echo $arrayInfo[$i].'<br>';
		}
		*/
		
		foreach($arrayInfo as $chave=>$concat){//concat é uma variavel que vc cria
			
			echo $chave.'=>'.$concat.'<br>';
		}
		?>
</body>
</html>