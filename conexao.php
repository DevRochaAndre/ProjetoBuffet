<?php

class conexao {

    
    public $pdo;
    public $host = 'localhost';
    public $user = 'root';
    public $pass = 'root';
    public $dbname = 'buffet';	

    public function abrirConexao() {

try {
    $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($this->pdo);
    echo "Conexao realizada com sucesso!<br>";
    }catch(PDOException $e){
        echo "Erro ao se conectar:".$e->getMessage();
    }

    }
   public function getPdo() {
        return $this->pdo;
    }
};
