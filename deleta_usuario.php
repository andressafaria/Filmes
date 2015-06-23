<?php require '../conn.php';
	  include 'cabecalho.php';
	  
//quando for deletar, executa as linhas abaixo 

$id = $_GET['id_adm'];

 mysql_query("DELETE FROM administracao WHERE id_adm=".$id);

echo "<script>alert(' Deletado com sucesso!');location.href='lst_usuario.php';</script>";


?>