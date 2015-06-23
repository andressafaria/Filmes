<?php require "../conn.php";

	 	  
//trazendo as variaveis	  
$nome 		= 	trim($_POST["nome"]);
$id_categoria 	=	trim($_POST["id_categoria"]);
//$id_subcategoria	= 	trim($_POST["id_subcategoria"]);
$foto 		= 	trim( $_POST["foto"]);
$descricao 	=	trim($_POST["descricao"]); 
	  
	  
	 //verificando o botão submit: 
if(!empty($_POST['submit'])){
	  
	 							 //Verificação das imagens
	//verificando se a opção de procurar a imagem foi selecionada
		
	$arquivo =isset($_FILES["foto"]) ? $_FILES["foto"] : FALSE;

	//array que guarda as configurações das imagens
	$config = array();
	$config["tamanho"] 	 = 106883; //tamanho maximo da imagem
	$config["largura"] 	 = 350 ; // largura maxima da imagem
	$config["altura"] 	 = 250; // altura maxima da imagem
	$config["diretorio"] = "fotos/"; //pasta onde ficará a imagem


//gerando um nome unico para imagem: 
function nome($extensao)
{
	global $config;
	$temp = substr(md5(uniqid(time())),0,10);
	$imagem_nome = $temp.".".$extensao;
	
	
	//verificando se a imagem já existe no diretorio
	if(file_exists($config["diretorio"].$imagem_nome)){
	
	$imagem_nome = nome($extensao);
	
	}
	return $imagem_nome;
	}
	
	if($arquivo) {
	
	$erro = array();
	
	//Verificando se a imagem é realmente uma imagem
	
	if(!eregi("^image\/(pjepeg|jpeg|png|gif|bmp)$", $arquivo["type"]))
	{	
		$erro[] = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png";
		
	}else{
	
	//Verificando se a imagem está dentro dos padrões confiugurados em $config:
		if($arquivo["size"] > $config["tamanho"]){
		
			$erro[] = "Arquivo em tamanho inválido! A imagem deve ter no máximo ".$config["tamanho"]." bytes!";
		}
	
	//getmagesize : função que retorna uma matriz com a largura[0], altura[1], tipo da imagem[2], string com o heigt e width[3]
			
			$tamanhos = getimagesize($arquivo["tmp_name"]);
			
			if($tamanhos[0] > $config["largura"]){
			
			$erro []= " Largura maior do que a permitida! A largura deve ser no máximo ".$config["largura"]." pixels!";
			
			}
			
			if($tamanhos[1] > $config["altura"]){
			
				$erro[] = "Altura é maior do que a permitida! A altura deve ser no máximo".$config["altura"]." pixels!" ;
			
			}
			
	
	}
		//sizeof: retorna o numero de elementos do array
		if(!sizeof($erro)) {
			
			//função que faz uma busca dentro de strings/ /i: não diferencia maiusculas de minusculas
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$arquivo["name"],$ext);
			
			//nome gerado já com a sua extensão
			$imagem_nome = nome($ext[1]);
			$imagem_dir = $config["diretorio"].$imagem_nome;
			move_uploaded_file($arquivo["tmp_name"],$imagem_dir);
			
			//Fim da verificação da imagem
		
		}

}
			if ($arquivo && !sizeof($erro)){
			
			$foto = $imagem_nome;
			$sql = mysql_query ("update filmes set (id_categoria,id_subcategoria,filme,foto,descricao) values ('$id_categoria',null,'$nome','$foto','$descricao' )");
			//mysql_query("update filmes set subcategoria='".$nome."' where id_subcategoria=".$id);

	//$sql = mysql_query( "UPDATE filmes SET
	// id_categoria ='".$id_categoria."','id_subcat = null,
       
    //    filme ='".$nome."', foto ='".$foto."' WHERE id_filme = '$id_filme' ")

		//	 or die ("Não foi possível alterar os dados");


		echo "<script>alert('Filme atualizado com sucesso!!');location.href='lst_filmes.php';</script>";


} else {
		if(sizeof($erro)){
	echo "Uploud falhou! Ocorreram os seguintes erros: ";
		foreach ($erro as $err)
		{
		echo " - ".$err."<br>";
		}
		echo "</br>";
}
}


	 }
     
     ?>