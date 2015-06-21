<?php
// incluindo a conexão com o banco de dados
require "../conn.php"; 

// recuperando as variáveis do formulário via POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha=$_POST['senha'];
	  
//Verificando se o formuçario está vazio... Se não estiver executa a query para salvar os dados no banco	  

	if(!$nome || !$email || !$entrar || !$senha){
		
		
		 echo 'Erro ao cadastrar!';
    exit;
		
	}else{
	  	mysql_query("insert into administracao(nome,email,login,senha) values ('".$nome."','".$email."','".$entrar."','".$senha."')");
		$html= 'Administrador cadastrado com sucesso!';
		echo $html;
		
		
		
	} 
	
	
// faltando redirecionar para a página anterior... está dando um erro... verificar.    		


	
?>