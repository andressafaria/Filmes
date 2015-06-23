 <!-- esta pagina mostra o resultado das categorias cadastradas no banco e 
 aprensenta as opções de editar, excluir e adicionar uma nova categoria -->
<?php  include '../conn.php';
	   include 'cabecalho.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
</head>

<body>
<!--inicio div fundo --> <div id="fundo"   >
<!--inicio div tabzine--><div id="tabzine" >				
<!--inicio div content--><div id="content" >
<!--inicio div cover-->  <div class="cover">


<table width="99%" border="0">
	<tr>
    	<td width="73%"><b><center>Categorias:</center></b></td>
        
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
			while($coluna = mysql_fetch_array($sql)){ ?> 
  		
				 <tr>
   					 <td><? echo $coluna['id_categoria']; ?></td>
    				 <td width="12%"><a href="AlterarCategoria.php?id_categoria= <?php echo $coluna["id_categoria"];?>">Editar</a></td>
    				 <td width="15%"><a href="?acao=deleta&id_categoria=<?php echo $coluna["id_categoria"] ;?>">Excluir</a></td>
                </tr>
  		<?php } ?>
 
 	
</table>
					
<!-- fim da div cover -->  </div>
<!-- fim da div content--> </div>
<!-- fim da div tabzine--> </div>

			<?php include 'menu.php'; ?>							   		

<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>


		   <?php include 'rodape.php'; ?>



</body>
</html>
