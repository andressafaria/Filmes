 <!-- esta pagina mostra o resultado das categorias cadastradas no banco e 
 aprensenta as opções de editar, excluir e adicionar uma nova categoria -->
<?php  
// incluindo a conexão com o banco
	include '../conn.php';
// incluindo o cabeçalho da pagina
	include 'cabecalho.php';	   
?>
       
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Categorias</title>

	</head>

<body>
<!--inicio div fundo --> 
	<div id="fundo">
<!--inicio div tabzine-->
		<div id="tabzine" >				
<!--inicio div content-->
			<div id="content" >
<!--inicio div cover-->  
				<div class="cover">

					<table>
						<tr>
    						<td><b><center>Categorias:</center></b></td>
        					<td colspan="2"><center><b>A&ccedil;&atilde;o</b></center></td>
   						</tr>
						<tr>
    						<td>&nbsp;</td>
   	  						<td colspan="2"><a href="NovaCategoria.php">Inserir nova Categoria</a> </td>
   		   			   </tr>
                       
                       
					  <?php 
							//query que seleciona a tabela de categorias
							$sql = mysql_query("SELECT * from categorias");
							// laço feito para mostrar todos as categorias cadastradas
							while($coluna = mysql_fetch_array($sql)){ 
			    	  ?> 
  		
		 				<tr>
   							<td><?php echo $coluna['categoria']; ?></td>
    						<td width="12%"><a href="lst_alterarCategoria.php?id_categoria= <?php echo $coluna["id_categoria"];?>">Editar</a></td>
    						<td width="15%"><a href="deleta_categoria.php?id_categoria=<?php echo $coluna["id_categoria"] ;?>" 
                            onclick="return confirm('Tem certeza que deseja deletar?'); return false;">Excluir</a></td>
        			   </tr>
  					<?php  } ?>
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

<!--fim da div cabecalho-->
</div>
		   <?php 
		   		//incluindo o rodape
		   		include 'rodape.php'; 
		   ?>



</body>
</html>
