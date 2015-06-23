<?php
       require "../conn.php";
	   include 'cabecalho.php';

$id = $_GET['id_subcategoria'];

 mysql_query("DELETE FROM subcategorias WHERE id_subcategoria=".$id);

echo "<script>alert('Sub- Seção deletada com sucesso!');location.href='lst_Subcategoria.php';</script>";


?>