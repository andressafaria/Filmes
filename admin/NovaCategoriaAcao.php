 <?php include "../conn.php";   

//aqui estou recuperando os dados do formulário vindos da página NovaCategoia.php
 
  $nome = $_POST['nome'];
	  
//Verifico se a ação for diferente de vazio, ou seja, se clicar em cadastrar insiro no banco	  
  	if(!$nome){
		
		echo 'Erro ao cadastrar categoria!';
		
	}else{
	  
   		mysql_query("insert into categorias(categoria) values ('".$nome."')");
    		
// Em seguida apresento a mensagem de sucesso, caso tenha sido cadastrado		
		echo'Categoria cadastrada com sucesso!';
		
		
		
		
		
		//Ver como redirecionar a página para a lst_categoria.php... não está funcionando
			 
	
	}
?>