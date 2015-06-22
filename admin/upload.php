<?php

//verificando se a opção de procurar a imagem foi selecionada
$arquivo =isset($_FILES["foto"]) ? $_FILES["foto"] : FALSE;

//array que guarda as configurações das imagens
$config = array();
$config["tamanho"] = 106883; //tamanho maximo da imagem
$config["largura"] = 350 ; // largura maxima da imagem
$config["altura"] = 250; // altura maxima da imagem
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
		
		}

}
?>


