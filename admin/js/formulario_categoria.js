//Esse script recupera os dados que serão digitados no form.

//Aqui estou verificando se o usuário clicou no botão submit e passando a ação de enviar os dados depois da verificação
	$('#form_categoria').submit(function(e){
		e.preventDefault();
		
		if($('#enviar').val() == 'Enviando...'){
			return(false);
		}
		
		$('#enviar').val('Enviando...');
		
//Aqui estou criando um objeto que ira conter todas as informações para fazer o envio dos dados;
		$.ajax({
//Pagina que será chamada
			url: 'NovaCategoriaAcao.php',
// método de envio
			type: 'post',
			dataType: 'html',
			data: {
				'metodo': $('#metodo').val(),
				'nome': $('#nome').val(),
			}
		}).done(function(data){
			
			alert(data);
			
			$('#enviar').val('Enviar dados');
			$('#metodo').val('form_user');
			$('#nome').val('');
			
		});
		
	});