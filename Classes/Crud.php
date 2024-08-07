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
    /**
     * Realiza a conexão com o banco de dados
     */
    {

        try {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conexao;
        } catch (PDOException  $error) {
            echo 'ERROR: ' . $error->getMessage();
        }
    }

    public function Adicionar($email, $tabela, $dados)
    /**
     * Realiza Insert no Banco de dados
     */
    {
        $dado = $this->array_generico($dados);
        $pdo = $this->Conect();
        if ($this->VerificaEmail($email) == false) {
            $sql = $pdo->prepare("INSERT INTO {$tabela} ({$dado['campos']}) VALUES ({$dado['valores']})");
            if ($sql->execute()) {
                echo "Dado Cadastrado com Sucesso !";
            } else {
                echo "Ops... Error ao realizar o Cadastrado !";
            }
        } else {
            return false;
        }
    }

    public function Add_Post($tabela, $dados)
    /**
     * Realiza Insert no Banco de dados
     */
    {
        $dado = $this->array_generico($dados);
        $pdo = $this->Conect();
        
            $sql = $pdo->prepare("INSERT INTO {$tabela} ({$dado['campos']}) VALUES ({$dado['valores']})");
            if ($sql->execute()) {
                echo "Dado Cadastrado com Sucesso !";
            } else {
                echo "Ops... Error ao realizar o Cadastrado !";
            }
       
    }

    public function VerificaEmail($email)
    {
        /**
         * VerificaEmail function
         * Verifica se o e-mail já está cadastrado no Banco de Dados
         * @param [string] $dados
         * @return bool
         */
        $pdo = $this->Conect();
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email");
        $sql->bindParam(":email",$email);
        $sql->execute();
        if($sql->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }

    public function array_generico($dados)

    /**
     * Retornar um array genérico contendo chaves e valores
     */

    {
        $array_generico = array();

        $chaves  = array_keys($dados);
        foreach ($dados as $key => $value) {
            # realiza o implode nos valores do array
            $valores = implode("','", $dados);
            $valores = "'" . $valores . "'";
        }

        foreach ($chaves as $key => $value) {
            # realiza o implode nas chaves do array
            $campos = implode(", ", $chaves);
        }
        $array_generico['campos'] = $campos;
        $array_generico['valores'] = $valores;
        return $array_generico;
    }
    public function Update($id,$dados){

        /**
         * Realiza o Update na tabela usuarios
         * @param int $id
         * @param array $dados
         */

        $pdo = $this->Conect();
        $sql = $pdo->prepare("UPDATE usuarios SET nome =:nome WHERE id=:id");
        $sql->bindParam(":id",$id);
        $sql->bindParam(":nome",$dados['nome']);
        $sql->execute();
    }
    public function Delete($id){
        /**
         * Exclui um usuario da tabela
         * @param int $id 
         */
        $pdo = $this->Conect();
        $sql = $pdo->prepare("DELETE FROM usuarios WHERE id=:id");
        $sql->bindParam(":id",$id);
        $sql->execute();

    }
}
