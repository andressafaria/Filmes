 <!-- esta pagina mostra o resultado das categorias cadastradas no banco e 
 aprensenta as opções de editar, excluir e adicionar uma nova categoria -->
 
<?php
//inluindo a conexão com o banco
 	require '../conn.php';
//incluindo o cabeçalho da página
	include 'cabecalho.php';
	
	
	  
 /* quando for deletar, executa as linhas abaixo 

 if($_GET["acao"]=="deleta") {

$id = $_GET['id_adm'];

 mysql_query("DELETE FROM administracao WHERE id_adm=".$id);

echo "<script>alert(' Deletado com sucesso!');location.href='usuarios.php';</script>";

}*/

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>teste</title>
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
    						  <td>
                              		<b><center>Nome: </center></b>	  
                              </td>
      						  <td>
                              		<b><center> Email:</center></b>	 
                              </td>
      						  <td>
	  								<center> <b>Login</b></center>	 
                              </td>
	  						  <td>
	  						        <center> <b>Senha:</b></center>	 
                              </td>
	 						  <td colspan="2">
	  								<center> <b>A&ccedil;&atilde;o</center>
	  						  </td>
	 					 </tr>
    					 <tr>
							 <td colspan="4"></td>
							 <td colspan="3"><div align="center"><a href="NovoUsuario.php">Novo Administrador </a> </div></td>
    					</tr>
     
  						<?php 
							//query que seleciona a tabela de administradores
							$sql = mysql_query("SELECT * from administracao");
			
							// laço feito para mostrar todos os administradores cadastrados
							while($coluna = mysql_fetch_array($sql)){ ?>
            
    					<tr>
     						 <td><?php echo $coluna['nome'];?></td>
	 			 			 <td><?php echo $coluna['email']; ?> </td>
	 						 <td><?php echo $coluna['login']; ?> </td>
	 						 <td><?php echo $coluna['senha']; ?> </td>
	  
	  
      						<td width="13%"><a href="lst_alterarUsuario.php?id_adm= <?php echo $coluna["id_adm"];?>">Editar</a></td>
      						<td width="12%"><a href="deleta_usuario.php?id_adm=<?php echo $coluna["id_adm"] ;?>">Excluir</a></td>
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
			
				include 'menu.php'; ?>							   		

<!--fim da div fundo-->    </div>
<!--fim da div cabecalho--></div>


		   <?php include 'rodape.php'; ?>



</body>
</html>
