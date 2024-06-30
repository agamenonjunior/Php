<?php

class Cliente{

    private $Id;
    private $Nome;
    private $Sobrenome;
    private $Endereco;
    private $telefone;



    /**
     * Get the value of Id
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     */
    public function setId($Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Get the value of Nome
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     */
    public function setNome($Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Get the value of Sobrenome
     */
    public function getSobrenome()
    {
        return $this->Sobrenome;
    }

    /**
     * Set the value of Sobrenome
     */
    public function setSobrenome($Sobrenome): self
    {
        $this->Sobrenome = $Sobrenome;

        return $this;
    }

    /**
     * Get the value of Endereco
     */
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * Set the value of Endereco
     */
    public function setEndereco($Endereco): self
    {
        $this->Endereco = $Endereco;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     */
    public function setTelefone($telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }
}

?>