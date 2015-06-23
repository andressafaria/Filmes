<? 
session_start();

include 'conn.php';
include 'cabecalho.php';
$b = $_GET["busca"];
$s = $_GET["filmes"];
$query = mysql_query("select * from filmes where id_categoria='$s' and filme like '%$b%'");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
</head>
<body>
<div id="fundo">
			 	<div id="tabzine">				
					<div id="content">
						<div class="cover">


<?php

	
	$qtde_filmes = mysql_num_rows ($query);
	
	if ($qtde_filmes == 0 ){ ?>
	<img src="images/attention.png" /> Nenhum filme foi encontrado em nosso banco de dados.
	
<a href="index.php"> Voltar</a>
	
	<? }else{ ?>
	
	Foram encontrados <?php echo $qtde_filmes ?> filmes (s) com a palavra <?php echo $b ?><br />
			
		<?	while($registro=mysql_fetch_array($query)){ 
		 echo $registro[filme] ;
   } }//}?>

	
</div></div>
</div>
</div>
</div>


</body>
</html>