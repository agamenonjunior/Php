<?php
spl_autoload_register(function($class){

    require_once('Classes'.$class.'.php');

});

$Usuario = new User('usuario','user@teste.com',1234,1,1);
echo $Usuario->getNome();

?>