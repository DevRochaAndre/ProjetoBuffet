<?php
//vai carregar os planos do banco
require_once "conexao.php";
// cria um objeto conexao que conecta ao banco
$conexao = new conexao();
$conexao->abrirConexao();
$pdo = $conexao->getPdo();

$sql = $pdo->query("SELECT id, nomePacote FROM festas");
$planos = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="ProcessarFesta.php" method="post">

<label>Nome do Pacote:</label>
<input type="text" name="nomePacote" required>

<br><br>

<label>Descrição:</label>
<textarea name="descricao" required></textarea>

<br><br>

<label>Valor:</label>
<input type="number" name="valor" step="0.01" required>

<br><br>

<button type="submit">Cadastrar Festa</button>

</form>
