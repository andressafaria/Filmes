<?php  include '../conn.php';
	   include 'cabecalho.php';
	   
 /* quando for deletar, executa as linhas abaixo */
  

$id = $_GET['id_categoria'];

 mysql_query("DELETE FROM categorias WHERE id_categoria=".$id);

echo "<script>alert('Deletado com sucesso!');location.href='lst_categoria.php';</script>";

?>