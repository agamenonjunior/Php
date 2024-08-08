<?php
spl_autoload_register(function($class){

    require_once("../Classes/".$class.".php");
});

if (isset($_POST['cadastrar'])) {
    
    if (isset($_POST['texto']) && !empty($_POST['texto'])) {
        #REALIZA O TRATAMENTO DOS DADOS
        $dados['texto']        = htmlentities($_POST['texto']);
        $dados['id_noticia']   = htmlentities($_POST['id_postagem']);
        $dados['autor']        = htmlentities($_POST['autor']);
        $dados['data']         = date('Y-m-d H:i:s');

        $postar = new Crud();
        $postar->Add_Post("comentarios",$dados);       

    }else{
        echo 'Preencha os campos corretamente';
    }
    
}


?>

<form action="" method="post">
    <textarea name="texto" id=""></textarea>
    <input type="hidden" name="autor" value="1">
    <input type="hidden" name="id_postagem" value="1">
    <input type="submit" name="cadastrar" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>