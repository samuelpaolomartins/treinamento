<?php
		include("../Controle/controle_cliente.php")
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário do Cadastro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/Javascript" src="../js/cliente.js"></script>
</head>

<body>
	<form action="">
		Name: <input type="text" name="nome" id="nome"><br>
		Age: <input type="text" name="idade" id="idade">
		
		<input type="button" id="inserir" onClick="cadastrar();" value="Gravar">
		<input type="hidden" name="acao" value="insere">
	</form>
	<br>
		<input type="button" onClick="telaListar();" value="Lista de Clientes">
</body>
</html>