<?php
       require "../conn.php";
	   include 'cabecalho.php';

$id = $_GET['id_filme'];

 mysql_query("DELETE FROM filmes WHERE id_filme=".$id);

echo "<script>alert('Filme deletado com sucesso!');location.href='lst_filmes.php';</script>";


?>