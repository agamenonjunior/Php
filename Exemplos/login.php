<?php

if (isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    # code...
    $email = addslashes($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    #realiza conexao com db e verifica registro
    
}


?>

<form action="" method="post">

    <input type="text" name="email" id="email" placeholder="Usuario">
    <input type="password" name="senha" id="senha">
    <input type="submit" value="Entrar" name="entrar">

</form>