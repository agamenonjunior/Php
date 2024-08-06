<?php
spl_autoload_register(function($class){

    require_once("Classes/".$class.".php");
});

if (isset($_POST['cadastrar'])) {
    
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