<?php 
//inserindo a conexão com o banco de dados
	require '../conn.php'
?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Index</title>
</head>

<body>
<!-- Incluindo o cabeçalho da página-->
<?php 
	include 'cabecalho.php'; 
?>
<!--inicio da div fundo-->
<div id="fundo">
<!--inicio da div tabzine-->
	<div id="tabzine">
<!--inicio da div content-->				
		<div id="content">
<!--inicio da div cover-->
			<div class="cover">
			
				Colocar alguns conteúdo aqui que irão aparecer no corpo da página.<br />
           		Pensar em inserir algumas imagens que apontem para os links de serviço<br />
           		Preciso trabalhar nesta página ainda.
<!-- fechando a div cover-->
            </div>
<!-- fechando a div content-->	
        </div>
<!-- fechando a div tabzine-->
	</div>
				
		<?php
		//incluindo o menu lateral
			 include 'menu.php';
	    ?>							   		
<!--fechando a div fundo-->
</div>

<?php 
	//incluindo o rodapé da página
	include 'rodape.php'; 

?>

</body>
</html>
