<?php
// esta página é responsavel pela conexão ao banco de dados
// Aqui estou passando os parametros necessários para que a conexão aconteça

$servidor 	= "localhost";
$user		= "root";
$senha 		= "";

//Fazendo a conexão com o banco e guardando na váriavel $conn
 $conn= mysql_connect($servidor,$user,$senha) or die ("Erro ao conectar"); 
 
// Aqui estou selecionando o banco de dados 
 mysql_select_db("filmes",$conn) or die ("Não foi possivel conectar ao DB");
 
 ?>