function telaListar(){
	
	//console.log('Foi para tela de cadastro');
	window.location.href = 'listarclientes.php';
	
}

function telaCadastrar(valor){
	
	window.location.href = 'formcadastro.php';
}

function cadastrar(){
	
	nome = $('#nome').val();
	idade = $('#idade').val();
	
	$.ajax({
		
		type:"POST", 
		url:"controle/controle_cliente2.php",
		data:{acao:"inserir", nome:nome, idade:idade}, 
		
		success: function(data){
			
			alert('Cadastrado');
			telaListar();
		}
	
	});
	
}

function telaEditar(valor){
	
	//console.log('Foi para tela de cadastro');
	//window.location.href = 'formEditarcadastro.php?id='+valor;
	$('#idFormulario').val(valor);
	$('#formulario').submit();
	
}

function atualizar(){
	
	nome = $('#nome').val();
	idade = $('#idade').val();
	id = $('#id').val();
	
	$.ajax({
		
		type:"POST", 
		url:"controle/controle_cliente2.php",
		data:{acao:"altera", nome:nome, idade:idade, id:id}, 
		
		success: function(data){
			
			alert('Usuário atualizado');
			telaListar();
		}
	
	});
	

}
function telaDeletar(valor){
	
	//console.log(valor);
	
	var result = confirm("Are you sure?");
	
	if(result == true){
			
		$.ajax({

			type:"POST", 
			url:"controle/controle_cliente2.php",
			data:{acao:"deletar", id:valor},

			success: function(data){

				alert('Client deleted!');		
				window.location.href = 'listarclientes.php';

			}

		});
	
	}else{
		
		alert('Não apagou');
		
	}
}