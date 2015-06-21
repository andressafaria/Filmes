<?php require '../conn.php';
	  include 'cabecalho.php';
	 // Este arquivo será usado para deletar do banco o usuario selecionado através do id

$id = $_GET['id_adm'];

 mysql_query("DELETE FROM administracao WHERE id_adm=".$id);

echo "<script>alert(' Deletado com sucesso!');location.href='lst_usuario.php';</script>";


?>