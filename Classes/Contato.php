<?php

require_once('Conexao.php');

class Contato
{

    private $remetente;
    private $destinatario;
    private $assunto;
    private $mensagem;

    public function __construct($remetente, $destinatario, $assunto, $mensagem)
    {
        $this->remetente = $remetente;
        $this->destinatario = $destinatario;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;
    }

    /**
     * Get the value of remetente
     */
    public function getRemetente()
    {
        return $this->remetente;
    }

    /**
     * Set the value of remetente
     */
    public function setRemetente($remetente): self
    {
        $this->remetente = $remetente;

        return $this;
    }

    /**
     * Get the value of destinatario
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Set the value of destinatario
     */
    public function setDestinatario($destinatario): self
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get the value of assunto
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Set the value of assunto
     */
    public function setAssunto($assunto): self
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Get the value of mensagem
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * Set the value of mensagem
     */
    public function setMensagem($mensagem): self
    {
        $this->mensagem = $mensagem;

        return $this;
    }

    /**
     * Adicionar function
     *
     * Realiza o cadastro de um registro no Banco de dados
     * 
     * @return void
     */
    public function Adicionar(){
        $conn = new Conexao();
        $conn->conectar();
        $sql = "INSERT INTO contatos (remetente,destinatario, assunto, mensagem) VALUES (:remetente, :destinatario, :assunto, :mensagem)";
        $sql = $this->$conn->prepare($sql);
        $sql->bindValue(':remetente',$this->remetente);
        $sql->bindValue(':destinatario',$this->destinatario);
        $sql->bindValue(':assunto',$this->assunto);
        $sql->bindValue(':mensagem',$this->mensagem);
        $sql->execute();

    }
    /**
     * ListarAll function
     *
     * Realiza uma consulta ao banco de dados e retorna todos os registros válidos
     * 
     * @return void
     */
    public function ListarAll(){
        $conn = new Conexao();
        $conn->conectar();
        $sql = "SELECT * FROM contatos";
        $sql = $this->$conn->prepare();
        $sql->execute();

       while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        # code...
        echo "Remetente:{$linha['remetente']} - Destinatário :{$linha['destinatario']} - Assunto :{$linha['assunto']} - Mensagem :{$linha['mensagem']}";
       }

    }
    /**
     * Delete function
     *
     * Realiza a exclusão de um registro no banco de dados
     * 
     * @param [type] $id
     * @return void
     */
    public function Delete($id){
        $conn = new Conexao();
        $conn->conectar();
        $sql = "DELETE * FROM contatos WHERE id = :id";
        $sql = $this->$conn->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

    }

    public function Update($id, $mensagem){
        $conn = new Conexao();
        $conn->conectar();
        $sql = "UPDATE contatos SET mensagem = :mensagem WHERE id = :id";
        $sql = $this->$conn->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->bindValue(':mensagem',$mensagem);
        $sql->execute();

    }



}
