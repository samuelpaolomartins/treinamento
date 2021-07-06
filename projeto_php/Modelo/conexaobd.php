<?php
	
class conexaobd{
	
	public function con(){
		
		$conectar = mysqli_connect("localhost","root","","mvc") or die(mysql_error());
		//seleciona o banco
		mysqli_select_db($conectar,"mvc")or die(mysql_error());
		
		return $conectar; 
	}
}

//modelo-start
	//conexao banco
	//$conectar = mysqli_connect("localhost","root","","mvc") or die(mysql_error());
	//seleciona o banco
	//mysqli_select_db($conectar,"mvc")or die(mysql_error());
	//modelo-end
/*
	$sql = "SELECT * FROM cliente";
	$resultado = mysqli_query($conectar,$sql);

	while($dados = mysqli_fetch_assoc($resultado)){
		
		echo "Nome:".$dados['nomeCliente'].'<br>';
		echo "Idade:".$dados['idadeCliente'].'<br>';
	}
	*/

?>