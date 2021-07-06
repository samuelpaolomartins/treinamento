<?php
		include("../Controle/controle_cliente.php")
	?>

<?php 

	$id = $_POST["id"];
	//echo $id;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/Javascript" src="../js/cliente.js"></script>
</head>
	<?php
	$obj_cliente = new Cliente();
	$arrayCliente =  $obj_cliente->busca($id);
	//echo'<prev>';
	//var_dump($arrayCliente);
	//echo'</prev>';
	?>

<body>
	<form action="">
		Name: <input type="text" name="nome" id="nome" value="<?php echo $arrayCliente[0]['nomeCliente']?>"><br>
		Age: <input type="text" name="idade" id="idade" value="<?php echo $arrayCliente[0]['idadeCliente']?>">
		
		<input type="hidden" name="id" id="id" value="<?php echo $arrayCliente[0]['idCliente']?>">
		
		<input type="button" id="atualizarBtn" onClick="atualizar();" value="Alterar">
		<input type="hidden" name="acao" value="altera">
	</form>
	<br>
		<input type="button" onClick="telaListar();" value="Lista de Clientes">
</body>
</html>