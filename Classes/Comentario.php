<?php

class Comentario{

    private $id;
    private $texto;
    private $autor;
    private $postagem_ID;

    public function __construct($texto,$autor,$postagem_ID) {
        $this->texto = $texto;
        $this->autor = $autor;
        $this->postagem_ID = $postagem_ID;       
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
     * Get the value of texto
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     */
    public function setTexto($texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of postagem_ID
     */
    public function getPostagemID()
    {
        return $this->postagem_ID;
    }

    /**
     * Set the value of postagem_ID
     */
    public function setPostagemID($postagem_ID): self
    {
        $this->postagem_ID = $postagem_ID;

        return $this;
    }

}

?>