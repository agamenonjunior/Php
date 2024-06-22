<?php

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
}
