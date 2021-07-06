<?php

	//modulos - start

	include("../../controle/controle_cliente.php");	

	//modulos - end

	//recebe valores - start

	$nomeCliente  = $_POST["nome"];
	$idadeCliente = $_POST["idade"];
	$idCliente    = $_POST["id"];
	$acao         = $_POST["acao"];

	//recebe varoles - end
		
		//instanciar a classe cliente - start
		$obj_cliente = new Cliente();
		//instanciar a classe cliente - end

	if($acao == "inserir"){
			
		//chama metodo - start
		$result = $obj_cliente->insere($nomeCliente, $idadeCliente);
		//chama metodo - end		
	
	}else if($acao == "altera"){
				
		$result = $obj_cliente->atualizar($nomeCliente, $idadeCliente, $idCliente);
	
	}else if($acao == "deletar"){
				
		$result = $obj_cliente->deletar($idCliente);
			
	}
?>