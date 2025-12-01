<?php

require_once "ClienteDAO.php";

// Verifica se o ID chegou via GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID do cliente não informado!");
}

$id = intval($_GET['id']); // Garante que é um número

$dao = new ClienteDAO();

// Chama o método excluir
if ($dao->excluir($id)) {
    
    header("Location: listar_clientes.php?mensagem=Cliente+excluido+com+sucesso");
    exit;
} else {
    
    die("Erro ao excluir cliente!");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Excluir Cliente</title>
</head>
<body>
    <h2><?= htmlspecialchars($mensagem) ?></h2>
    <a href="listar_clientes.php"><button>Voltar à Lista</button></a>
</body>
</html>