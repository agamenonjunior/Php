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
            return $this->conexao;

        } catch (PDOException  $error) {
            echo 'ERROR: ' . $error->getMessage();
        }
    }

    public function Adicionar($email,$tabela,$dados){
        $dado = $this->array_generico($dados);

        if($this->VerificaEmail($email)== false){
            $sql = "INSERT INTO {$tabela} ({$dado['campo']}) VALUES ({$dado['valores']})";
            $pdo = $this->Conect();
            $stmt = $pdo->prepare($sql);
            $pdo->exec($stmt); 
        }else{
            return false;
        }
    }

    public function VerificaEmail($email){
        /**
         * VerificaEmail function
         * Verifica se o e-mail já está cadastrado no Banco de Dados
         * @param [string] $dados
         * @return bool
         */
        
    }

    public function array_generico($dados){
        $array_generico = array();

        $chaves  = array_keys($dados);
        foreach ($dados as $key => $value) {
            # realiza o implode nos valores do array
            $valores = implode(", ",$dados);
        }
    
        foreach ($chaves as $key => $value) {
            # realiza o implode nas chaves do array
            $campos = implode(", ",$chaves);
        }
        $array_generico['campos'] = $campos;
        $array_generico['valores'] = $valores;
        return $array_generico;
        
    }


}
