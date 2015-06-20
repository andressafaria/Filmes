 <!-- esta pagina mostra o resultado das categorias cadastradas no banco e 
 aprensenta as opções de editar, excluir e adicionar uma nova categoria -->
 
<?php 
	//incluindo a conexao com o banco
	 require '../conn.php';
	//incluindo o cabeçalho da pagina
	 include 'cabecalho.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>filmes</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>

<body>			
<!--inicio div fundo --> 
	<div id="fundo"   >
<!--inicio div tabzine-->
		<div id="tabzine" >				
<!--inicio div content-->
			<div id="content" >
<!--inicio div cover-->  
				<div class="cover">
 					 <table>
   						 <tr>
     						 <td><b> <center>Categorias </center></b></td>
      						 <td><b><center> Filmes:</center></b></td>	  
      						 <td colspan="4"><center> <b>A&ccedil;&atilde;o</b></center></td>
   						</tr>
	 					<tr>
							<td colspan="2"></td>
							<td colspan="5"><div align="center"><a href="NovoFilme.php"> Novo Filme</a> </div></td>
     				   </tr>
    <?php 
	
	 // Selecionando a tabela de categorias
	  $sql = mysql_query("SELECT f.*, c.* from filmes f, categorias c where f.id_categoria = c.id_categoria order by c.categoria");
		
			
	 // laço feito para mostrar todos as categorias,subcategorias e filmes cadastrados
	   while($coluna = mysql_fetch_array($sql)){ ?>
    
    				<tr>
       					<td><?php  echo $coluna["categoria"]; ?> </td>
	  					<td><?php  echo $coluna["filme"]; ?> </td>
      					<td width="12%"><a href="lst_alterarFilme.php?id_filme= <?php echo $coluna["id_filme"];?>"> Editar</a></td>
     					<td width="12%"><a href="?deleta_filme.php?id_filme=<?php echo $coluna["id_filme"] ;?>">Excluir</a></td>
    			   </tr>
    <?php } ?>
   
  </table>
  <!-- fim da div cover -->
			</div>
<!-- fim da div content--> 
		</div>
<!-- fim da div tabzine--> 
	</div>

			<?php 
			//incluindo o menu lateral
				include 'menu.php';
			 ?>							   		

<!--fim da div fundo-->    
	</div>
<!--fim da div cabecalho-->
</div>


		   <?php 
		   
		   //incluindo o rodape
		   include 'rodape.php';
		   
		    ?>

</body>
</html>
