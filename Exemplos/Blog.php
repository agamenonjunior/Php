<?php
spl_autoload_register(function($class){

    require_once("../Classes/".$class.".php");
});

if (isset($_POST['cadastrar'])) {
    
    if (isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['texto']) && !empty($_POST['texto']) ) {
        #
        $dados['titulo']    = htmlentities($_POST['titulo']); 
        $dados['slug']      = str_replace(" ", "-", $dados['titulo']);
        $dados['texto']     = htmlentities($_POST['texto']);
        $dados['categoria'] = htmlentities($_POST['categoria']);
        $dados['autor']     = htmlentities($_POST['autor']);
        $dados['data']      = date('Y-m-d H:i:s');

        $postar = new Crud();
        $postar->Add_Post("blog",$dados);       

    }else{
        echo 'Preencha os campos corretamente';
    }
    
}


?>

<form action="" method="post">
    <input type="text" name="titulo" placeholder="Informe o título da postagem">
    <select name="categoria" id="">
        <option value="Entretenimento">Entretenimento</option>
        <option value="Esporte">Esporte</option>
        <option value="Tecnologia">Tecnologia</option>
    </select>
    <textarea name="texto" id=""></textarea>
    <input type="hidden" name="autor" value="1">
    <input type="submit" name="cadastrar" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>