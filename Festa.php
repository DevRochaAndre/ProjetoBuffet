<?php

class Festa {

    private $id;
    private $nomePacote;
    private $descricao;
    private $valor;

    public function __construct($nomePacote, $descricao, $valor) {
        $this->nomePacote = $nomePacote;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    public function getNomePacote() {
        return $this->nomePacote;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }
}
