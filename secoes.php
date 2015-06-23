<? include "conn.php" ; 
$id_cat = $_GET["id_categoria"];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>secoes</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>

<body>
	<div class="right">
		<div class="featbox rounded">
			<div class="featlist ">
				<div class="fblock">
					<center><h3 class="sidetitl rounded">Seções</h3></center>
    			</div>
		<div class="fblock">
			<?php 
				$sql_cat = mysql_query("SELECT * from categorias");
				
				while ($coluna_cat = mysql_fetch_array($sql_cat)){
				echo "<div class=fblock><a href =\"categorias.php?id_categoria=$coluna_cat[id_categoria]\">-$coluna_cat[categoria]</a></div><br>";
				
				
			/*	if($id_cat == $coluna_cat['id_categoria']){
				
				$sql_subcat = mysql_query("SELECT * from subcategorias where id_categoria = $id_cat");
				
				while ($coluna_subcat = mysql_fetch_array($sql_subcat)){
				
				echo " <center><div><a href =\"categorias.php?id_categoria=$coluna_subcategoria[id_categoria]&id_subcategoria=$coluna_subcat[id_subcategoria]\">-$coluna_subcat[subcategoria]</a></div></center><br>";
				}
					
				}*/
			}	
			
			?>		
	    	
			
			
		
					
</div></div></div>
</body>
</html>
