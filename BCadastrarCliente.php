<?php
require "conexao.php";


$nome = $_POST["Nome"];
$CPF = $_POST["CPF"];
$logradoura = $_POST["Logradoura"];
$telefone = $_POST["Telefone"];



try {
   
    $sql = $pdo->prepare("insert into Cliente (Nome,CPF,Logradoura,Telefone) Values (?,?,?,?)");
    $sql->execute ([$nome,$CPF,$logradoura,$telefone]);
    echo "Registro inserido com sucesso!";
}
catch (PDOException $erro){
    echo $erro->getMessage();

}

?>
<br><br>
<a href="index.php">
    <button type="button">Voltar ao Menu Principal</button>
</a>