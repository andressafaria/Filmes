<!-- pagina que executa a ação de alterar a categoria selecionada em lst_categoria.php -->

<?php require "../conn.php";
	   include 'cabecalho.php';
	  
	  
	  //trazendo o id
	 $id= $_GET["id_categoria"];
	  
	 // se o contador  for maior que zero, ou seja se já existir um id no bd:
	  if(count($_POST)>0){
  		
		$nome = $_POST ["nome"];
	 }
	
	//selecionando a tabela categoria
	$sql= mysql_query("select * from categorias where id_categoria =".$id);
	$coluna = mysql_fetch_array($sql);
	
	

	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<!--inicio div fundo --> <div id="fundo"   >
<!--inicio div tabzine--><div id="tabzine" >				
<!--inicio div content--><div id="content" >
<!--inicio div cover-->  <div class="cover">

			 <form method="post" action="lst_alterarCategoriaAcao.php?id_categoria=<?php echo $_GET["id_categoria"] ?>">
				 <table><center><b>Alterar Categoria </b></center>
   					<tr>
   						 <td>Nome:</td>
						 <td><input type="text" name="nome" size="50" value="<?php echo $coluna["categoria"]?>" /></td>
   					</tr>
   					<tr>
    					<td colspan="2"><center><input type="submit" value="Salvar" /></center></td> 
   					</tr>
				</table>
 			</form><br />
			<a href="lst_categoria.php">Voltar</a>
			
<!-- fim da div cover -->  </div>
<!-- fim da div content--> </div>
<!-- fim da div tabzine--> </div>

				<?php include 'menu.php'; ?>							   		

<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>

				<?php include 'rodape.php'; ?>
				
				
<!-- ps: cabeçalho duplicado, corrigir essa falha depois -->
</body>
</html>
