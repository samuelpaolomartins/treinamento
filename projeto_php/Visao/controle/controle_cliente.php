<?php

	//modulos - start

	include("../../controle/controle_cliente.php");	

	//modulos - end

	//recebe valores - start

	$nomeCliente = $_POST["nome"];
	$idadeCliente = $_POST["idade"];
	$acao = $_POST["acao"];

	//recebe varoles - end

	if($acao == "insere"){
		
		//instanciar a classe cliente - start
		$obj_cliente = new Cliente();
		//instanciar a classe cliente - end
		
		//chama metodo - start
		$obj_cliente->insere($nomeCliente, $idadeCliente);
		//chama metodo - end
		
		//voltar a tela do formulario??
	}
?>