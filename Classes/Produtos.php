<?php
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
 * Get the value of valor
 */
public function getValor()
{
return $this->valor;
}

/**
 * Set the value of valor
 */
public function setValor($valor): self
{
$this->valor = $valor;

return $this;
}

/**
 * Get the value of imagem
 */
public function getImagem()
{
return $this->imagem;
}

/**
 * Set the value of imagem
 */
public function setImagem($imagem): self
{
$this->imagem = $imagem;

return $this;
}

/**
 * Get the value of quantidade
 */
public function getQuantidade()
{
return $this->quantidade;
}

/**
 * Set the value of quantidade
 */
public function setQuantidade($quantidade): self
{
$this->quantidade = $quantidade;

return $this;
}

/**
 * Get the value of categoria
 */
public function getCategoria()
{
return $this->categoria;
}

/**
 * Set the value of categoria
 */
public function setCategoria($categoria): self
{
$this->categoria = $categoria;

return $this;
}
}

?>
