
<?php require 'conn.php';
	  include 'cabecalho.php';
$id_cat = $_GET["id_categoria"];
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>teste</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>			
<!--inicio div fundo --> <div id="fundo"   >
<!--inicio div tabzine--><div id="tabzine" >				
<!--inicio div content--><div id="content" >
<!--inicio div cover-->  <div class="cover">
 <center><b>Filmes</b></center>
  <table width="99%" border="0">
    <?php 
	  $sql = mysql_query("SELECT f.*, c.* from filmes f, categorias c where f.id_categoria ='".$id_cat."'");
		
			
			// laço feito para mostrar todos as categorias,subcategorias e filmes cadastrados
			while($coluna = mysql_fetch_array($sql)){ ?>
    <tr>
     <td> <?php echo "<img src =admin/fotos/".$coluna["foto"]." border = 0 width=75 align=left" ; ?></td>
	  <td><?php  echo $coluna["filme"]; ?> </td>
    </tr>
    <?php 
  		} ?>
   
  </table>
  <!-- fim da div cover -->
</div>
<!-- fim da div content--> </div>
<!-- fim da div tabzine--> </div>

			<?php include 'secoes.php'; ?>							   		

<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>


		   <?php include 'rodape.php'; ?>



</body>
</html>
