<?php
class Conexao
{
    private $usuario = 'root';
    private $senha = '';
    private $banco = '';

    public function conectar()
    {

        try {
            //realiza a conexao...
            $conn = new PDO("mysql:host=localhost;dbname=$this->banco", $this->usuario, $this->senha);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $error) {
            echo 'ERROR: ' . $error->getMessage();
        }
    }
}
