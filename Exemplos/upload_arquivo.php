<?php

$arquivo = $_FILES['arquivo'];

if (isset($arquivo['tpm_name'])&& !empty($arquivo['tpm_name']) ) {
    # code...
    
    $arquivo_novo = md5(time().rand(0,99)).'.png';
    move_uploaded_file($arquivo['tpm_name'],'arquivos/'.$arquivo_novo);
}


?>

<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="arquivo" id="">
    <input type="submit" value="Entrar" name="entrar">

</form>