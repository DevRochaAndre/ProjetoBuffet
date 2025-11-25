<?php 

class Cliente {

    public $Id;
    public $nome;
    public $CPF;
    public $logradoura;
    public $telefone;

    public function dados($nome, $cpf, $logradoura, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->logradoura = $logradoura;
        $this->telefone = $telefone;
    }

    public function inserirNome() {
        return $this->nome;
    }

    public function inserirCPF() {
        return $this->CPF;
    }

    public function inserirLogradoura() {
        return $this->logradura;
    }

     public function telefone() {
        return $this->telefone;
    }

}

