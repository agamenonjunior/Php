<?php
spl_autoload_register(function($class){

    require_once("Classes/".$class.".php");
});

if (isset($_POST['cadastrar'])) {
    
    if (isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['texto']) && !empty($_POST['texto']) ) {
        #
        $dados['titulo']    = htmlentities($_POST['titulo']); 
        $dados['texto']     = htmlentities($_POST['texto']);
        $dados['categoria'] = htmlentities($_POST['categoria']);
        $dados['autor']     = htmlentities($_POST['autor']);
        $dados['data']      = date("d-m-Y h:i:s");

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
    <input type="hidden" name="autor" value="Teste">
    <input type="submit" name="cadastrar" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>