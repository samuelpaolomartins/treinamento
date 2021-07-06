<?php
	//load modelo - start
	include($_SERVER["DOCUMENT_ROOT"]."/modelo/conexaobd.php");//arquivos de controle devem ter o $_SERVER["DOCUMENT_ROOT"]
	//load modelo - end
/*
	$nomeCliente = $_POST["nome"];
	$idadeCliente = $_POST["idade"];
	$acao = $_POST["acao"];
	
	if($acao = "insere"){
		
		$sqlinsert = "INSERT INTO cliente (nomeCliente, idadeCliente) VALUES ('".$nomeCliente."', ".$idadeCliente.");";
		mysqli_query($conectar,$sqlinsert);
		echo 'Inserido com sucesso!';
		
	}else if($acao = "editar"){
		
		echo 'UPDATE';
		
	}else if($acao = "busca"){
		
		$conectar = mysqli_connect("localhost","root","","mvc") or die(mysql_error());
	
		mysqli_select_db($conectar,"mvc")or die(mysql_error());
	
		$sql = "SELECT * FROM cliente";
		$resultado = mysqli_query($conectar,$sql);
		
	}else if($acao = "deleta"){
		
		echo 'DELETA';s
		
	}*/
	
	class Cliente{
		
			
		public function busca($id = false){
			
			$obj_con = new conexaobd();
			$conectar = $obj_con->con();
			
			//instruçoes sql select - start			

			$sql = "SELECT * FROM cliente";
			
			if($id>0){
				
				$sql .= " WHERE idCliente = ".$id;
				
			}
			
			$resultado = mysqli_query($conectar,$sql);
			$r = 0;
			while($dados = mysqli_fetch_assoc($resultado)){
				$linha[$r]['idCliente'] = $dados['idCliente'];
				$linha[$r]['nomeCliente'] = $dados['nomeCliente'];
				$linha[$r]['idadeCliente'] = $dados['idadeCliente'];
				$r++;
			}
			
			//instruçoes sql select - end
			//popular variavel
			
			
			return $linha;//enviar valor para a instancia
		
		}
		function insere($nome, $idade){
			
			$obj_con = new conexaobd();
			$conectar = $obj_con->con();
			//montar a instruçao SQL e executar
			$sqlinsert = "INSERT INTO cliente (nomeCliente, idadeCliente) VALUES ('".$nome."', ".$idade.");";
			
			$resultado = mysqli_query($conectar,$sqlinsert)or die ($resultado = false);
			
			if($resultado === false)
			{
				return false;
				
			}else
			{
				return true;
			}
			
		
		}
		
		function atualizar($nome, $idade, $id){
			$resultado = true;
			
			$obj_con = new conexaobd();
			$conectar = $obj_con->con();
			//montar a instruçao SQL e executar
			$sqlupdate = "UPDATE cliente set nomeCliente = '".$nome."', idadeCliente = ".$idade." WHERE idCliente = ".$id;
			
			$resultado = mysqli_query($conectar,$sqlupdate) or die ($resultado = false);
		
		}
		
		function deletar($id){
			
			$obj_con = new conexaobd();
			$conectar = $obj_con->con();
		
			$sqldelete = "DELETE FROM cliente WHERE idCliente=".$id; 
			
			$resultado = mysqli_query($conectar, $sqldelete) or die ($resultado = false);
			
			return $id;
			
		}
	}

?>