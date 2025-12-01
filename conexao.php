<?php

class Conexao
{
    private $host = "localhost";
    private $dbname = "buffet";
    private $user = "root";
    private $pass = "root";
    public $pdo;

    public function AbrirConexao()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->pass
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }

        return $this->pdo;
    }
}
