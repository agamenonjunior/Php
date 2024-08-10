<?php

spl_autoload_register(function($class){

    require_once($class.'.php');

});


class Carrinho{
    

    public function add(Produtos $produtos){
        if(count($this->getCarrinho()['produtos']) > 0){
            foreach ($this->getCarrinho()['produtos'] as $produto_no_carrinho) {
                # code...
            }
        }

    }
    public function remove(){

    }

    public function getCarrinho(){
        return $_SESSION['cart'] ?? [];
    }




}
?>