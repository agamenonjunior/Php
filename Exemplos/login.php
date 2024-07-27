<?php

require_once("../Classes/Conexao.php");

$conexao = new Conexao();
$conexao = $conexao->conectar();


if (isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    # code...
    $email = addslashes($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    #realiza conexao com db e verifica registro

    $sql = $conexao->prepare("SELECT * FROM usuarios WHERE email =:email AND senha =:senha");
    $sql->bindParam(":email",$email);
    $sql->bindParam(":senha",$senha);
    $sql->execute();
    if($sql->rowCount() > 0){
        #realiza o login
        $dado = $sql->fetch();
        $_SESSION['nome']  = $dado['nome'];
        $_SESSION['email'] = $dado['email'];
        $_SESSION['senha'] = $dado['senha'];
        header("Location:dashboard.php");
    }else{
        echo "Error: E-mail ou Senha não existe no sistema";
    }

    
}


?>

<form action="" method="post">

    <input type="text" name="email" id="email" placeholder="Informe seu E-mail">
    <input type="password" name="senha" id="senha" placeholder="informe sua Senha">
    <input type="submit" value="Entrar" name="entrar">

</form>