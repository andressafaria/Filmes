<?php
// Conexão com o banco de dados
require "../conn.php";

// Inicia sessões
session_start();

// Recupera o login
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ?(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha)
{
    echo "<script>alert('Preencha todos os campos para entrar!');location.href='login.php';</script>";
    exit;
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.
*/
$SQL = "SELECT *
        FROM administracao
        WHERE login = '" . $login . "'";
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
    $dados = @mysql_fetch_array($result_id);

    // Agora verifica a senha
    if(!strcmp($senha, $dados["senha"]))
    {
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
        $_SESSION["id_adm"]   = $dados["id_adm"];
        $_SESSION["nome"] = stripslashes($dados["nome"]);

        header("Location: index.php");
        exit;
    }
    // Senha inválida
    else
    {
        echo "<script>alert('Usuário e/ou senha inválido(s)! Tente novamente!');location.href='login.php';</script>";
        exit;
    }
}
// Login inválido
else
{
    echo "<script>alert('Usuário e/ou senha inválido(s)! Tente novamente!');location.href='login.php';</script>";
    exit;
}
?>