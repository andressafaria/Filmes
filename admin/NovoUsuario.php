<?php 
//Incluindo a conexão com o banco
	require "../conn.php"; 
//Incluindo o cabeçalho da página
	include 'cabecalho.php';	  	  
?>
	  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Filmes</title>
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
					<form method="post" id="form_user" action="#">
   					<tr>
    					<td>Nome:</td>
						<td><input type="text" name="nome" id="nome" required="required"/></td>
    				</tr>
					<tr>
   						 <td>Email:</td>
						 <td><input type="text" name="email" id="email" required="required"></td>
   					</tr>
					<tr>
   						 <td>Login:</td>
						 <td><input type="text" name="entrar" id="entrar" required="required"/></td>
   					</tr>
					<tr>
   						 <td>Senha:</td>
						 <td><input type="password" name="senha" id="senha" required="required"/></td>
   					</tr>
   					<tr>
    					<td colspan="2" >
                        	<input type="submit" name="submit" value="Cadastrar" align="left" />
           				    <input type="hidden" id="metodo" value="form_user" />
      						<input name="reset" type="reset" value="Apagar" />
	    				</td>
  				  </tr>
  				</form>
 			</table>
    
   
    	<!-- JAVASCRIPT   importando o arquivo que irá redirecionar o form para o php-->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="js/formulario_user.js"></script>
		<!-- JAVASCRIPT -->
 
			
			<a href="lst_usuario.php"> Voltar</a>			
			
<!-- fim da div cover -->  
			</div>
<!-- fim da div content--> 
		</div>
<!-- fim da div tabzine--> 
	</div>
			
		<?php 
		//incluindo o menu lateral da página
		include 'menu.php'; 
		
		?>							   		
	        
<!--fim da div fundo-->    
	</div>
<!--fim da div cabecalho-->
</div>

	<?php
		//incluindo o rodapé da página
	
		 include 'rodape.php'; 
	?>
                
                
<!--Falta fazer a validação dos campos-->
				
</body>
</html>
