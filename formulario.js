// http://www.thiengo.com.br
// Por: Vinícius Thiengo
// Em: 17/11/2013
// Versão: 1.0

	$('#form_user').submit(function(e){
		e.preventDefault();
		
		if($('#enviar').val() == 'Enviando...'){
			return(false);
		}
		
		$('#enviar').val('Enviando...');
		
		$.ajax({
			url: 'NovoUsuarioAcao.php',
			type: 'post',
			dataType: 'html',
			data: {
				'metodo': $('#metodo').val(),
				'nome': $('#nome').val(),
				'email': $('#email').val(),
				'login': $('#login').val(),
				'senha': $('#senha').val()
			}
		}).done(function(data){
			
			alert(data);
			
			$('#enviar').val('Enviar dados');
			$('#metodo').val('form_user');
			$('#nome').val('');
			$('#email').val('');
			$('#login').val('');
			$('#senha').val('');
			
		});
		
	});