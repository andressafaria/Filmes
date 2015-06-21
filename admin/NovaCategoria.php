<?php  
// incluindo o cabeçalho da pagina
	include 'cabecalho.php';	  
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Filme</title>
	<script type="text/javascript" language="javascript">
    <!--
	function validaFrm(frm) {
		if(frm.nome.value==''){
			alert('Preencha o nome da categoria.');
			frm.nome.focus();
			return(false);
		}

  		return(true);
	}	
	
	
	
		
-->
</script>  
    
    
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
						<form method="post" action="#" id="form_categoria" onSubmit="return validaFrm(this);">
   							<tr>
    							<td>Nome da cetegoria:</td>
								<td><input type="text" name="nome" id="nome" /></td>
    						</tr>
   							<tr>
    							<td colspan="2" > 
                                	<input type="submit" name="submit" value="Cadastrar" align="left" />
            				  		<input type="hidden" id="metodo" value="form_categoria"/>
      						 		<input name="reset" type="reset" value="Apagar" />
	    						</td>
  							</tr>
  						</form>
 					</table>
    
    	<!-- JAVASCRIPT   importando o arquivo que irá redirecionar o form para o php-->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="js/formulario_categoria.js"></script>
		<!-- JAVASCRIPT -->
 
			
			<a href="lst_categoria.php"> Voltar</a>			
			
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
	        
<!--fim da div fundo-->    
	</div>
<!--fim da div cabecalho-->
</div>

				<?php 
					//incluindo o rodape da pagina
					include 'rodape.php';
			    ?>
</body>
</html>