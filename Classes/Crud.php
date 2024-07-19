<?php

/**
 * Classe Responsável por realizar Crud Genérico
 * 
 */
class Crud
{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "crud";
    private $conexao;


    public function Conect()
    {

        try {
            $this->conexao = new PDO("mysql:host=$this->host,dbname=$this->db", $this->user, $this->pass);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $error) {
            echo 'ERROR: ' . $error->getMessage();
        }
    }

    public function Adicionar($email,$tabela,$dados){

        $campos  = array_keys($dados);
        $valores = array_values($dados);

        if($this->VerificaEmail($email)== false){
            $sql = "INSERT INTO {$tabela} ($campos) VALUES ($valores)";
        }else{

        }
    }

    public function VerificaEmail($email){
        
    }


}
