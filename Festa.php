<?php

class Festa {

    public $id;
    public $nomePacote;
    public $descricao;


    public function __construct($nomePacote, $descricao, $valor) {
        $this->nomePacote = $nomePacote;
            }


    public function getNomePacote() {
        return $this->nomePacote;
    }


        $this->descricao = $descricao;
            public function getDescricao() {
        return $this->descricao;
    }

}
