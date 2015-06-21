<!-- pagina que executa a ação de alterar a categoria selecionada em lst_categoria.php -->
<?php 
//incluindo a conexao com o banco
	require "../conn.php";

//incluindo o cabeçalho da pagina
	include 'cabecalho.php';


//selecionando a tabela categoria
	$sql = mysql_query("SELECT f.*, c.* from filmes f, categorias c where f.id_categoria = c.id_categoria order by c.categoria");
//$sql = pg_query("SELECT c.*, s.* from categorias c, subcategorias s where c.id_cat = s.id_cat and id_subcat = $id");
	$coluna = mysql_fetch_array($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Filme</title>
</head>

<body>

<!--inicio div fundo -->
<div id="fundo" >
<!--inicio div tabzine-->
	<div id="tabzine" >
<!--inicio div content-->
		<div id="content" >
<!--inicio div cover-->  
			<div class="cover">

			<table>		
				<form method="post"action="alterarFilmeAcao.php?id_categoria=<?php echo $coluna["id_categoria"]."&id_filme=".$coluna["id_filme"];?>" enctype="multipart/form-data">
   		<tr>
    		<td>Categoria:</td>
			<td><select name="id_categoria">
					<option><? echo $coluna["categoria"]?>   </option>
					<?php
						$sql_cat = "select * from categorias order by categoria";
						$result = mysql_query($sql_cat);
						
						while ($registro = mysql_fetch_array($result)){
						
							$valor = $registro["id_categoria"];
							
							if($id_cat == $valor){
								$selecionado ="selected";
								
							}else{
							$selecionado = "";
							
							print"<option value =\"$valor\"$selecionado > $registro[categoria] </option>";
							}
						} 
					
					?>
				</select>
			</td>
		</tr>	
		
			<tr>
    		<td>Filme:</td>
			<td><input type="text" name="nome" size="50" value="<?php echo $coluna["filme"]?>" /></td>
    	</tr>
    	</tr>
   		
		<tr><td>Imagem:</td>
		<td><input name="foto" type="file" size="50" /></td>
		</tr>
		<tr><td>Descrição:</td>
		<td><textarea cols="35" rows="5" name="descricao" id="descricao" /></textarea> </td>
		</tr>
		<tr>
    		<td colspan="2" ><center> <input type="submit" name="submit" value="Cadastrar" align="left" />
      			<input name="reset" type="reset" value="Apagar" /></center>
	    	</td>
  		</tr>
		
  			</form>
 	</table>
 
			
			<a href="lst_filmes.php"> Voltar</a>
            
            
            
       

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
