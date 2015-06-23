<?php
session_start(); //start na session
include '../conn.php'; //incluindo o arquivo de conexão

//buscando os dados no formulario
$login = $_POST["login"];
$senha = $_POST["senha"];

//verificando se os campos email e senha foram preenchidos:

if ((!$login) || (!$senha)){

 echo "<script>alert('Por favor, todos os campos devem ser preenchidos!');location.href='login.php';</script>";  
   

//se foram preenchidos, verifica se é um email/senha válido.	
	}else{
 
    	$senha1 = md5($senha);
 
    	$sql = mysql_query("SELECT * FROM administracao 
		WHERE login ='{$login}' AND senha='{$senha}'");
 
    	$login_checar = mysql_num_rows($sql);
 
    if ($login_checar > 0){
 
        $row =mysql_fetch_array($sql);
 
            $_SESSION['id'] = $id;
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['ativado'] = $nivel_usuario;
			
			$nivel_usuario = 1;
 
       // $sql = pg_query( "UPDATE cadastro_fisico SET data_ultimo_login = now() WHERE email ='{$email}' and ativado = '{$nivel_usuario}'");
 
            header("Location: index.php");
			
 //se não for válido, apresenta msg de erro e retorna o usuario a pagina de login
   	 }else{
	
  echo "<script>alert('Usuário e/ou senha inválido(s)! Tente novamente!');location.href='login.php';</script>";
 
        
 
    }

}
 
/*Esta pagina não está apresentando erro;
o usuario consegue ser direcionado a pagina restrita.

ps: substituir pagina restrita pela pagina referente a compra...

é estamos caminhando! Parabéns Andressa! *-* */
?>