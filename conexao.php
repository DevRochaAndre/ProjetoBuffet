<?php

class conexao {

    public $pdo;
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $dbname = 'buffet';

    public function abrirConexao() {

        try {
            $this->pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->pass
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo "Erro ao se conectar: " . $e->getMessage();
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}
