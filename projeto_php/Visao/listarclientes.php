<?php
		include("../Controle/controle_cliente.php")
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>listar clientes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/Javascript" src="../js/cliente.js"></script>
</head><?php
		//instanciar a classe cliente - start
		$obj_cliente = new Cliente();
		//instanciar a classe cliente - end
		$arrayClientes = $obj_cliente->busca();

		//declarar array
	?>

<body>
	
	<table border='1'>
		<tr>
			<td>Name</td>
			<td>Age</td>
			<td>Action</td>
			<td>Delete</td>
		</tr>		
	<?php
	/*	echo '<pre>';	
		var_dump($arrayClientes);
		echo '</pre>';
		//tr eh linha
		//td eh coluna
	*/
		foreach($arrayClientes as $value){
	?>	
		<tr>
			<td><?php echo $value['nomeCliente']?></td>
			<td><?php echo $value['idadeCliente']?></td>
			<td><input type="button" onClick="telaEditar(<?php echo $value['idCliente']?>)"value="Editar"></td>
			<td><input type="button" onClick="telaDeletar(<?php echo $value['idCliente']?>)" value="Delete"></td>
		</tr>	
	<?php
		}
	?>
	</table>
	<br>
		<input type="button" onClick="telaCadastrar()" value="Tela de cadastro">
	
	<form id="formulario" action="formEditarcadastro.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>
</body>
</html>
<?php
/*	$nomeArray[0] = 'nairo';
	$nomeArray[1] = 'jairo';
	$nomeArray['nome'] = 'mario';
	$nomeArray['parente'] = 'suzana';

	foreach($nomeArray as $chave => $concat){
		echo $chave.">>>>>".$concat.'<br>';
	}
?>
*/