<?php require "../conn.php"; 
	  include 'cabecalho.php';	  
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
 		
	<table>
		
			<form method="post" action="NovoFilmeAcao.php" enctype="multipart/form-data">
			
   		<tr>
    		<td>Categoria:</td>
			<td><select name="id_categoria">
					<option>  </option>
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
		<!--<tr>
    		<td>Sub-Categoria:</td>
			<td><select name="id_subcategoria">
					<option>  </option>
					<?php /*
						$sql_cat = "select * from subcategorias order by subcategoria";
						$result = mysql_query($sql_cat);
						
						while ($registro = mysql_fetch_array($result)){
						
							$valor = $registro["id_subcategoria"];
							
							if($id_cat == $valor){
								$selecionado ="selected";
								
							}else{
							$selecionado = "";
							
							print"<option value = \"$valor\" $selecionado > $registro[subcategoria] </option>";
							}
						} 
					
				*/	?>
				</select>
			</td>
		</tr>	-->
		
			<tr>
    		<td>Filme:</td>
			<td><input type="text" name="nome" size="50" /></td>
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
				
</body>
</html>
