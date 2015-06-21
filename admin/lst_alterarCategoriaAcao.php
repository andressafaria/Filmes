<?php require "../conn.php";
	  
	  
	  //trazendo o id
	  $id= $_GET["id_categoria"];
	  
	 // se o contador  for maior que zero, ou seja se já existir um id no bd:
	  if(count($_POST)>0){
  		
		$nome = $_POST ["nome"];
	
	//então ele faz a atualização:
		
  		mysql_query("update categorias set categoria='".$nome."' where id_categoria=".$id);
		
		echo "<script>alert('Categoria atualizada com sucesso');location.href='lst_categoria.php';</script>";
		
		
		
		
		
	
	 }
	
	
	

	

?>