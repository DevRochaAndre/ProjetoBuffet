<?php

$host = "localhost";
$dbname = "buffet";
$user = "root";
$pass = "root";

try {
    $pdo = new PDO("mysql:host=$host;dbname=buffet;charset=utf8",$user,$pass);
    echo "Conexao realizada com sucesso!<br>";
    }catch(PDOException $e){
        echo "Erro ao se conectar:".$e->getMessage();
    };
