<?php

class User{
/**
 * @author  Agamenon Junior 
 * Classe Genérica para Manipular Dados de Usuário
 */

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $nivel;
    private $status;
    
    
    public function __construct($nome,$email,$senha,$nivel,$status) {
     /**
     * __construct
     *
     * @param  string $nome
     * @param  string $email
     * @param  string $senha
     * @param  int $nivel
     * @param  int $status
     * @return void
     */
        
        $this->nome   = $nome;
        $this->email  = $email;
        $this->senha  = $senha;
        $this->nivel  = $nivel;
        $this->status = $status;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha($senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of nivel
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     */
    public function setNivel($nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }
}

?>