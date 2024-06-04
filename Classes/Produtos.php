<?php

/**
 * 
 * @author Agamenon Junior 
 * 
 */
class Produto
{

    private $id;
    private $Nome;
    private $valor;
    private $imagem;
    private $quantidade;
    private $categoria;


    /**
     * Get the value of id
     * @param int $id
     * @return int id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     * @param int $id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Nome
     * @param String $nome
     * @return String
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     * @param String $nome
     */
    public function setNome($Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Get the value of valor
     * @param float $valor
     * @return float
     */
    public function getValor() : float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     * @param float $valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of imagem
     * @param String $img
     * @return String
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     * @param String $img
     */
    public function setImagem($imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of quantidade
     * @param int $quantidade
     * @return int $quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     * @param int $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of categoria
     * @param String $Categoria
     * @return String $Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     * @param String $Categoria
     */
    public function setCategoria($categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }
}
