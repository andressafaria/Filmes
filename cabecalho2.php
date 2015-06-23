<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Movies.com</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<body>
<div id="cabecalho">
	<div id="top">
	 
	<!--<table width="280" height="90" >
	
	<tr><td width="39" rowspan="3"></td>
	<td height="12" colspan="2"><center>
	  <b>Carrinho de Compras</b>
	  </center></td>
	</tr>
	<tr>
	<td width="154" height="20">Quantidade de Itens:</td>
	<td width="71"></td>
	</tr>
	<tr>
	<td height="19">Valor Total</td>
	<td></td>
	</tr>
	
	</table>-->
	
	<div id="login">		
			<center> <a href="admin/login.php"><img src="admin/images/arearestrita.png"></a></center>
      
	</div>
					<!--Fim do campo de Login
				
					<!--Logo-->

					<div id="imagemcabecalho">
						<img src="admin/images/netmovies4.png" </img>


					</div>
			
					<!--Fim da logo-->
	</div>
				<!--fim da div top -->
				
			<!--Menu-->
	<div id="barra">
	
	</div>
	
	<div id="barra2">
	  <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
         <!-- <li><a href="listasprontas.php">Listas Prontas</a></li>-->
          <li><a href="#">Links</a></li>
         <!-- <li><a href="secoes1.php">Seções</a></li> -->
          <!--<li><a href="">Como Pagar</a></li>
          <li><a href="">Entrega</a></li> -->
          <li><a href="novidades.php">Novidades</a></li>
          <li><a href="curiosidades.php">Curiosidades</a></li>
          
        </ul>
	    <!--campo de busca-->
        <div id="search">
          <form method="get"  action="procurar.php" >
           
            <select name="filmes" id="l">
              <?php $query = mysql_query("SELECT * from categorias");
        while($rs = mysql_fetch_array($query)){
?>			
              <option value="<?php echo $rs['id_categoria'] ?>"><?php echo $rs['categoria'] ?></option>
              <?php } ?>
            </select>
			 <input id="s" class="rounded" type="text" name="busca" value="Buscar" size="10" />
          </form>
        </div>
        <!--fim do campo de busca -->
      </div>
	  <!--Fim da div menu-->
</div>
</body>
</html>
