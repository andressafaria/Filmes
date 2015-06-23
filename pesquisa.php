<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td><b>Resultado da Pesquisa de produtos:</b><br />
	
	<? 
	//varrendo a tabela de filmes
	$sql = mysql_query("SELECT * from produtos where filmes  like %'$txt_valor'% order by id_filme desc");
	
	$qtde_produtos = mysql_num_rows ($sql);
	$i=0;
	
	?>
	
	Foram encontrados <?php echo $qtde_produtos ?> filme (s) com a palavra <? echo $txt_valor ?><br />
	
	<? if ($qtde_produtos == 0) { ?>
	
	<img src="images/attention.png" />Nenhum filme foi encontrado em nosso banco de dados.
	
<br /><br /><br /><br /><br />
	
	<a href="index.php"> Voltar</a>
	<? }else{ 
	
			while ($i < $qtde_produtos) {
	?>
	<table width="100%" border="0" cellpadding="0" cellpadding="4">
  <tr>
		<td width ="50%" align ="center"><table width="100%" border="1" cellpadding="0" cellspacing="2">
  <tr>
    <td><center><?php echo "<img src = admin/fotos/".$col["foto"]." border = 0 width=75 align=left" ; ?>
	<b><?php echo $col["filme"] ?>;</b><br />
	</center>
	
	<form id="fom1" name="form" action="carrinho.php" method="post">
	<input type="submit" value="Comprar" />
	<!--<input type="submit" value="Detalhes" />-->
	</form>
	
	</td>
  </tr>
</table>
</td>
  
  
  <? } }
  $i++;
  if($i%2==0){
  		echo "</tr>";	
	}?>
</table>



</div></div>
<? include 'secoes.php';

?>
</div></div></div></div>
<?php include 'rodape.php'; ?>

			
	
	
	
	

	
	</td>
  </tr>


</body>
</html>